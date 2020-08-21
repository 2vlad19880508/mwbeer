<?php
/*
Template Name: Корзина
*/
get_header(); ?>





    <!-- Page Header -->
    <header class="header page-header image-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title"><span><?php the_title(); ?></span></h1>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Page Content -->
<main class="entry-content">

<!-- Breadcrumbs -->
    <div class="page-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="list-inline list-unstyled" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="http://050.paradigma.in.ua"><span itemprop="name">Главная</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="name"><?php the_title(); ?></span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="page-section">
        <div class="container">
            <?php if (Cart::getCount() > 0): ?>
                <h3 class="section-heading"><span>Ваши товары</span></h3>

                <form action="#" method="POST" id="cart-form">
                    <div class="cart-products">
                        <?php foreach (Cart::getProducts() as $p) : ?>
                            <div class="cart-position">
                                <div class="cart-position__image-box">
                                    <img src="<?= get_post_meta( $p->ID, 'thumb', true )?>">
                                </div>
                                <div class="cart-position__name">
                                    <a href="<?= get_permalink($p->ID) ?>">
                                        <span><?= $p->post_title ?></span>
                                    </a>
                                    <input type="hidden" name="title" value="<?= $p->post_title ?>">
                                </div>
                                <div class="cart-position__count">
                                    <span>Кол-во <?= $colvo = Cart::getCount($p->ID)?></span>
                                </div>
                                <div class="cart-position__price">
                                    Цена <span><?= $cena = get_post_meta( $p->ID, 'цена', true ) * $colvo?></span> грн.
                                </div>
                                <div class="cart-position__remove">
                                    <a href="#" onclick="deleteProduct(<?= $p->ID ?>);return false;">Удалить</a>
                                </div>
                                <!-- По данному принципу добавляем нужные
                                         скрытые поля для каждой позиции -->
                                <input type="hidden" name="id-<?= $p->ID ?>" value="<?=Cart::getCount($p->ID)?>">
                            </div>							
                        <?php endforeach; ?>
                    </div>
                    <p class="cart-products__total">
                        Всего <span id='total-price'>0</span> грн.
						<?php echo $vsego;
							?>
                        <input type="hidden" name="price" value="<?= $p->post_title ?>">
                    </p>

                    <div class="cart-data">
                        <div class="cart-data__personal">
                            <h4 class="cart-data__docket">Введите Ваши контактные данные</h4>
                            <input class="new-input" type="text" name="first_name" placeholder="Имя">
                            <input class="new-input" type="text" name="last_name" placeholder="Фамилия">
                            <input class="new-input" type="text" name="tel" placeholder="Телефон">
                        </div>

                        <div class="cart-data__delivery">
                            <h4 class="cart-data__docket">Способ доставки</h4>
                            <div class="cart-data__row cart-data__row_small">
                                <input onclick="$('input[name=delivery_inp]').attr('placeholder','Курьер по Киеву')"
                                       type="radio" name="delivery" id="delivery-1" class="new-radio"
                                       value="Курьер по Киеву" checked>
                                <label for="delivery-1" class="new-label">Курьер по Киеву</label>
                                <input onclick="$('input[name=delivery_inp]').attr('placeholder','Отделение НП')"
                                       type="radio" name="delivery" id="delivery-2" class="new-radio"
                                       value="Отделение НП">
                                <label for="delivery-2" class="new-label">Отделение НП</label>
                            </div>
                            <div class="cart-data__addresses">
                                <input class="new-input" type="text" name="delivery_inp" placeholder="Адрес доставки">
                            </div>
                        </div>

                        <div class="cart-data__payment">
                            <h4 class="cart-data__docket">Способ оплаты</h4>
                            <div class="cart-data__row cart-data__row_large">
                                <input type="radio" checked name="payment" id="payment-1" class="new-radio" value="1">
                                <label for="payment-1" class="new-label">Наложенный платеж</label>
                                <input type="radio" name="payment" id="payment-2" class="new-radio" value="2">
                                <label for="payment-2" class="new-label">Наличными курьеру</label>
                                <input type="radio" name="payment" id="payment-3" class="new-radio" value="3">
                                <label for="payment-3" class="new-label">Банковский платеж Visa/MasterCard</label>
                            </div>
                        </div>
                        <input class='new-submit' type="submit" value="Оформить" onclick="$('form#cart-form').valid()?sendOrder():false;return false">

                    </div>
                </form>
            <?php else: ?>
                <h3 class="section-heading"><span>Корзина пуста</span></h3>
            <?php endif ?>


        </div>
    </section>

</main><!-- /.enry-content -->

<?php get_footer(); ?>
