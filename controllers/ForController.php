<?php

class ForController
{
    public function actionIndex()
    {
        header("Location: /404");
    }
    
    public function actionView()
    {
        require_once(ROOT.'/views/404.php');
        
        return true;
    }
}