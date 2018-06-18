
   <!-- Footer -->
  <footer class="footer">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="widget widget__about">
                <h4 class="widget-title white">о нас</h4> <!-- About Us -->
                <p class="widget__about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="widget widget__newsletter">
                <h4 class="widget-title white">получать эксклюзивные предложения и обновления</h4> <!-- get exclusive offers &amp; updates -->

                <form class="mc4wp-form">
                  <div class="mc4wp-form-fields">
                    <p><input type="email" placeholder="Пожалуйста, введите ваш адрес электронной почты" aria-label="Newsletter input"> <!-- Please enter your email address --></p>
                    <p><input type="submit" value="Subscribe"></p>
                  </div>
                </form>

                <div class="socials socials--white mt-20">
                  <a href="#" class="facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="#" class="twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="#" class="snapchat" aria-label="snapchat"><i class="ui-snapchat"></i></a>
                  <a href="#" class="instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                  <a href="#" class="pinterest" aria-label="pinterest"><i class="ui-pinterest"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="widget widget_nav_menu">
                <h4 class="widget-title white">помощь</h4> <!-- help -->
                <ul>
                  <li><a href="/contacts">Контакты</a></li> <!--  -->
                  <li><a href="#">Отследить заказ</a></li> <!-- Tract Order -->
                  <li><a href="/faq">Возврат</a></li> <!-- Returns &amp; Refunds -->
                <!--  <li><a href="#">Политика конфиденциальности</a></li> <!-- Private Policy -->
                  <li><a href="#">Информация о доставке</a></li> <!-- Shipping Info -->
                  <li><a href="/faq">Вопросы и Ответы</a></li> <!-- FAQ -->
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="widget widget_nav_menu">
                <h4 class="widget-title white">информация</h4> <!-- information -->
                <ul>
                  <li><a href="contacts">Наши магазины</a></li> <!-- Our Stores -->
                 <!-- <li><a href="#">Вакансии</a></li> <!-- Careers -->
                  <li><a href="#">Информация о доставке</a></li> <!-- Delivery Info -->
                 <!-- <li><a href="#">Условия и Положения</a></li> <!--  Terms &amp; Conditions-->
                 <!-- <li><a href="#">Карта сайта</a></li> <!-- Site Map -->
                </ul>
              </div>
            </div>

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="footer__bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-sm-center">
              <span class="copyright">
                &copy; 2018
              </span>
            </div>

            <div class="col-md-6 footer__payment-systems text-right text-sm-center mt-sml-10">
              <i class="ui-paypal"></i>
              <i class="ui-visa"></i>
              <i class="ui-mastercard"></i>
              <i class="ui-discover"></i>
              <i class="ui-amex"></i>
            </div>
          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->


    <div id="back-to-top">
      <a href="#top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
<!-- jQuery Scripts -->
  <script type="text/javascript" src="/template/js/jquery.min.js"></script>
  <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/template/js/easing.min.js"></script>
  <script type="text/javascript" src="/template/js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="/template/js/owl-carousel.min.js"></script>  
  <script type="text/javascript" src="/template/js/flickity.pkgd.min.js"></script>
  <script type="text/javascript" src="/template/js/modernizr.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBOJ81T7w-Dc2BcWYxZ0zZrqIV9Orz3uSg"></script>
  <script type="text/javascript" src="/template/js/gmap3.min.js"></script>
  <script type="text/javascript" src="/template/js/scripts.js"></script>

  <!-- Google Map -->
  <script type="text/javascript">
    $(document).ready( function(){

      var gmapDiv = $("#google-map");
      var gmapMarker = gmapDiv.attr("data-address");

      gmapDiv.gmap3({
        zoom: 11,
        address: gmapMarker,
        oomControl: true,
        navigationControl: true,
        scrollwheel: false,
        styles: [
          {
          "featureType":"all",
          "elementType":"all",
            "stylers":[
              { "saturation":"0" }
            ]
        }]
      })
      .marker([
  {address: gmapMarker, icon: "/template/img/map_pin.png"},
  {address: "ул. Бориса Галушкина, 9, Москва, 129301", icon: "/template/img/map_pin.png"}          
])
      .infowindow({
        content: "Большая Семеновская ул., 38, Москва, 107023"
      })
      .then(function (infowindow) {
        var map = this.get(0);
        var marker = this.get(1);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      });
    });
  </script>

</body>
</html>