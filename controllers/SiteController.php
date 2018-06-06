<?php

class SiteController
{
    
    public function actionIndex()
    {
        $catalogList = array();
        $catalogList = Site::getCatalogList();
        
        $catalogListNew = array();
        $catalogListNew = Site::getCatalogListNew();
        
        require_once(ROOT.'/views/site/index.php');
        
        return true;
    }
}