<?php $site = 'Админпанель'; include(ROOT.'/views/layouts/headeradmin.php'); ?>
<section class="section-wrap pt-30">
    <div class="container">
        <div class="heading-row">
            <div class="heading">Добро пожаловать, Администратор!</div>
        </div>
    <div class="row">
        <div class="col-lg-9 col-sm-4">
            <p>Вам доступны такие возможности</p>
            <ul>
                <li><a href="/admin/product">Управление товарами</a></li>
                <li><a href="/admin/order">Управление заказами</a></li>
            </ul>
        </div>
    </div>
    </div>
</section>



<?php include(ROOT.'/views/layouts/footeradmin.php'); ?>