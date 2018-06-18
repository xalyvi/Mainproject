<?php

class Order
{
    
    
    
    
    public static function save($userName, $userPhone, $userEmail, $userAddress, $userId, $products,  $userComment, $discount, $dostavka, $oplata)
    {
        $products = json_encode($products);

        $db = Db::getConnection();

        $sql = 'INSERT INTO user_order (user_name, user_phone, user_email, user_address, user_id, products, user_comment, discount, dostavka, oplata)' . ' VALUES (:user_name, :user_phone, :user_email, :user_address, :user_id, :products, :user_comment, :discount, :dostavka, :oplata)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
        $result->bindParam(':user_address', $userAddress, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $result->bindParam(':products', $products, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':discount', $discount, PDO::PARAM_STR);
        $result->bindParam(':dostavka', $dostavka, PDO::PARAM_STR);
        $result->bindParam(':oplata', $oplata, PDO::PARAM_STR);

        return $result->execute();
    }
    
    public static function getCoupon($coupon)
    {
        $db = Db::getConnection();
        
        $result = $db->query("SELECT * FROM coupon WHERE code = '".$coupon."'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $coupon = $result->fetch();
        
        return $coupon['amount'];
    }
    
    public static function getOrderList()
    {
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT id, user_name, user_phone, date, status FROM user_order ORDER by id DESC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }
    
    public static function getOrderListByUserId($userId)
    {
        
        $db = Db::getConnection();
        
        $sql = ('SELECT * FROM user_order WHERE user_id = :user_id');
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $result->execute();
        
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['user_comment'] = $row['user_comment'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['status'] = $row['status'];
            $ordersList[$i]['products'] = $row['products'];
            $i++;
        }
        return $ordersList;
    }
    
    public static function getStatusText($status)
    {

        switch ($status) {
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Доставляется';
                break;
            case '4':
                return 'Закрыт';
                break;
        }
    }
    
    public static function getOrderById($id)
    {
        
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM user_order WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $result->execute();
        
        return $result->fetch();
    }
    
    public static function deleteOrderById($id)
    {
        
        $db = Db::getConnection();
        
        $sql = 'DELETE FROM user_order WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        return $result->execute();
    }
    
    public static function updateOrderById($id, $userName, $userPhone, $address, $discount, $dostavka, $oplata, $status)
    {
        
        $db = Db::getConnection();
        $sql = "UPDATE user_order
            SET 
                user_name = :user_name, 
                user_phone = :user_phone, 
                user_address = :address, 
                discount = :discount, 
                dostavka = :dostavka, 
                oplata = :oplata, 
                status = :status 
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':discount', $discount, PDO::PARAM_STR);
        $result->bindParam(':dostavka', $dostavka, PDO::PARAM_STR);
        $result->bindParam(':oplata', $oplata, PDO::PARAM_STR);
        $result->bindParam(':address', $address, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        
        return $result->execute();
    }
}