<?php


class ProductController
{
    public function actionIndex($id)
    {
        $catalogItem = array();
        $catalogItem = Product::getProductItemById($id);
        
        $catalogListRelated = array();
        $catalogListRelated = Product::getProductRelated($catalogItem['brand'],$catalogItem['title']);
        
        require_once(ROOT.'/views/catalog/view.php');
        
        return true;
    }
}