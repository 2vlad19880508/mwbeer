<?php


function LiqPayGetForm($price, $orderNumber)
{

    $public_key = 'i90834820939';
    $private_key = 'X8a3JVwaLZvDr3FfauuAI8JPsimVIu3OkPNq7hij';

    $liqpay = new LiqPay($public_key, $private_key);
    $html = $liqpay->cnb_form(array(
        'version' => '3',
        'action' => 'pay',
        'amount' => $price, // сумма заказа
        'currency' => 'UAH',
        /* перед этим мы ведь внесли заказ в  таблицу,
        $insert_id = $wpdb->query( 'insert into table_orders' );
        */
        'description' => 'Оплата заказа',
        'order_id' => $orderNumber,
        // если пользователь возжелает вернуться на сайт
        'result_url' => 'http://mwbeer.com.ua/spasibo/',
        /*
            если не вернулся, то Webhook LiqPay скинет нам сюда информацию из формы,
            в частонсти все тот же order_id, чтобы заказ
             можно было обработать как оплаченый
        */
        'server_url' => 'http://mwbeer.com.ua/liqpay_status/',
        'language' => 'ru', // uk, en
//        'sandbox' => '1' // и куда же без песочницы,
        // не на реальных же деньгах тестировать
    ));

    return $html;

}

function order_cart()
{
    $payment = [
        1 => 'Наложенный платеж',
        2 => 'Наличными курьеру',
        3 => 'Банковский платеж Visa/MasterCard',
    ];

    $orderNumber = (int)(microtime(true) + rand(0, 99999));
    $content = '<h4>Заказ номер ' . $orderNumber . ' Товары</h4>';

    $products = Cart::getProducts();

    $content .= '<table width="100%" border="1">';
    $content .= '<tr>' . '<td>' . 'Товар' . '</td>' . '<td>' . 'Кол-во' . '</td>' . '</tr>';
    foreach ($products as $product) {
        $content .=
            '<tr>' .
            '<td>' . $product->post_title . '</td>' .
            '<td>' . Cart::getCount($product->ID) . '</td>' .
            '</tr>';

    }
    $content .= '</table>';
    $content .= '<br/><br/>';
    $content .= '<h4>контактные данные</h4>';

    $content .= '<table width="100%" border="1">';
    $content .= '<tr>' . '<td>' . 'Имя ' . '</td>' . '<td>' . $_POST['first_name'] . '</td>' . '</tr>';
    $content .= '<tr>' . '<td>' . 'Фамилия ' . '</td>' . '<td>' . $_POST['last_name'] . '</td>' . '</tr>';
    $content .= '<tr>' . '<td>' . 'Телефон ' . '</td>' . '<td>' . $_POST['tel'] . '</td>' . '</tr>';
    $content .= '<tr>' . '<td>' . 'Способ доставки ' . '</td>' . '<td>' . $_POST['delivery'] . ',' . $_POST['delivery_inp'] . '</td>' . '</tr>';
    $content .= '<tr>' . '<td>' . 'Способ оплаты ' . '</td>' . '<td>' . $payment[$_POST['payment']] . '</td>' . '</tr>';
    $content .= '</table>';


    $headers = array('Content-Type: text/html; charset=UTF-8');
//    wp_mail("maltzerwheatman@gmail.com", "Форма заказа", $content, $headers);
    wp_mail(ORDER_EMAIL, "Форма заказа", $content, $headers);

    $result = [];

    if ($_POST['payment'] == '3') {
        $result['laqpay_form'] = LiqPayGetForm(Cart::getTotalPrice(),$orderNumber);
    }

//    Cart::clear();

    echo json_encode($result);

    wp_die();
}

add_action('wp_ajax_order_cart', 'order_cart');
add_action('wp_ajax_nopriv_order_cart', 'order_cart');
