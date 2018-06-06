<?php $site = 'Контакты'; include(ROOT.'/views/layouts/header.php'); ?>
    

    <!-- Google Map -->
    <section class="section-wrap pb-0">
      <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
          <li>
            <a href="/">Главная</a>
          </li>
          <li class="active">
            Контакты
          </li>
        </ol>

        <div id="google-map" class="gmap" data-address="Большая Семеновская ул., 38, Москва, 107023"></div>
      </div>
    </section> <!-- end google map -->



    <!-- Contact -->
    <section class="section-wrap pb-40">
      <div class="container">
        <div class="row">

          <div class="col-lg-8">
            <h2 class="uppercase">Напишите нам сообщение</h2><!-- drop us a line -->
            
            <!-- Contact Form -->
            <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
              <div class="contact-name">
                <label for="name">Имя <abbr title="required" class="required">*</abbr></label>
                <input name="name" id="name" type="text">
              </div>
              <div class="contact-email">
                <label for="email">Почта <abbr title="required" class="required">*</abbr></label>
                <input name="email" id="email" type="email">
              </div>
              <div class="contact-subject">
                <label for="email">Тема сообщения</label>
                <input name="subject" id="subject" type="text">
              </div>
              <div class="contact-message">
                <label for="message">Сообщение <abbr title="required" class="required">*</abbr></label>
                <textarea id="message" name="message" rows="7" required="required"></textarea>
              </div>

              <input type="submit" class="btn btn-lg btn-color btn-button" value="Отправить Сообщение" id="submit-message">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

          <div class="col-lg-4">
            <div class="contact-info">
              <ul>
                <li class="contact-info__item">
                  <h4 class="contact-info__title uppercase">Адрес</h4>
                  <h6 class="contact-info__store-title">Московский политех</h6>
                  <address class="address">Большая Семеновская ул., 38, Москва, 107023</address>
                  <h6 class="contact-info__store-title">Общага 6</h6>
                  <address class="address">ул. Бориса Галушкина, 9, Москва, 129301</address>
                </li>
                <li class="contact-info__item">
                  <h4 class="contact-info__title uppercase">Контактная информация</h4>
                  <ul>
                    <li><span>Телефон: </span><a href="tel:+1-888-1554-456-123">+ 1-888-1554-456-123</a></li>
                    <li><span>Email: </span><a href="mailto:themesupport@gmail.com">ruslan.rakhimov18@gmail.com</a></li>
                    <li><span>Skype: </span><a href="#">Netu</a></li>
                  </ul>
                </li>
                <li class="contact-info__item">
                  <h4 class="contact-info__title uppercase">Рабочие часы</h4>
                  <ul>
                    <li>Понедельник – Пятница: с 21:00 до 21:02</li>
                    <li>Суббота: с 21:00 до 21:01</li>
                    <li>Воскресенье: закрыто</li>
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>

        </div>
      </div>
    </section> <!-- end contact -->

<?php include(ROOT.'/views/layouts/footercontact.php'); ?>