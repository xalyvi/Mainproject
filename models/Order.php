<?php

class Order
{
    
    
    
    
    public static function save($userName, $userPhone, $userEmail, $userAddress, $userId, $products,  $userComment)
    {
        $products = json_encode($products);

        $db = Db::getConnection();

        $sql = 'INSERT INTO user_order (user_name, user_phone, user_email, user_address, user_id, products, user_comment)' . ' VALUES (:user_name, :user_phone, :user_email, :user_address, :user_id, :products, :user_comment)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
        $result->bindParam(':user_address', $userAddress, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);

        return $result->execute();
    }
}