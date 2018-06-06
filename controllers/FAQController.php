<?php

class FAQController
{
    public static function actionIndex() {
        require_once(ROOT.'/views/faq/index.php');
        
        return true;
    }
}