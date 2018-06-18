<?php $site = $catalogItem['title']; include(ROOT.'/views/layouts/header.php'); ?>
    <!-- Single Product -->
    <section class="section-wrap pb-20 product-single">
      <div class="container">

        <!-- Breadcrumbs -->
        <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
        <ol class="breadcrumbs">
          <li>
            <a href="/">Главная</a>
          </li>
          <li>
            <a href="<?php if ($catalogItem['category'] == 1) echo '/catalog/mouse">Мыши'; else if ($catalogItem['category'] == 2) echo '/catalog/keyboard">Клавиатуры'; else if ($catalogItem['category'] == 3) echo '/catalog/headset">Наушники'; else echo '/catalog">Предмет'; ?></a>
          </li>
          <li class="active">
            <?php echo $catalogItem['title']; ?>
          </li>
        </ol>

        <div class="row">

          <div class="col-md-6 product-slider mb-50">

            <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

             <?php for ($i=1;$i<=5;$i++): ?>
             <?php if ($catalogItem['lg'.$i]): ?>
              <div class="gallery-cell">
                <a href="/template/img/shop/<?php echo $catalogItem['lg'.$i]; ?>.jpg" class="lightbox-img">
                  <img src="/template/img/shop/<?php echo $catalogItem['lg'.$i]; ?>.jpg" alt="" />
                </a>
              </div>
              <?php endif; ?>
              <?php endfor; ?>
            </div> <!-- end gallery main -->
            <div class="gallery-thumbs" id="gallery-thumbs">
             <?php for ($j=1;$j<=5;$j++): ?>
             <?php if ($catalogItem['th'.$j]): ?>
              <div class="gallery-cell">
                <img src="/template/img/shop/<?php echo $catalogItem['th'.$j]; ?>.jpg" alt="" />
              </div>
              <?php endif; ?>
              <?php endfor; ?>
            </div> <!-- end gallery thumbs -->

          </div> <!-- end col img slider -->

          <div class="col-md-6 product-single">
            <h1 class="product-single__title uppercase"><?php echo $catalogItem['title']; ?></h1>
            <!-- Reviews 
            <div class="rating">
              <a href="#">3 Reviews</a>
            </div> -->

            <span class="product-single__price">
              <ins>
                <span class="amount"><?php echo 'RUB '.$catalogItem['price']; ?></span>
              </ins>
              <?php if (isset($catalogItem['subprice'])): ?>
              <?php if (!($catalogItem['subprice'] == 0)): ?>
                  <del>
                    <span><?php echo 'RUB '.$catalogItem['subprice'] ?></span>
                  </del>
                <?php endif; ?>
                <?php endif; ?>
            </span>            

         <!--  <div class="colors clearfix">
              <span class="colors__label">Цвет: <span class="colors__label-selected">Фадед Блу</span></span>
              <a href="#" class="colors__item colors__item--selected blue"></a>
              <a href="#" class="colors__item black"></a>
              <a href="#" class="colors__item pink"></a>
            </div> -->
<!--
           <div class="size-quantity clearfix">
         <!--     <div class="size">
                <label>Размер</label>
                <select name="size" id="size__select" class="size__select">
                  <option value="xs">XS</option>
                  <option value="s">S</option>
                  <option value="m">M</option>
                  <option value="l">L</option>
                  <option value="xl">XL</option>
                </select>
              </div> -->
          <!--    
              <div class="quantity">
                <label>Количество</label>                 
                <select name="quantity" id="quantity__select" class="quantity__select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>      -->      

            <div class="row row-10 product-single__actions clearfix">
              <div class="col">
                <a href="#" class="btn btn-lg btn-color product-single__add-to-cart" id="add-to-cart" data-id="<?php echo $catalogItem['id']; ?>">
                  <i class="ui-bag"></i>
                  <span>Добавить в Корзину</span>
                </a>
              </div>
              <div class="col">
                <a href="#" class="btn btn-lg btn-dark product-single__add-to-wishlist" id="add-to-wish" data-id="<?php echo $catalogItem['id']; ?>">
                  <i class="ui-heart"></i>
                  <span>Лист Желаемого</span>
                </a>
              </div>
            </div>            

            <div class="product_meta">
              <ul>
                <li>
                  <span class="product-code">Код продукта: <span><?php echo $catalogItem['code']; ?></span></span> <!-- Product Code -->
                </li>
                <li>
                  <span class="product-material">Вес: <span><?php echo $catalogItem['weight']; ?></span></span>
                </li>
                <li>
                  <span class="product-country">Страна: <span><?php echo $catalogItem['country']; ?></span></span>
                </li>
              </ul>                              
            </div>

            <!-- Accordion -->
            <div class="accordion mb-50" id="accordion">
              <div class="accordion__panel">
                <div class="accordion__heading" id="headingOne">
                  <a data-toggle="collapse" href="#collapseOne" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapseOne">Описание<span class="accordion__toggle">&nbsp;</span>
                  </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
                  <div class="accordion__body">
                    <?php echo $catalogItem['description']; ?>
                  </div>
                </div>
              </div>

              <div class="accordion__panel">
                <div class="accordion__heading" id="headingTwo">
                  <a data-toggle="collapse" href="#collapseTwo" class="accordion__link accordion--is-closed" aria-expanded="false" aria-controls="collapseTwo">Информация<span class="accordion__toggle">&nbsp;</span>
                  </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="accordion__body">
                    <table class="table shop_attributes">
                      <tbody>
                        <tr>
                          <th><?php echo $catalogItem['table1']; ?></th>
                          <td><?php echo $catalogItem['table2']; ?></td>
                        </tr>
                        <tr>
                          <th><?php echo $catalogItem['table3']; ?></th>
                          <td><?php echo $catalogItem['table4']; ?></td>
                        </tr>
                        <tr>
                          <th><?php echo $catalogItem['table5']; ?></th>
                          <td><?php echo $catalogItem['table6']; ?></td>
                        </tr>
                        <tr>
                          <th><?php echo $catalogItem['table7']; ?></th>
                          <td><?php echo $catalogItem['table8']; ?></td>
                        </tr> 
                        <tr>
                          <th><?php echo $catalogItem['table9']; ?></th>
                          <td><?php echo $catalogItem['table10']; ?></td>
                        </tr>                                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
<!--
              <div class="accordion__panel">
                <div class="accordion__heading" id="headingThree">
                  <a data-toggle="collapse" href="#collapseThree" class="accordion__link accordion--is-closed" aria-expanded="false" aria-controls="collapseThree">Ревю<span class="accordion__toggle">&nbsp;</span>
                  </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingThree">
                  <div class="accordion__body">
                    <div class="reviews">
                      <ul class="reviews__list">
                        <li class="reviews__list-item">
                          <div class="reviews__body">
                            <div class="reviews__content">
                              <p class="reviews__author"><strong>Александр Самокин</strong> - Май 6, 2018 в 00:48</p> <!-- May 6, 2017 at 12:48 pm --> <!--
                              <div class="rating">
                                <a href="#"></a>
                              </div>
                              <p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</p>
                            </div>
                          </div>
                        </li>

                        <li class="reviews__list-item">
                          <div class="reviews__body">
                            <div class="reviews__content">
                              <p class="reviews__author"><strong>Александр Самокин</strong> - Май 7, 2016 в 00:48</p>
                              <div class="rating">
                                <a href="#"></a>
                              </div>
                              <p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</p>
                            </div>
                          </div>
                        </li>

                      </ul>         
                    </div> <!--  end reviews --> <!--
                  </div>
                </div>
              </div>
              --> 
            </div> <!-- end accordion -->

          </div> <!-- end col product description -->
        </div> <!-- end row -->
       
      </div> <!-- end container -->
    </section> <!-- end single product -->

<?php if (isset($catalogListRelated)): ?>
    <!-- Related Products -->
    <section class="section-wrap pt-0 pb-40">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              Релейтед
            </h2>
          </div>
        </div>
        <div class="row row-8">
<?php foreach ($catalogListRelated as $catalogItemRelated): ?>
          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="http://<?php echo $_SERVER[HTTP_HOST]; ?>/catalog/product/<?php echo $catalogItemRelated['id']; ?>" class="product__link">
                <img src="/template/img/shop/<?php echo $catalogItemRelated['img']; ?>" alt="" class="product__img">
              </a>
              <!--
              <div class="product__actions">
                <a href="quickview.html" class="product__quickview">
                  <i class="ui-eye"></i>
                  <span>Быстрый осмотр</span><!-- Quick View -->
               <!-- </a>
                <a href="#" class="product__add-to-wishlist">
                  <i class="ui-heart"></i>
                  <span>Желаемое</span><!-- Wish List -->
            <!--    </a>
              </div>
              -->
            </div> 
            <div class="product__details">
              <h3 class="product__title">
                <a href="http://<?php echo $_SERVER[HTTP_HOST]; ?>/catalog/product/<?php echo $catalogItemRelated['id']; ?>"><?php echo $catalogItemRelated['title']; ?></a>
              </h3>
            </div>

            <span class="product__price">
              <ins>
                <span class="amount"><?php echo $catalogItemRelated['price']; ?></span>
              </ins>
              <del>
                <span>RUB 11 990</span>
              </del>
            </span>
          </div> <!-- end product -->
<?php endforeach; ?>
    
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end related products -->
    <?php endif; ?>
    
   <?php include(ROOT.'/views/layouts/footerview.php'); ?>