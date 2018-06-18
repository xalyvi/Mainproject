<?php

class Product
{
    /**
     * Returns single catalog item with specified id
     * $param integer $id
     */
    
    public static function getProductItemById($id)
    {
        $id = intval($id);
        
        if ($id) {
            
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM goods WHERE id=' . $id);
            
//            $result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            $catalogItem = $result->fetch();
            
            return $catalogItem;
        }
    }
    
    public static function getProductRelated($brand,$title)
    {
        $db = Db::getConnection();
        
        $result = $db->query("SELECT id, title, price, img " . "FROM goods " . "WHERE brand = '".$brand."' AND NOT title = '".$title."' " . "LIMIT 6");
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['subprice'] = $row['subprice'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
    }
    
    public static function getTotalProducts()
    {
        $db = Db::getConnection();
        
        $result = $db->query('SELECT count(id) AS count FROM goods');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        return $row['count'];
    }
    
    public static function getProductsByIds($idsArray)
    {
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',', $idsArray);
        
        $sql = "SELECT id, title, price, subprice, img, cartimg FROM goods WHERE id IN ($idsString)";
        
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['subprice'] = $row['subprice'];
            $products[$i]['img'] = $row['img'];
            $products[$i]['cartimg'] = $row['cartimg'];
            $i++;
        }
        
        return $products;
    }
    
    public static function deleteProductById($id)
    {

        $db = Db::getConnection();
        
        $sql = 'DELETE FROM goods WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    public static function updateProductById($id, $options)
    {
        
        $db = Db::getConnection();
        
        $sql = 'UPDATE goods SET title = :title, code = :code, weight = :weight, price = :price, subprice = :subprice, category = :category, description = :description WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_INT);
        $result->bindParam(':weight', $options['weight'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_INT);
        $result->bindParam(':subprice', $options['subprice'], PDO::PARAM_INT);
        $result->bindParam(':category', $options['category'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        
        return $result->execute();
        
    }
    
    public static function createProduct($options)
    {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO goods (title, code, price, subprice, weight, country, category, table1, table2, table3, table4, table5, table6, table7, table8, table9, table10)' . 'VALUES (:title, :code, :price, :subprice, :weight, :country, :category, :table1, :table2, :table3, :table4, :table5, :table6, :table7, :table8, :table9, :table10)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_INT);
        $result->bindParam(':subprice', $options['subprice'], PDO::PARAM_INT);
        $result->bindParam(':weight', $options['weight'], PDO::PARAM_STR);
        $result->bindParam(':country', $options['country'], PDO::PARAM_STR);
        $result->bindParam(':category', $options['category'], PDO::PARAM_STR);
        $result->bindParam(':table1', $options['table1'], PDO::PARAM_STR);
        $result->bindParam(':table2', $options['table2'], PDO::PARAM_STR);
        $result->bindParam(':table3', $options['table3'], PDO::PARAM_STR);
        $result->bindParam(':table4', $options['table4'], PDO::PARAM_STR);
        $result->bindParam(':table5', $options['table5'], PDO::PARAM_STR);
        $result->bindParam(':table6', $options['table6'], PDO::PARAM_STR);
        $result->bindParam(':table7', $options['table7'], PDO::PARAM_STR);
        $result->bindParam(':table8', $options['table8'], PDO::PARAM_STR);
        $result->bindParam(':table9', $options['table9'], PDO::PARAM_STR);
        $result->bindParam(':table10', $options['table10'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        
        return 0;
    }
    
    public static function getProdustsByIds($idsArray)
    {
        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM goods WHERE id IN ($idsString)";
        $result = $db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['subprice'] = $row['subprice'];
            $i++;
        }
        return $products;
    }
    
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';
        // Путь к папке с товарами
        $path = '/template/img/shop/';
        // Путь к изображению товара
        $pathToProductImage = $path . 'product_' . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
}