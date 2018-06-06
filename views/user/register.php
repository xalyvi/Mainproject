<?php $site = 'Регистрация'; include(ROOT.'/views/layouts/header.php'); ?>
<section class="section-wrap pt-60 pb-30">
 <div class="container">
  <div class="row">
    <div class="col-md-6 mb-30">
      <h3>Войти</h3>
      <?php if (isset($errors2) && is_array($errors2)): ?>
          <ul>
              <?php foreach ($errors2 as $error2): ?>
                  <li> - <?php echo $error2; ?></li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
      <form id="login" action="#" method="post">
        <label for="sign-in-input">Почта <abbr class="required" title="required">*</abbr></label> <!-- Username or email address -->
        <input type="text" name="emailout" id="sign-in-input">

        <label for="sign-in-password">Пароль <abbr class="required" title="required">*</abbr></label>
        <input type="password" name="passwordout" id="sign-in-password">

        <input type="submit" form="login" name="login" value="Войти" class="btn btn-md btn-dark btn-button">

        <a href="#" class="sign-in-popup__forgot-password">Забыл Пароль?</a>
      </form>
    </div>
    <div class="col-md-6 mb-30">
     <?php if ($result): ?>
         <h2>Вы зарегистрированы!</h2>
    <?php else: ?>
      <h3>Регистрация</h3>
      <?php if (isset($errors1) && is_array($errors1)): ?>
        <ul>
            <?php foreach ($errors1 as $error1): ?>
                <li> - <?php echo $error1; ?></li>
            <?php endforeach; ?>
        </ul>
     <?php endif; ?>
      <form id="register" action="#" method="post">
        <label for="register-input">Почта <abbr class="required" title="required">*</abbr></label> <!-- Email address -->
        <input type="text" name="emailin" id="register-input" value="<?php echo $email; ?>">

        <label for="password">Пароль <abbr class="required" title="required">*</abbr></label>
        <input type="password" name="passwordin" id="register-password" value="<?php echo $password; ?>">

        <input type="submit" from="register" name="register" value="Зарегестрироватся" class="btn btn-md btn-dark btn-button">
      </form>
      <?php endif; ?>
    </div>
  </div>
  </div>
  </section>
  <?php include(ROOT.'/views/layouts/footer.php'); ?>