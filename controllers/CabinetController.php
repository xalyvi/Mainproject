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
        
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-x символов';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if ($errors == false) {
                $result = User:: edit($userId, $name, $password);
            }
        }
        
        require_once(ROOT.'/views/user/edit.php');
        
        return true;
    }
}