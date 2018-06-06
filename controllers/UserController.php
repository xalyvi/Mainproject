<?php

class UserController
{
    public function actionRegister()
    {
        $email = '';
        $password = '';
        $result = false;
        
        if (isset($_POST['register'])) {
            $email = $_POST['emailin'];
            $password= $_POST['passwordin'];
            
            $errors1 = false;
            
            if (!User::checkEmail($email)) {
                $errors1[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors1[] = 'Пароль не должен быть кароче 6-ити символов';
            }
            if (User::checkEmailExists($email)) {
                $errors1[] = 'Такой email уже используется';
            }
            
            if ($errors1 == false) {
                $result = User::register($email, $password);
            }
        }
        
        if (isset($_POST['login'])) {
            $email = $_POST['emailout'];
            $password = $_POST['passwordout'];
            
            $errors2 = false;
            
            if (!User::checkEmail($email)) {
                $errors2[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors2[] = 'Пароль не должен быть кароче 6-ти символов';
            }
            
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                $errors2[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId);
                
                header("Location: /cabinet/");
            }
        }
        require_once(ROOT . '/views/user/register.php');
        
        return true;
    }
    
    public function actionLogout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location:  /");
    }
    
}