<?php

class User
{
    
    public static function register($email, $password) {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO user (email, password)' . 'VALUES (:email, :password)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        
        return $result->execute();
    }
    
    
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    public static function checkPassword($password) {
        if(iconv_strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    
    public static function checkName($name) {
        if(iconv_strlen($name) >= 2) {
            return true;
        }
        return false;
    }
    
    public static function checkPost($postcode) {
        if(iconv_strlen($postcode) == 6) {
            return true;
        }
        return false;
    }
    
    public static function checkEmailExists($email) {
        
        $db = Db::getConnection();
        
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        
        if ($result->fetchColumn()) return true;
        return false;
    }
    
    public static function edit($id, $name, $email, $street, $cite, $state, $country, $postcode, $phone, $password)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE user 
            SET fullname = :name, password = :password, email = :email, street = :street, city = :city, state = :state, country = :country, postcode = :postcode, phone = :phone 
            WHERE id = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':name', $name, PDO::PARAM_STR);    
        $result->bindParam(':password', $password, PDO::PARAM_STR); 
        $result->bindParam(':email', $email, PDO::PARAM_STR); 
        $result->bindParam(':street', $street, PDO::PARAM_STR); 
        $result->bindParam(':city', $city, PDO::PARAM_STR); 
        $result->bindParam(':state', $state, PDO::PARAM_STR); 
        $result->bindParam(':country', $country, PDO::PARAM_STR); 
        $result->bindParam(':postcode', $postcode, PDO::PARAM_STR); 
        return $result->execute();
    }
    
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        
        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        
        return false;
    }
    
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    
    public static function checkLogged()
    {
        
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        
        header("Location: /user/action");
    }
    
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
    
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }
    }
    
}