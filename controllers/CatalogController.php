<?php

class CatalogController 
{
    public function actionIndex($page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogList($page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionIndexDec($page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogListDec($page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionIndexInc($page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogListInc($page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionIndexNew($page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogListNew($page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionCategory($categoryId, $page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogListCategory($categoryId, $page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionCategoryDec($categoryId, $page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogListCategoryDec($categoryId, $page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionCategoryInc($categoryId, $page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogListCategoryInc($categoryId, $page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionCategoryNew($categoryId, $page = 1)
    {
        $catalogList = array();
        $catalogList = Catalog::getCatalogListCategoryNew($categoryId, $page);
        
        $total = Product::getTotalProducts();
        
        $pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, 'page-');
        
        require(ROOT.'/views/catalog/index.php');
        
        return true;
    }
}