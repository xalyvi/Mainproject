<?php

class CartController
{
    public function actionIndex()
    {
        if (!(isset($_SESSION['discount']))) 
            $_SESSION['discount'] = 0;
        
        if (!(isset($_SESSION['dostavka'])))
            $_SESSION['dostavka'] = 1500;
        
        $productsInCart = false;
       // $wishlist = false;
        
        $productsInCart = Cart::getProducts();
       // $wishlist = Cart::getWishlsit();
        
        if ($productsInCart) {
            
            $productIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productIds);
            
            $totalPrice = Cart::getTotalPrice($products);
        }
        
       /* if ($pwishlist) {
            $wishlistId = array_keys($wishlist);
            $wishProducts = Product::getProductsByIds($wishlistId);
        }*/
        
        if (isset($_POST['update_cart'])) {
        foreach ($productIds as $id)
        {
            if ($_POST['product_'.$id] === 0) 
                Cart::deleteProduct($id); 
                    else {
            $productsInCart[$id] = $_POST['product_'.$id];
            
            $_SESSION['products'] = $productsInCart;
                    }
        }
            
        }
        if (isset($_POST['apply_coupon'])) {
            $coupon = $_POST['coupon_code'];
            $_SESSION['discount'] = Order::getCoupon($coupon);
        }
        
        if (isset($_POST['calc_shipping'])) {
            if ($_POST['calc_shipping_country'] == 'RU') {
                $_SESSION['dostavka'] = 0; }
            else $_SESSION['dostavka'] == 1500;
        }
        
        require_once(ROOT.'/views/cart/index.php');
        return true;
    }
    
    public function actionAdd($id)
    {   
        echo Cart::addProduct($id);
        return true;
    }
    
    public function actionAddWish($id)
    {   
        echo Cart::addWishlist($id);
        return true;
    }
    
    public function actionCheckout()
    {
        $result = false;
        
        if (!(isset($_SESSION['discount']))) 
            $_SESSION['discount'] = 0;
        
        if (!(isset($_SESSION['dostavka'])))
            $_SESSION['dostavka'] = 1500;
        
        if (isset($_POST['submit'])) {
            
            $errors = false;
            
            if (!($_POST['billing_full_name'] == '')) {
                $userName = $_POST['billing_full_name'];
                if (!User::checkName($userName)) {
                    $errors['billing_full_name'] = 'Неправильное имя';
                } 
            } else $errors['billing_full_name'] = 'Введите Фамилию Имя Отчество';
            
            if (!($_POST['billing_phone'] == '')) 
                $userPhone = $_POST['billing_phone'];
                else
                    $errors['billing_phone'] = 'Введите телефон';
            
            
            if (!($_POST['billing_email'] == '')) {
                $userEmail = $_POST['billing_email'];
                if (!User::checkEmail($userEmail)) {
                    $errors['billing_email'] = 'Неправильная почта';
                } 
            } else
                    $errors['billing_email'] = 'Введите почту';
            
            if (!($_POST['billing_company'] == ''))
                $userCompany = $_POST['billing_company'];
            
            if ($_POST['billing_address'] == '')
                $errors['billing_address'] = 'Введите адрес';
            else
                $userAddress = $_POST['billing_address'] . ', ';
            
            if ($_POST['billing_city'] == '')
                $errors['billing_city'] = 'Введите город';
            else
                $userAddress .= $_POST['billing_city'] . ', ';
            
            if (!($_POST['billing_state'] == ''))
                $userAddress .= $_POST['billing_state'] . ', ';
            
            if ($_POST['billing_country'] == '0')
                $errors['billing_country'] = 'ВЫберите страну';
            else
                $userAddress .= $_POST['billing_country'] . ', ';
            
            if (!($_POST['billing_postcode'] == '')) {
                $userPostcode = $_POST['billing_postcode'];
                if (!User::checkPost($userPostcode))
                    $errors['billing_postcode'] = 'Введите правильный почтовый индекс';
                else
                    $userAddress .= $userPostcode;
            }
            else
                $errors['billing_postcode'] = 'Введите почтовый индекс';
            
            
            if (!($_POST['comment'] = ''))
                $userComment = $_POST['comment'];
            else
                $userComment = '';
            
            if ($_POST['payment_method'] == 'bacs') $oplata = 'Прямой банковский перевод'; else if ($_POST['payment_method'] == 'cheque') $oplata = 'Оплата чеком'; else if ($_POST['payment_method'] == 'paypal') $oplata = 'Paypal';
            
            if ($errors == false) {
                
                $productsInCart = Cart::getProducts();
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }
                
                if (isset($_SESSION['discount'])) {
                    $discount = $_SESSION['discount'].'%';
                }
                if (isset($_SESSION['dostavka']))
                    if ($_SESSION['dostavka'] > 0) 
                        $dostavka = 'Платная';
                            else $dostavka = 'Бесплатная';
                else $dostavka = 'Платная';
                
                $result = Order::save($userName, $userPhone, $userEmail, $userAddress, $userId, $productsInCart,  $userComment, $discount, $dostavka, $oplata);
                    
                if ($result) {
                    
                    /*$adminEmail = 'novayapochtacyka@gmail.com';
                    $message = 'http://final/admin/orders';
                    $subject = 'Новый заказ'; */
                    
                   // mail($adminEmail, $subject, $message);
                    
                    Cart::clear();
                }
            } else {
                
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                
            }
        } else {
            
                $productsInCart = Cart::getProducts();
            
                if ($productsInCart == false){
                    header("Location: /"); 
                } else {
            
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                
                $userName = false;
                $userPhone = false;
                $userComment = false;
                $userStreet = false;
                $userCity = false;
                $userState = false;
                $userPostcode = false;
                $userPost = false;
                $userEmail = false;
                
                if (User::isGuest()) {
                    
                } else {
                    
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    
                    $userName = $user['fullname'];
                    $userEmail = $user['email'];
                    $userPhone = $user['phone'];
                    $userStreet = $user['street'];
                    $userCity = $user['city'];
                    $userCountry = $user['country'];
                    if (isset($user['state']))
                    $userState = $user['state'];
                    $userPostcode = $user['postcode'];
                }
            }
        }
        
        require_once (ROOT.'/views/cart/checkout.php');
        
        return true;
    }
    
    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    }
    
    public function actionDeleteWish($id)
    {
        Cart::deleteProductWish($id);
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    }
}