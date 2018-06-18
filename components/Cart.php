<?php

class Cart
{
    
    
    public static function addProduct ($id)
    {
        
        $id = intval($id);
        
        
        $productsInCart = array();
        
        
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
    
    public static function addWishlist ($id)
    {
        
        $id = intval($id);
        
        $wishlist = array();
        
        if (isset($_SESSION['wishlist'])) {
            $wishlist = $_SESSION['wishlist'];
        }
        
        
        $wishlist[$id] = 1;
        
        $_SESSION['wishlist'] = $wishlist;
        
        return self::countWish();
    }
    
    public static function deleteProduct($id) {
        
        $productsInCart = self::getProducts();
        
        unset($productsInCart[$id]);
        
        $_SESSION['products'] = $productsInCart;
    }
    
    public static function deleteProductWish($id) {
        
        $wishlist = self::getWishlist();
        
        unset($wishlist[$id]);
        
        $_SESSION['wishlist'] = $wishlist;
    }
    
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }
    
    public static function getWishlist()
    {
        if (isset($_SESSION['wishlist'])) {
            return $_SESSION['wishlist'];
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
    
    public static function countWish()
    {
        if(isset($_SESSION['wishlist'])) {
            return array_sum($_SESSION['wishlist']);
        } else {
            return 0;
        }
    }
    
    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
        if (isset($_SESSION['discount'])) {
            unset($_SESSION['discount']);
        }
        if (isset($_SESSION['dostavka'])) {
            unset($_SESSION['dostavka']);
        }
    }
    
}