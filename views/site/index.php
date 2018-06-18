<?php $site = 'Главная'; include(ROOT.'/views/layouts/header.php'); ?>
    <!-- Hero Slider -->
    <section class="hero">
      <div id="owl-hero" class="owl-carousel owl-theme owl-carousel--dots-inside">        

        <div class="hero__slide" style="background-image: url(template/img/hero/1.jpg)">
          <div class="container text-center">
            <h1 class="hero__title">You will never have a good title</h1>
            <a href="single-product.php" class="hero__link">Shop Now</a>
          </div>          
        </div>

        <div class="hero__slide" style="background-image: url(template/img/hero/2.jpg)">
          <div class="container relative">
            <div class="hero__holder">
              <h1 class="hero__title-1" style="color: white;">some<br>razer<br>shit</h1>
              <a href="catalog/product/10" class="hero__link-1 btn btn-lg btn-light"><span>New Arrivals</span></a>
            </div>
          </div>
        </div>

        <div class="hero__slide" style="background-image: url(template/img/hero/3.jpg)">
          <div class="container text-center">
            <div class="hero__holder-1">
              <h1 class="hero__title-2">набор стримера</h1>
              <h3 class="hero__subtitle">Put something here</h3>
              <a href="single-product.php" class="hero__link-1 btn btn-lg btn-color"><span>Shop the trend</span></a>
            </div>
          </div>
        </div>

      </div> <!-- end owl -->
    </section> <!-- end hero slider -->

    <!-- Feature -->
    <section class="section-wrap pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-3 feature">
            <i class="ui-cube feature__icon"></i>
            <div class="feature__holder">
              <h6 class="feature__title">Бесплатная отправка</h6><!-- Free Shipping -->
              <span class="feature__text">На заказ выше RUB 6000</span><!-- On orders over $100 -->
            </div>            
          </div>
          <div class="col-md-3 feature">
            <i class="ui-plane feature__icon"></i>
            <div class="feature__holder">
              <h6 class="feature__title">Быстрая доставка</h6> <!-- Fast Delivery -->
              <span class="feature__text">Получи свой товар в течении недели</span><!-- Get your item within 1 week -->
            </div>
          </div>
          <div class="col-md-3 feature">
            <i class="ui-pricetag feature__icon"></i>
            <div class="feature__holder">
              <h6 class="feature__title"><span class="feature__promo">50 Скидка</span> Зимняя распродажа</h6> <!-- 50% Off winter sale -->
              <span class="feature__text">Используй промокод GachiGASM</span><!-- Use code -->
            </div>
          </div>
        </div>
      </div>
    </section>    

    <!-- Best Seller -->
    <section class="section-wrap pb-30">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              Популярное<!-- best seller -->
            </h2>
          </div>
        </div>

        <div class="row row-8">
        
        <?php foreach ($catalogList as $catalogItem): ?>
         
          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="/catalog/product/<?php echo $catalogItem['id']; ?>" class="product__link" aria-label="Product">
                <img src="/template/img/shop/<?php echo $catalogItem['img']; ?>" alt="" class="product__img">
              </a>
              <!--
              <div class="product__actions">
                <a href="quickview.html" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Быстрый осмотр</span><!-- Quick View --> <!--
                </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Желаемое</span><!-- Wish List --> <!--
                </a>
              </div>
              -->
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="/catalog/product/<?php echo $catalogItem['id']; ?>"><?php echo $catalogItem['title'] ?></a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount">RUB <?php echo $catalogItem['price']; ?></span>
              </ins>
            </span>
          </div> <!-- end product -->
          
  <?php endforeach; ?>
       
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end best seller -->

    <!-- New Arrivals -->
    <section class="section-wrap no-padding">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              новинки <!-- new arrivals -->
            </h2>
          </div>
        </div>

        <div class="row row-8">
        
        
<?php foreach ($catalogListNew as $catalogItemNew): ?>
         
         
          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="/catalog/product/<?php echo $catalogItemNew['id']; ?>" class="product__link" aria-label="Product">
                <img src="/template/img/shop/<?php echo $catalogItemNew['img']; ?>" alt="" class="product__img">
              </a>
              <!--
              <div class="product__actions">
                <a href="quickview.html" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Быстрый осмотр</span><!-- Quick View -->
              <!--  </a> 
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Желаемое</span><!-- Wish List --> <!--
                </a>
              </div>
              -->
            </div>

            <div class="product__details">
              <h3 class="product__title">
                <a href="/catalog/product/<?php echo $catalogItemNew['id']; ?>"><?php echo $catalogItemNew['title']; ?></a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount"><?php echo ('RUB ' .$catalogItemNew['price']); ?></span>
              </ins>
            </span>
          </div> <!-- end product -->
          
          
<?php endforeach; ?>
       
       
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end new arrivals -->

    <!-- Testimonials -->
    <section class="section-wrap">
      <div class="container">

        <div class="heading-row mb-0">
          <div class="text-center">
            <h2 class="heading">
              Что говорят клиенты? <!-- What the customers say? -->
            </h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-8">

            <div id="owl-testimonials" class="owl-carousel owl-theme owl-carousel--dark-arrows owl-carousel--visible-arrows">

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 дней назад</span> <!-- 20 days ago -->
                </div>
                <p class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper ac erat sed sagittis. Sed a ex nec ante scelerisque vulputate sed at elit. Proin bibendum aliquet lobortis. Morbi semper odio sit.</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 дней назад</span> <!-- 20 days ago -->
                </div>
                <p class="testimonial__text">Curabitur in diam ut nulla tincidunt gravida. Praesent auctor lacus eget diam convallis, a volutpat diam sollicitudin. Vestibulum id nibh eget orci fermentum euismod vitae non ante. In euismod tortor lacus, nec.</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 дней назад</span> <!-- 20 days ago -->
                </div>
                <p class="testimonial__text">Nullam in massa et sapien facilisis malesuada. Aenean cursus consectetur eros, at faucibus metus tincidunt eu. Curabitur tempus diam eros, a pharetra turpis elementum a. Mauris sit amet rhoncus purus, sed dignissim.</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

            </div> <!-- end carousel -->
          </div>
        </div> <!-- end carousel row -->

      </div>
    </section> <!-- end testimonials -->

  <?php include(ROOT.'/views/layouts/footer.php'); ?>