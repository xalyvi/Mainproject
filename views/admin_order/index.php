<?php $site = 'Управление заказами'; include(ROOT.'/views/layouts/headeradmin.php'); ?>

<div class="container">
<div class="row mt-30 pb-30">
    <ol class="breadcrumbs">
          <li>
            <a href="/admin">Админ панель</a>
          </li>
          <li class="active">
            Управление заказами
          </li>
        </ol>
</div>
<div class="row">
<div class="table-wrap">
<table class="table">
    <thead>
        <tr>
            <th>ID заказа</th>
            <th>Имя покупателя</th>
            <th>Телефон покупателя</th>
            <th>Дата оформления</th>
            <th>Статус</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
       <?php foreach ($ordersList as $order): ?>
        <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $order['user_name']; ?></td>
            <td><?php echo $order['user_phone']; ?></td>
            <td><?php echo $order['date']; ?></td>
            <td><?php echo Order::getStatusText($order['status']); ?></td>
            <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Просмотр">&#10026;</a></td>
            <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать">&#8635;</a></td>
            <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="ui-close"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>

<?php include(ROOT.'/views/layouts/footeradmin.php'); ?>