<?php $site = 'История покупок'; include(ROOT.'/views/layouts/header.php'); ?>

<section class="section-wrap pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pb-30">
                <h2>История заказов</h2>
                <?php if ($orderList): ?>
                <div class="table-wrap">
                <table class="table">
                    <thead>
                       <tr>
                        <th>ID заказа</th>
                        <th>Дата оформление</th>
                        <th>Статус</th>
                        <th>Товары в заказе</th>
                        <th>Ваш комментарий</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderList as $order): ?>
                            <tr>
                                <td><?php echo $order['id']; ?></td>
                                <td><?php echo $order['date']; ?></td>
                                <td><?php echo Order::getStatusText($order['status']); ?></td>
                                <td>
                                <?php 
                                $productsQuantity = json_decode($order['products'], true);
                                $productsIds = array_keys($productsQuantity);
                                $products = Product::getProdustsByIds($productsIds); ?>
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
                                </td>
                                <td><?php echo $order['user_comment']; ?></td>
                            </tr>
                            
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <?php else: ?>
                <p>Вы пока еще ничего не покупали</p>
                <div class="pb-120 mb-120"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php include(ROOT.'/views/layouts/footer.php'); ?>