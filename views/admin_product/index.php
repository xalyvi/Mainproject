<?php $site = 'Управление товарами'; include(ROOT.'/views/layouts/headeradmin.php'); ?>

<div class="container">
<div class="row mt-30">
    <ol class="breadcrumbs">
          <li>
            <a href="/admin">Админ панель</a>
          </li>
          <li class="active">
            Управление товарами
          </li>
        </ol>
</div>
<div class="row mt-30 pb-30">
<a href="/admin/product/create">Добавить товар</a>
</div>
<div class="row">
<div class="table-wrap">
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Артикул</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Цена без Скидки</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
       <?php foreach ($productsList as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['code']; ?></td>
            <td><?php echo $product['title']; ?></td>
            <td><?php echo 'RUB '.$product['price']; ?></td>
            <td><?php if (!($product['subprice'] == 0)) echo 'RUB '.$product['subprice']; else echo 'Нет Скидки'; ?></td>
            <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать">&#8635;</a></td>
            <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="ui-close"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>

<?php include(ROOT.'/views/layouts/footeradmin.php'); ?>