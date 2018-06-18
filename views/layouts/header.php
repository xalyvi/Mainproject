<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Арена | <?php echo $site; ?></title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Questrial:400%7CMontserrat:300,400,700,700i' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="/template/css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="/template/css/font-icons.css" type="text/css"/>
  <link rel="stylesheet" href="/template/css/style.css" type="text/css"/>
  <link rel="stylesheet" href="/template/css/color.css" type="text/css"/>

  <!-- Favicons -->
  <link rel="shortcut icon" href="/template/img/favicon.ico">
  <link rel="apple-touch-icon" href="/template/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/template/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/template/img/apple-touch-icon-114x114.png">
  
</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>
  

  <!-- Mobile Sidenav -->    
  <header class="sidenav" id="sidenav">
    <!-- Search -->
    <div class="sidenav__search-mobile">
      <form method="get" class="sidenav__search-mobile-form">
        <input type="search" class="sidenav__search-mobile-input" placeholder="Найти..." aria-label="Search input">
        <button type="submit" class="sidenav__search-mobile-submit" aria-label="Submit search">
          <i class="ui-search"></i>
        </button>
      </form>
    </div>

    <nav>
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="/catalog/keyboard/" class="sidenav__menu-link">Клавиатуры</a>
          <!--
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="#" class="sidenav__menu-link">Razer</a></li>
            <li><a href="#" class="sidenav__menu-link">SteelSeries</a></li>
            <li><a href="#" class="sidenav__menu-link">Logitech</a></li>
            <li><a href="#" class="sidenav__menu-link">Corsair</a></li>
          </ul>
          -->
        </li>
      
        <li>
          <a href="/catalog/mouse/" class="sidenav__menu-link">Мыши</a>
          <!--
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="#" class="sidenav__menu-link">Razer</a></li>
            <li><a href="#" class="sidenav__menu-link">SteelSeries</a></li>
            <li><a href="#" class="sidenav__menu-link">Logitech</a></li>
            <li><a href="#" class="sidenav__menu-link">Corsair</a></li>
          </ul>
          -->
        </li>
        
        <li>
          <a href="/catalog/headset/" class="sidenav__menu-link">Наушники</a>
          <!--
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="#" class="sidenav__menu-link">Razer</a></li>
            <li><a href="#" class="sidenav__menu-link">SteelSeries</a></li>
            <li><a href="#" class="sidenav__menu-link">Logitech</a></li>
            <li><a href="#" class="sidenav__menu-link">Corsair</a></li>
          </ul>
          -->
        </li>
        <!--
        <li>
          <a href="#" class="sidenav__menu-link">Акксесуары</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li>
              <a href="#" class="sidenav__menu-link">Все Акксесуары</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>
                  <a href="#" class="sidenav__menu-link">Аккустика</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Атрибутика и сувениры</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Игровые рули</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Игровые геймпады</a>
                </li>
              </ul>
            </li>
            
            <li>
              <a href="#" class="sidenav__menu-link">Для Стримера</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>
                  <a href="#" class="sidenav__menu-link">Кресла</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Микрофоны</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="sidenav__menu-link"></a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>
                  <a href="#" class="sidenav__menu-link"></a>
                </li>
              </ul>
            </li>
            
          </ul>
        </li>
-->
        <li>
         <?php if (User::isGuest()): ?>
          <a href="/user/action" class="sidenav__menu-link">Войти</a>
          <?php else: ?>
          <a href="/user/logout" class="sidenav__menu-link">Выйти</a>
          <?php endif; ?>
        </li>
      </ul>
    </nav>
  </header> <!-- end mobile sidenav -->



  <main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">

          <!-- Top Bar -->
          <div class="top-bar d-none d-lg-flex">

            <!-- Currency / Language -->
            <ul class="top-bar__currency-language">
              <li class="top-bar__language">
                <a href="#">Русский</a>
                <!--
                <div class="top-bar__language-dropdown">
                  <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
                -->
              </li>
              <li class="top-bar__currency">
                <a href="#">RUB</a>
                <!--
                <div class="top-bar__currency-dropdown">
                  <ul>
                    <li><a href="#">USD</a></li>
                    <li><a href="#">EUR</a></li>
                  </ul>
                </div>
                -->
              </li>              
            </ul>

            <!-- Promo -->
            <p class="top-bar__promo text-center">Бесплатная доставка на заказ свыше 3000</p>

            <!-- Sign in / Wishlist / Cart -->
            <div class="top-bar__right">
                <?php if (User::isGuest()): ?>
              <!-- Sign In -->
              <a href="/user/action" class="top-bar__item top-bar__sign-in"><i class="ui-user"></i>Войти</a>
              <?php else: ?>
              <!-- Sign Out -->
              <a href="/cabinet" class="top-bar__item">КАБИНЕТ</a>
              <a href="/user/logout" class="top-bar__item top-bar__sign-in"><i class="ui-user"></i>Выйти</a>
                <?php endif; ?>
              <!-- Wishlist -->
                <div class="top-bar__item nav-cart">
                  <i class="ui-heart"></i><span>&nbsp;(<span id="wish-count"><?php echo Cart::countWish(); ?></span>)</span>
                  <?php $productsInWish = Cart::getWishlist();
                  if ($productsInWish == true) {
                      $wishIds = array_keys($productsInWish);
                      $wishlist = Product::getProductsByIds($wishIds);
                  } ?>
                 <?php if ($productsInWish): ?>
                  <div class="nav-cart__dropdown">
                      <?php foreach ($wishlist as $wosh): ?>
                      <div class="nav-cart__items">
                    <div class="nav-cart__item clearfix">
                      <div class="nav-cart__img">
                        <a href="/catalog/product/<?php echo $wosh['id']; ?>">
                          <img src="/template/img/shop/<?php echo $wosh['cartimg']; ?>.jpg" alt="">
                        </a>
                      </div>
                      <div class="nav-cart__title">
                        <a href="#">
                          <?php echo $wosh['title']; ?>
                        </a>
                        <div class="nav-cart__price">
                          <span>RUB <?php echo $wosh['price']; ?></span>
                        </div>
                      </div>
                      <div class="nav-cart__remove">
                        <a href="/cart/deletewish/<?php echo $wosh['id']; ?>"><i class="ui-close"></i></a>
                      </div>
                    </div>
                  </div> <!-- end cart items -->
                      <?php endforeach; ?>
                  </div>
                  <?php endif; ?>
              </div>
              <div class="top-bar__item nav-cart">                
                <a href="/cart">
                  <i class="ui-bag"></i>(<span id="cart-count"><?php echo Cart::countItems();  ?></span>)
                </a>
                <?php $productsInCart = Cart::getProducts();
                  if ($productsInCart == true) {
                      $productsIds = array_keys($productsInCart);
                      $products = Product::getProductsByIds($productsIds);
                      $totalPrice = Cart::getTotalPrice($products);
                  } ?>
                 <?php if ($productsInCart): ?>
                <div class="nav-cart__dropdown">
                 <?php foreach($products as $product): ?>
                  <div class="nav-cart__items">
                    <div class="nav-cart__item clearfix">
                      <div class="nav-cart__img">
                        <a href="/catalog/product/<?php echo $product['id']; ?>">
                          <img src="/template/img/shop/<?php echo $product['cartimg']; ?>.jpg" alt="">
                        </a>
                      </div>
                      <div class="nav-cart__title">
                        <a href="#">
                          <?php echo $product['title']; ?>
                        </a>
                        <div class="nav-cart__price">
                          <span><?php echo $productsInCart[$product['id']]; ?> x</span>
                          <span>RUB <?php echo $product['price']; ?></span>
                        </div>
                      </div>
                      <div class="nav-cart__remove">
                        <a href="/cart/delete/<?php echo $product['id']; ?>"><i class="ui-close"></i></a>
                      </div>
                    </div>
                  </div> <!-- end cart items -->
                <?php endforeach; ?>
                  <div class="nav-cart__summary">
                    <span>Итого</span><!-- Cart Subtotal -->
                    <span class="nav-cart__total-price"><?php echo $totalPrice; ?></span>
                  </div>

                  <div class="nav-cart__actions mt-20">
                    <a href="/cart" class="btn btn-md btn-light"><span>Посмотреть Корзину</span></a><!-- View Cart -->
                    <a href="/cart/checkout" class="btn btn-md btn-color mt-10"><span>Перейти к Оплате</span></a><!-- Proceed to Checkout -->
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>

          </div> <!-- end top bar -->

          <div class="flex-parent">

            <!-- Mobile Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open mobile menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> <!-- end mobile menu button -->

            <!-- Logo -->
            <a href="/" class="logo">
              <img class="logo__img" src="/template/img/logo_light.png" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="nav__dropdown active">
                  <a href="/catalog/keyboard">Клавиатуры</a>
                  <!--
                  <ul class="nav__dropdown-menu">
                    <li><a href="#">Razer</a></li>
                    <li><a href="#">Steelseries</a></li>
                    <li><a href="#">Logitech</a></li>
                    <li><a href="#">Corsair</a></li>
                  </ul>
                  -->
                </li>

                <li class="nav__dropdown">
                  <a href="/catalog/mouse">Мыши</a>
                  <!--
                  <ul class="nav__dropdown-menu">
                    <li><a href="#">Razer</a></li>
                    <li><a href="#">Steelseries</a></li>
                    <li><a href="#">Logitech</a></li>
                    <li><a href="#">Corsair</a></li>
                  </ul>
                  -->
                </li>
                
                <li class="nav__dropdown">
                  <a href="/catalog/headset">Наушники</a>
                  <!--
                  <ul class="nav__dropdown-menu">
                    <li><a href="#">Razer</a></li>
                    <li><a href="#">Steelseries</a></li>
                    <li><a href="#">Logitech</a></li>
                    <li><a href="#">Corsair</a></li>
                  </ul>
                  -->
                </li>
                <!--
                <li class="nav__dropdown">
                  <a href="catalog.php">Акксесуары</a>
                  <ul class="nav__dropdown-menu nav__megamenu">
                    <li>
                      <div class="nav__megamenu-wrap">
                        <div class="row">

                          <div class="col nav__megamenu-item">
                            <a href="#" class="nav__megamenu-title">Все акксесуары</a>
                            <ul class="nav__megamenu-list">
                              <li><a href="#">Акустика</a></li>
                              <li><a href="#">Атрибутика и сувениры</a></li>
                              <li><a href="#">Игровые рули</a></li>
                              <li><a href="#">Игровые геймпады</a></li>
                            </ul>
                          </div>

                          <div class="col nav__megamenu-item">
                            <a href="#" class="nav__megamenu-title">Для стримера</a>
                            <ul class="nav__megamenu-list">
                              <li><a href="#">Кресла</a></li>
                              <li><a href="#">Микрофоны</a></li>
                            </ul>
                          </div>

                          <div class="col nav__megamenu-item">
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                -->
                <li class="nav__dropdown">
                  <a href="catalog/new">Новинки</a>
                </li>

              </ul> <!-- end menu -->

            </nav> <!-- end nav-wrap -->


            <!-- Search -->
            <div class="flex-child nav__search d-none d-lg-block">
              <form method="get" class="nav__search-form">
                <input type="search" class="nav__search-input" placeholder="Найти">
                <button type="submit" class="nav__search-submit">
                  <i class="ui-search"></i>
                </button>
              </form>
            </div>

            
            <!-- Mobile Wishlist -->
            
            <a href="/cabinet/wishlist" class="nav__mobile-wishlist d-lg-none" aria-label="Mobile wishlist">
              <i class="ui-heart"></i>
              <span>(<?php echo Cart::countWish(); ?>)</span>
            </a>

            <!-- Mobile Cart -->
            <a href="/cart" class="nav__mobile-cart d-lg-none">
              <i class="ui-bag"></i>
              <span class="nav__mobile-cart-amount">(<span id="cart-count"><?php echo Cart::countItems();  ?></span>)</span>
            </a>

            
         
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
