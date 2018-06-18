<?php $site = 'Изменение заказа'; include(ROOT.'/views/layouts/headeradmin.php'); ?>


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
            Изменение заказа
          </li>
        </ol>
</div>
<div class="row mt-30 pb-30">
   <div class="col-md-6 mb-30">
    <h3>Изменить заказ</h3>
    
    <form action="#" method="post">
        
        <label for="userName">Имя покупателя</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $order['user_name']; ?>" name="userName" id="userName">
        
        <label for="userPhone">Телефон покупателя</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $order['user_phone']; ?>" name="userPhone" id="userPhone">
        
        <label for="date">Адрес доставки</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $order['user_address']; ?>" name="address" id="address">
        
        <label for="discount">Скидка</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $order['discount']; ?>" name="discount" id="discount">
        
        <label for="dostavka">Доставка</label>
        <select name="dostavka" id="dostavka">
            <option <?php if ($order['dostavka'] == 'Платная') echo 'selected'; ?>>Платная</option>
            <option <?php if ($order['dostavka'] == 'Бесплатная') echo 'selected'; ?>>Бесплатная</option>
        </select>
        
        <label for="oplata">Оплата</label>
        <select name="oplata" id="oplata">
            <option<?php if ($order['oplata'] == 'Прямой банковский перевод') echo 'selected'; ?>>Прямой банковский перевод</option>
            <option <?php if ($order['oplata'] == 'Оплата чеком') echo 'selected'; ?>>Оплата чеком</option>
            <option <?php if ($order['oplata'] == 'Paypal') echo 'selected'; ?>>Paypal</option>
        </select>
        
        <label for="status">Статус</label>
        <select name="status" id="status">
            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Новый заказ</option>
            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обработке</option>
            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставка</option>
            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрыт</option>
        </select>
        
        <input type="submit" name="submit" id="submit" class="btn btn-color btn-button" value="Сохранить">
    </form>
    </div>
</div>
</div>
<?php include(ROOT.'/views/layouts/footeradmin.php'); ?>