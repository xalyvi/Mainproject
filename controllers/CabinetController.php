<?php

class CabinetController
{
    
    public function actionIndex()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        require_once(ROOT.'/views/user/cabinet.php');
        
        return true;
    }
    
    public function actionEdit()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        $name = $user['fullname'];
        $password = $user['password'];
        $email = $user['email'];
        $street = $user['street'];
        $city = $user['city'];
        $state = $user['state'];
        $country = $user['country'];
        $postcode = $user['postcode'];
        $phone = $user['phone'];
        
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $name = $_POST['fullname'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $street = $_POST['street'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $postcode = $_POST['postcode'];
            $phone = $_POST['phone'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-x символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильная почта';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if ($errors == false) {
                $result = User:: edit($userId, $name, $email, $street, $city, $state, $country, $postcode, $phone, $password);
            }
        }
        
        require_once(ROOT.'/views/user/edit.php');
        
        return true;
    }
    
    public function actionStory()
    {
        
        $userId = User::checkLogged();
        $orderList = Order::getOrderListByUserId($userId);
        
        include(ROOT.'/models/Product.php');
        require_once(ROOT.'/views/user/story.php');
        return true;
    }
}