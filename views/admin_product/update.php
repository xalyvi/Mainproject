<?php $site = 'Изменение товара'; include(ROOT.'/views/layouts/headeradmin.php'); ?>


<div class="container">
<div class="row mt-30">
    <ol class="breadcrumbs">
          <li>
            <a href="/admin">Админ панель</a>
          </li>
          <li>
            <a href="/admin/product">Управление товарами</a>
          </li>
          <li class="active">
            Изменение товара
          </li>
        </ol>
</div>
<div class="row mt-30 pb-30">
   <div class="col-md-6 mb-30">
    <h3>Изменить товар</h3>
    
    <form action="#" method="post" enctype="multipart/form-data">
       
        <label for="title">Название товара</label>
        <input type="text" class="input-text" placeholder value="<?php echo $product['title']; ?>" name="title" id="title">
        
        <label for="category">Категория</label>
        <select name="category" id="category">
           <option value="0">Выберите категорию...</option>
            <option value="mouse" <?php if ($product['category'] == 'mouse') echo 'selected'; ?>>Мышь</option>
            <option value="keyboard" <?php if ($product['category'] == 'keyboard') echo 'selected'; ?>>Клавиатура</option>
            <option value="headset" <?php if ($product['category'] == 'headset') echo 'selected'; ?>>Наушники</option>
        </select>
        
        <label for="articul">Артикул</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $product['code']; ?>" name="articul" id="articul">
        
        <label for="price">Цена (со Скидкой, Если есть)</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $product['price']; ?>" name="price" id="price">
        
        <label for="subprice">Цена без Скидки (Если есть)</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $product['subprice']; ?>" name="subprice" id="subprice">
        
        <label for="wight">Вес</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $product['weight']; ?>" name="weight" id="weight">
        
        <label for="articul">Страна</label>
        <input type="text" class="input-text" placeholder="" value="<?php echo $product['country']; ?>" name="country" id="country">
        
        <label for="description">Описание</label>
        <textarea name="description" id="description" cols="1" rows="5"><?php echo $product['description']; ?></textarea>
        
        <h4>Таблица характеристик</h4>
        <table class="table">
            <tr>
                <td><input type="text" class="input-text" name="table1" value="<?php echo $product['table1']; ?>"></td>
                <td><input type="text" class="input-text" name="table2" value="<?php echo $product['table2']; ?>"></td>
            </tr>
            <tr>
                <td><input type="text" class="input-text" name="table3" value="<?php echo $product['table3']; ?>"></td>
                <td><input type="text" class="input-text" name="table4" value="<?php echo $product['table4']; ?>"></td>
            </tr>
            <tr>
                <td><input type="text" class="input-text" name="table5" value="<?php echo $product['table5']; ?>"></td>
                <td><input type="text" class="input-text" name="table6" value="<?php echo $product['table6']; ?>"></td>
            </tr>
            <tr>
                <td><input type="text" class="input-text" name="table7" value="<?php echo $product['table7']; ?>"></td>
                <td><input type="text" class="input-text" name="table8" value="<?php echo $product['table8']; ?>"></td>
            </tr>
            <tr>
                <td><input type="text" class="input-text" name="table9" value="<?php echo $product['table9']; ?>"></td>
                <td><input type="text" class="input-text" name="table10" value="<?php echo $product['table10']; ?>"></td>
            </tr>
        </table>
        
        <label for="img">Изображение в каталоге</label>
        <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
        <input type="file" name="img" id="img" placeholder="" value="<?php echo $product['img']; ?>">
        
        <label for="cartimg">Изображение в маленькой корзине</label>
        <input type="file" name="cartimg" id="cartimg" placeholder="" value="">
        
        <button type="button" class="btn" onClick="addElement('large');">Еще изображение</button>
        <table id="large">
            <tr>
               <td>
                <label for="lg1">Большое изображение 1</label>
                <input type="file" name="lg1" id="lg1" placeholder="" value="">
                </td>
            </tr>
        </table>
        
        
        <button type="button" class="btn" onClick="addElement('small');">Еще изображение</button>
              <table id="small">
            <tr>
               <td>
        <label for="th1">Малое изображение 1</label>
        <input type="file" name="th1" id="th1" placeholder="" value="">
                        </td>
            </tr>
        </table>
        
        <input type="submit" name="submit" id="submit" class="btn btn-color btn-button" value="Сохранить">
    </form>
    </div>
</div>
</div>

<script type="text/javascript">
    var countlg = 1;
    var countsm = 1;
    function addElement(table_name) {
        var t = document.getElementById(table_name);
        
        var index = t.rows.lenght;
        var row = t.insertRow(index);
        
        var cel = row.insertCell(0);
        
        if (table_name == 'large') {
            
            countlg++;
        
        var celcontent = '<label for="lg' + countlg + '">Большое изображение ' + countlg +  '</label><input type="file" name="lg' + countlg + '" id="lg' + countlg + '" placeholder="" value="">';
            
        }
        
        if (table_name == 'small') {
            
            countsm++;
        
        var celcontent = '<label for="th' + countsm + '">Малое изображение ' + countsm +  '</label><input type="file" name="th' + countsm + '" id="th' + countsm + '" placeholder="" value="">';
            
        }
        
        setHTML(cel, celcontent);
    }
    
    function setHTML ( element, txt) {
                           if (element.innerHTML)
                               element.innerHTML = txt;
                           else {
                               var range = document.createRange();
                               range.selectNodeContents(element);
                               range.deleteContents();
                               var fragment = range.createContextualFragment(txt);
                               element.appendChild(fragment);
                           }
                       }
</script>
<?php include(ROOT.'/views/layouts/footeradmin.php'); ?>