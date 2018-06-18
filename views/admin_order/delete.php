<?php $site = 'Удаление заказа'; include(ROOT.'/views/layouts/headeradmin.php'); ?>


<div class="container">
<div class="row mt-30">
    <ol class="breadcrumbs">
          <li>
            <a href="/admin">Админ панель</a>
          </li>
          <li>
            <a href="/admin/order">Управление заказами</a>
          </li>
          <li class="active">
            Удаление заказа
          </li>
        </ol>
</div>
<div class="row mt-30 pb-30">
<form action="#" method="post">
    <h2>Удалить заказ #<?php echo $id; ?></h2>
    <p>Вы действительно хотите удалить этот товар?</p>
    <input type="submit" class="btn btn-color btn-button" name="submit" value="Удалить">
</form>
</div>
</div>

<?php include(ROOT.'/views/layouts/footeradmin.php'); ?>