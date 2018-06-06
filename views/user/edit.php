<?php $site = 'Данные Пользователя'; include(ROOT.'/views/layouts/header.php'); ?>
<section class="section-wrap pt-60 pb-30">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-6 mb-30">
                <h3>Редактирование данных</h3>
                  <?php if ($result): ?>
                  <h3>Данные отредактированы!</h3>
                   <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                        <li> -
                            <?php echo $error; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                  <form action="#" method="post">
                    <label for="sign-in-input">Полное Имя</label> <!-- Username or email address -->
                    <input type="text" value="<?php echo $name; ?>" name="name">

                    <label for="sign-in-password">Пароль <abbr class="required" title="required">*</abbr></label>
                    <input type="password" value="<?php echo $password; ?>" name="password">

                    <input type="submit" name="submit" value="Сохранить" class="btn btn-md btn-dark btn-button">
                    
                  </form>
                  <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php include(ROOT.'/views/layouts/footer.php'); ?>