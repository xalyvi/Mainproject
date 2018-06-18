<?php

class AdminProductController extends AdminBase
{
    
    
    
    public function actionIndex()
    {
        self::checkAdmin();
        
        $productsList = Catalog::getCatalogListAdmin();
        require_once(ROOT.'/views/admin_product/index.php');
        return true;
    }
    
    public function actionCreate()
    {
        self::checkAdmin();
        
        if (isset($_POST['submit'])) {
            
            $options['title'] = $_POST['title'];
            $options['code'] = $_POST['articul'];
            $options['price'] = $_POST['price'];
            $options['subprice'] = $_POST['subprice'];
            $options['weight'] = $_POST['weight'];
            $options['country'] = $_POST['country'];
            $options['category'] = $_POST['category'];
            $options['description'] = $_POST['description'];
            $options['table1'] = $_POST['table1'];
            $options['table2'] = $_POST['table2'];
            $options['table3'] = $_POST['table3'];
            $options['table4'] = $_POST['table4'];
            $options['table5'] = $_POST['table5'];
            $options['table6'] = $_POST['table6'];
            $options['table7'] = $_POST['table7'];
            $options['table8'] = $_POST['table8'];
            $options['table9'] = $_POST['table9'];
            $options['table10'] = $_POST['table10'];
            
            $id = Product::createProduct($options);
            
            if ($id) {
                
                if (is_uploaded_file($_FILES["img"]["tmp_name"])) {
                    move_uploaded_file($_FILES["img"]['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/img/shop/product_{$id}.jpg");
                }
                
                if (is_uploaded_file($_FILES["cartimg"]["tmp_name"])) {
                    move_uploaded_file($_FILES["img"]['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/img/shop/cart_small_{$id}.jpg");
                }
                
                for ($i=1; $i<=5;$i++) {
                if (is_uploaded_file($_FILES["lg".$i]["tmp_name"])) {
                    move_uploaded_file($_FILES['lg'.$i]['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/img/shop/item_lg{$id}_{$i}.jpg");
                }
                if (is_uploaded_file($_FILES["th".$i]["tmp_name"])) 
                {
                    move_uploaded_file($_FILES['th'.$i]['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/img/shop/item_thumb{$id}_{$i}.jpg");
                }
                }
            };
            
            header("Location: /admin/product");
        }
        
        require_once(ROOT.'/views/admin_product/create.php');
        
        return true;
    }
    
    public function actionUpdate($id)
    {
        self::checkAdmin();
        
        $product = Product::getProductItemById($id);
        
        if (isset($_POST['submit'])) {

            $options['title'] = $_POST['title'];
            $options['code'] = $_POST['articul'];
            $options['price'] = $_POST['price'];
            $options['subprice'] = $_POST['subprice'];
            $options['weight'] = $_POST['weight'];
            $options['country'] = $_POST['country'];
            $options['category'] = $_POST['category'];
            $options['description'] = $_POST['description'];
            $options['table1'] = $_POST['table1'];
            $options['table2'] = $_POST['table2'];
            $options['table3'] = $_POST['table3'];
            $options['table4'] = $_POST['table4'];
            $options['table5'] = $_POST['table5'];
            $options['table6'] = $_POST['table6'];
            $options['table7'] = $_POST['table7'];
            $options['table8'] = $_POST['table8'];
            $options['table9'] = $_POST['table9'];
            $options['table10'] = $_POST['table10'];
            
            if (Product::updateProductById($id, $options)) {
                
                if (is_uploaded_file($_FILES['img']['tmp_name'])) {
                    var_dump(move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. "/template/img/shop/product_{$id}.jpg"));
                }
                
                if (is_uploaded_file($_FILES['cartimg']['tmp_name'])) {
                    var_dump(move_uploaded_file($_FILES['cartimg']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. "/template/img/shopcart_small_{$id}.jpg"));
                }
                
                for ($i=1; $i<=5;$i++) {
                    if (is_uploaded_file($_FILES["lg".$i]["tmp_name"])) {
                    move_uploaded_file($_FILES['lg'.$i]['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/img/shop/item_lg{$id}_{$i}.jpg");
                }
                if (is_uploaded_file($_FILES["th".$i]["tmp_name"])) 
                {
                    move_uploaded_file($_FILES['th'.$i]['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/img/shop/item_thumb{$id}_{$i}.jpg");
                }  
                }
            }
            
            header("Location: /admin/product");
        }
        
        require_once(ROOT.'/views/admin_product/update.php');
        return true;
    }
    
    public function actionDelete($id)
    {
        self::checkAdmin();
        
        if (isset($_POST['submit'])) {

            Product::deleteProductById($id);
            
            header("Location: /admin/product");
        }
        
        require_once(ROOT.'/views/admin_product/delete.php');
        
        return true;
    }
    
}