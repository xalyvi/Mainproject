<?php $host = $_SERVER[HTTP_HOST]; $site = 'Каталог'; include(ROOT.'/views/layouts/header.php'); ?>
    <!-- Catalog -->
    <section class="section-wrap pt-60 pb-30 catalog">
      <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
          <li>
            <a href="/">Главная</a>
          </li>
          <li class="active">
            Каталог
          </li>
        </ol>

        <div class="row">
          <div class="col-lg-9 order-lg-2 mb-40">

            <!-- Filter -->          
            <div class="shop-filter">
              <p class="woocommerce-result-count">
                Показать 1-12 из 80 <!-- Showing: 1-12 of 80 results -->
              </p>
              <span class="woocommerce-ordering-label">Сортировать</span> <!-- Sort by -->
              <form class="woocommerce-ordering">
                
                 <select onChange="SelectSortType.call(this);">
                  <option value="1"<?php if ($_SERVER['REQUEST_URI'] == '/catalog' || $_SERVER['REQUEST_URI'] == '/catalog/mouse' || $_SERVER['REQUEST_URI'] == '/catalog/keyboard' || $_SERVER['REQUEST_URI'] == '/catalog/headset/') echo ' selected'; ?>>Default Sorting</option>
                  <option value="2"<?php if (preg_match('/dec/', $_SERVER['REQUEST_URI'])) echo ' selected'; ?>>Цена: от Высокой к Низкой</option> <!-- Price: high to low -->
                  <option value="3"<?php if (preg_match('/inc/', $_SERVER['REQUEST_URI'])) echo ' selected'; ?>>Цена: от Низкой к Высокой</option> <!-- Price: low to high -->
                  <option value="4"<?php if (preg_match('/new/', $_SERVER['REQUEST_URI'])) echo ' selected'; ?>>По Новизне</option> <!-- By Newness -->
                  <option value="by-popularity">по Популярности</option> <!-- By Popularity -->
                  <option value="rating">По Рейтингу</option> <!-- By Rating -->
                </select>
              </form>
              <script type="text/javascript">
                     function SelectSortType(){
                         var str = window.location.href;
                         if (this.options[this.selectedIndex].value == "1" &&  str.includes("mouse")) {
                             document.location.href = "/catalog/mouse";
                         } else if (this.options[this.selectedIndex].value == "2" && str.includes("mouse")) {
                             document.location.href = "/catalog/mouse/dec";
                         } else if (this.options[this.selectedIndex].value == "3" && str.includes("mouse")) {
                             document.location.href = "/catalog/mouse/inc";
                         } else if 
                         (this.options[this.selectedIndex].value == "4" && str.includes("mouse")) {
                             document.location.href = "/catalog/mouse/new";
                         } else if      
                        (this.options[this.selectedIndex].value == "1" && str.includes("keyboard")) {
                             document.location.href = "/catalog/keyboard";
                         } else if (this.options[this.selectedIndex].value == "2" && str.includes("keyboard")) {
                             document.location.href = "/catalog/keyboard/dec"; 
                         } else if (this.options[this.selectedIndex].value == "3" && str.includes("keyboard")) {
                             document.location.href = "/catalog/keyboard/inc";
                         } else if 
                             
                        (this.options[this.selectedIndex].value == "4" && str.includes("keyboard")) {
                             document.location.href = "/catalog/keyboard/new";
                         } else if (this.options[this.selectedIndex].value == "1" && str.includes("headset")) {
                             document.location.href = "/catalog/headset";
                         } else if (this.options[this.selectedIndex].value == "2" && str.includes("headset")) {
                             document.location.href = "/catalog/headset/dec";
                         } else if (this.options[this.selectedIndex].value == "3" && str.includes("headset")) { 
                             document.location.href = "/catalog/headset/inc";
                         } else if 
                        (this.options[this.selectedIndex].value == "4" && str.includes("headset")) { 
                             document.location.href = "/catalog/headset/new";
                         } else if (this.options[this.selectedIndex].value == "1") {
                             document.location.href = "/catalog";
                         } else if (this.options[this.selectedIndex].value == "2") {
                             document.location.href = "/catalog/dec";
                         } else if (this.options[this.selectedIndex].value == "3") {
                             document.location.href = "/catalog/inc";
                         } else if (this.options[this.selectedIndex].value == "4") {
                             document.location.href = "/catalog/new";
                         }
                     }
            </script>
            </div>

            <div class="row row-8">
            
            <?php $i=0; foreach ($catalogList as $catalogItem): ?>
             
              <div class="col-md col-sm-6 product">
                <div class="product__img-holder">
                  <a href="/catalog/product/<?php echo $catalogItem['id']; ?>" class="product__link">
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
              </div> -->
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="/catalog/product/<?php echo $catalogItem['id']; ?>"><?php echo $catalogItem['title']; ?></a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount"><?php echo ('RUB ' .$catalogItem['price']); ?></span>
                  </ins>
                  <del>
                    <span>RUB 6 990</span>
                  </del>
                </span>
              </div> <!-- end product -->
              
            <?php $i++; if ($i%4==0) echo '<div class="w-100"></div>';  endforeach; ?>
            
            </div> <!-- end row -->
            
            <?php echo $pagination->get(); ?>
            <!-- Pagination -->
          <!--  <div class="pagination clearfix">                
              <nav class="pagination__nav right clearfix">
                <a href="#" class="pagination__page"><i class="ui-arrow-left"></i></a>
                <span class="pagination__page pagination__page--current">1</span>
                <a href="#" class="pagination__page">2</a>
                <a href="#" class="pagination__page">3</a>
                <a href="#" class="pagination__page">4</a>
                <a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>
              </nav>
            </div> -->

          </div> <!-- end col -->


          <!-- Sidebar -->
          <aside class="col-lg-3 sidebar left-sidebar">

            <!-- Categories -->
            <div class="widget widget_categories widget--bottom-line">
              <h4 class="widget-title">Категории</h4>
              <ul>
                <li>
                  <a <?php if (preg_match("~/catalog/keyboard~",$_SERVER['REQUEST_URI']) || preg_match("~/catalog/mouse~",$_SERVER['REQUEST_URI']) || preg_match("~/catalog/headset~",$_SERVER['REQUEST_URI'])) {} else echo 'style="color: #ec2424"' ?> href="http://<?php echo $host; ?>/catalog">Все</a>
                </li>
                <li>
                  <a <?php if (preg_match("~/catalog/keyboard~",$_SERVER['REQUEST_URI']))  echo 'style="color: #ec2424"' ?> id="category" href="http://<?php echo $host; ?>/catalog/keyboard">Клавиатуры</a>
                </li>
                <li>
                  <a <?php if (preg_match("~/catalog/mouse~",$_SERVER['REQUEST_URI'])) echo 'style="color: #ec2424"' ?> id="category" href="http://<?php echo $host; ?>/catalog/mouse">Мыши</a>
                </li>
                <li>
                  <a <?php if (preg_match("~/catalog/headset~",$_SERVER['REQUEST_URI'])) echo 'style="color: #ec2424"' ?> id="category" href="http://<?php echo $host; ?>/catalog/headset">Наушники</a>
                </li>
                <!--
                <li>
                  <a id="category" href="#">Акксесуары</a>
                </li>
                -->
              </ul>
            </div>

            <!-- Size -->
        <!--    <div class="widget widget__filter-by-size widget--bottom-line">
              <h4 class="widget-title">Размер</h4>
              <ul class="size-select">
                <li>
                  <input type="checkbox" class="checkbox" id="small-size" name="small-size">
                  <label for="small-size" class="checkbox-label">X-Small</label>
                </li>                
                <li>
                  <input type="checkbox" class="checkbox" id="medium-size" name="medium-size">
                  <label for="medium-size" class="checkbox-label">Small</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="large-size" name="large-size">
                  <label for="large-size" class="checkbox-label">Meduim</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="xlarge-size" name="xlarge-size">
                  <label for="xlarge-size" class="checkbox-label">Large</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="xxlarge-size" name="xxlarge-size">
                  <label for="xxlarge-size" class="checkbox-label">X-Large</label>
                </li>
              </ul>
            </div>

            <!-- Color -->
        <!--    <div class="widget widget__filter-by-color widget--bottom-line">
              <h4 class="widget-title">Цвет</h4>
              <ul class="color-select">
                <li>
                  <input type="checkbox" class="checkbox" id="green-color" name="green-color">
                  <label for="green-color" class="checkbox-label">Зеленый</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="red-color" name="red-color">
                  <label for="red-color" class="checkbox-label">Красный</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="blue-color" name="blue-color">
                  <label for="blue-color" class="checkbox-label">Синий</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="white-color" name="white-color">
                  <label for="white-color" class="checkbox-label">Белый</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="black-color" name="black-color">
                  <label for="black-color" class="checkbox-label">Черный</label>
                </li>
              </ul>
            </div>

            <!-- Filter by Price -->
         <!--   <div class="widget widget__filter-by-price widget--bottom-line">
              <h4 class="widget-title">Сортировать по Цене</h4> Filter by price 
               
              <div id="slider-range"></div>
              <p>
                <label for="amount">Цена:</label>
                <input type="text" id="amount">
                <a href="#" class="btn btn-sm btn-dark"><span>Фильтровать</span></a>
              </p>
            </div> -->

          </aside> <!-- end sidebar -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end catalog -->
    <?php include(ROOT.'/views/layouts/footer.php'); ?>