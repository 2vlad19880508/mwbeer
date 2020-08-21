<?php

/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */

if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

add_theme_support( 'post-thumbnails' ); // для всех типов постов

const ORDER_EMAIL = "maltzerwheatman@gmail.com";
//const ORDER_EMAIL = "maxim.tkachuk.private@gmail.com";

## Добавляет миниатюры записи в таблицу записей в админке
if(1){
	add_action('init', 'add_post_thumbs_in_post_list_table', 20 );
	function add_post_thumbs_in_post_list_table(){
		// проверим какие записи поддерживают миниатюры
		$supports = get_theme_support('post-thumbnails');

		// $ptype_names = array('post','page'); // указывает типы для которых нужна колонка отдельно

		// Определяем типы записей автоматически
		if( ! isset($ptype_names) ){
			if( $supports === true ){
				$ptype_names = get_post_types(array( 'public'=>true ), 'names');
				$ptype_names = array_diff( $ptype_names, array('attachment') );
			}
			// для отдельных типов записей
			elseif( is_array($supports) ){
				$ptype_names = $supports[0];
			}
		}

		// добавляем фильтры для всех найденных типов записей
		foreach( $ptype_names as $ptype ){
			add_filter( "manage_{$ptype}_posts_columns", 'add_thumb_column' );
			add_action( "manage_{$ptype}_posts_custom_column", 'add_thumb_value', 10, 2 );
		}
	}

	// добавим колонку
	function add_thumb_column( $columns ){
		// подправим ширину колонки через css
		add_action('admin_notices', function(){
			echo '
			<style>
				.column-thumbnail{ width:80px; text-align:center; }
			</style>';
		});

		$num = 1; // после какой по счету колонки вставлять новые

		$new_columns = array( 'thumbnail' => __('Thumbnail') );

		return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
	}

	// заполним колонку
	function add_thumb_value( $colname, $post_id ){
		if( 'thumbnail' == $colname ){
			$width  = $height = 45;

			// миниатюра
			if( $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true ) ){
				$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
			}
			// из галереи...
			elseif( $attachments = get_children( array(
				'post_parent'    => $post_id,
				'post_mime_type' => 'image',
				'post_type'      => 'attachment',
				'numberposts'    => 1,
				'order'          => 'DESC',
			) ) ){
				$attach = array_shift( $attachments );
				$thumb = wp_get_attachment_image( $attach->ID, array($width, $height), true );
			}

			echo empty($thumb) ? ' ' : $thumb;
		}
	}
}

function kama_excerpt( $args = '' ){
	global $post;

	$default = array(
		'maxchar'   => 350,   // количество символов.
		'text'      => '',    // какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
							  // Если есть тег <!--more-->, то maxchar игнорируется и берется все до <!--more--> вместе с HTML
		'autop'     => true,  // Заменить переносы строк на <p> и <br> или нет
		'save_tags' => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'
		'more_text' => 'Читать дальше...', // текст ссылки читать дальше
	);

	if( is_array($args) ) $_args = $args;
	else                  parse_str( $args, $_args );

	$rg = (object) array_merge( $default, $_args );
	if( ! $rg->text ) $rg->text = $post->post_excerpt ?: $post->post_content;
	$rg = apply_filters( 'kama_excerpt_args', $rg );

	$text = $rg->text;
	$text = preg_replace( '~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text ); // убираем блочные шорткоды: [foo]some data[/foo]. Учитывает markdown
	$text = preg_replace( '~\[/?[^\]]*\](?!\()~', '', $text ); // убираем шоткоды: [singlepic id=3]. Учитывает markdown
	$text = trim( $text );

	// <!--more-->
	if( strpos( $text, '<!--more-->') ){
		preg_match('/(.*)<!--more-->/s', $text, $mm );

		$text = trim($mm[1]);

		$text_append = ' <a href="'. get_permalink( $post->ID ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
	}
	// text, excerpt, content
	else {
		$text = trim( strip_tags($text, $rg->save_tags) );

		// Обрезаем
		if( mb_strlen($text) > $rg->maxchar ){
			$text = mb_substr( $text, 0, $rg->maxchar );
			$text = preg_replace('~(.*)\s[^\s]*$~s', '\\1 ...', $text ); // убираем последнее слово, оно 99% неполное
		}
	}

	// Сохраняем переносы строк. Упрощенный аналог wpautop()
	if( $rg->autop ){
		$text = preg_replace(
			array("~\r~", "~\n{2,}~", "~\n~",   '~</p><br ?/>~'),
			array('',     '</p><p>',  '<br />', '</p>'),
			$text
		);
	}

	$text = apply_filters( 'kama_excerpt', $text, $rg );

	if( isset($text_append) ) $text .= $text_append;

	return ($rg->autop && $text) ? "<p>$text</p>" : $text;
}

function add_to_cart()
{
    if (key_exists('product_id', $_POST) && isset($_POST['product_id'])) {
        Cart::add($_POST['product_id']);

    }
    wp_die();
}

add_action('wp_ajax_add_to_cart', 'add_to_cart');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart');


add_action('wp_ajax_delete_from_cart', 'delete_from_cart');
add_action('wp_ajax_nopriv_delete_from_cart', 'delete_from_cart');

function delete_from_cart()
{
    if (key_exists('product_id', $_POST) && isset($_POST['product_id'])) {
        Cart::delete($_POST['product_id']);

    }
    wp_die();
}


class Cart{

    private static function init()
    {
        if (!session_id()) {
            session_start();
        }
    }

    public static function add($id)
    {
        self::init();

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]++;
        } else {
            $_SESSION['cart'][$id] = 1;
        }
    }

    public static function delete($id)
    {
        self::init();

        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
    }

    public static function clear()
    {
        self::init();

        if (self::getCount() > 0) {
            $_SESSION['cart'] = [];
        }
    }

    public static function getCount($productID = false)
    {
        self::init();

        $count = 0;

        if ($productID) {
            if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$productID])) {
                $count = $_SESSION['cart'][$productID];
            }
        } else {
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $id => $itemCount) {
                    $count += $itemCount;
                }
            }
        }

        return $count;
    }

    public static function getProducts()
    {
        self::init();

        $IDs = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? array_keys($_SESSION['cart']) : [];

        if (count($IDs) == 0) {
            return [];
        }
        $args = array(
            'post__in' => $IDs
        );

        $posts = get_posts($args);

        return $posts;
    }

    public static function getTotalPrice()
    {
        $IDs = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? array_keys($_SESSION['cart']) : [];

        $price = 0;
        foreach ($IDs as $id) {
            $price = (int)get_post_meta($id, 'цена', true);
        }

        return $price;
    }
}

require_once __DIR__.'/actions/ajax_order_cart.php';


// LiqPay
require_once __DIR__ . '/LiqPay.php';


add_action('wp_ajax_LiqPayGetForm', 'LiqPayGetForm');
add_action('wp_ajax_nopriv_LiqPayGetForm', 'LiqPayGetForm');

// слушатель статуса
add_action('init', function () {
    if ($_SERVER['REQUEST_URI'] == '/liqpay_status/') { //проверим чтобы код не срабатывал на всех страницах
        if (isset($_POST['data'])) {
            $result = json_decode(base64_decode($_POST['data']));
            // данные вернуться в base64 формат JSON

            if ($result->status == 'success' || $result->status == 'sandbox') {

                $content = '<h4>Заказ номер ' . $result->order_id . ' оплачен</h4>';

                $headers = array('Content-Type: text/html; charset=UTF-8');
                wp_mail(ORDER_EMAIL, "Форма заказа - оплата", $content, $headers);
            }
        }

        die;
    }
});

/* Вставляет мета-тег роботс noindex,nofollow постраничного разбиения */
	function my_meta_noindex () {
		if (
			is_paged() // Все и любые страницы пагинации
		) {echo "".'<meta name="robots" content="noindex,nofollow" />'."\n";}
	}
add_action('wp_head', 'my_meta_noindex', 3); // добавляем свой noindex,nofollow в head