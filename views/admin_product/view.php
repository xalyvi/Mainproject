<?php $site = 'Просмотр заказа'; include(ROOT.'/views/layouts/headeradmin.php'); ?>

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
            Просмотр заказа
          </li>
        </ol>
</div>
<div class="row mt-30 pb-30">
<h2>Просмотр заказа <?php echo $order['id']; ?></h2>
</div>
<div class="row">
<h4>Информация о заказе</h4>
<table class="table">
    <tbody>
        <tr>
            <td>Номер заказа</td>
            <td><?php echo $order['id']; ?></td>
        </tr>
        <tr>
            <td>Имя клиента</td>
            <td><?php echo $order['user_name']; ?></td>
        </tr>
        <tr>
            <td>Телефон клиента</td>
            <td><?php echo $order['user_phone']; ?></td>
        </tr>
        <tr>
            <td>Комментарий клиента</td>
            <td><?php echo $order['user_comment']; ?></td>
        </tr>
        <?php if ($order['user_id'] != 0): ?>
        <tr>
            <td>ID клиента</td>
            <td><?php echo $order['user_id']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td><b>Статус заказа</b></td>
            <td><?php echo Order::getStatusText($order['status']); ?></td>
        </tr>
        <tr>
            <td><strong>Дата заказа</strong></td>
            <td><?php echo $order['date']; ?></td>
        </tr>
    </tbody>
</table>
<div class="row mt-30 mb-30">
   <div class="col-md-12">
    <h4>Товары в заказе</h4>
    <table class="table">
        <thead>
            <tr>
                <td>ID товара</td>
                <td>Артикул товара</td>
                <td>Название</td>
                <td>Цена</td>
                <td>Количество</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id'];  ?></td>
                    <td><?php echo $product['code']; ?></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $productsQuantity[$product['id']]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    
    <a href="/admin/order">&#8701; Назад</a>
</div>

</div>
</div>

<?php include(ROOT.'/views/layouts/footeradmin.php'); ?>