<?php

class Cart
{
    
    
    public static function addProduct ($id)
    {
        
        $id = intval($id);
        
        
        $productInCart = array();
        
        
        if (isset($_SESSION['products'])) {
            
            $productsInCart = $_SESSION['products'];
        }
        
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id] ++;
        } else {
            $productsInCart[$id] = 1;
        }
        
        $_SESSION['products'] = $productsInCart;
        
        return self::countItems();
    }
    
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }
    
    public static function getTotalPrice($products)
    {
        $productsInCart= self::getProducts();
        
        $total = 0;
        
        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        
        return $total;
    }
    
    public static function countItems()
    {
        if(isset($_SESSION['products'])) {
            return array_sum($_SESSION['products']);
        } else {
            return 0;
        }
    }
    
    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }
    
}