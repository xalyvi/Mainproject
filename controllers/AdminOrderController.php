<?php

class AdminOrderController extends AdminBase
{
    
    
    public function actionIndex()
    {
        
        self::checkAdmin();
        
        $ordersList = Order::getOrderList();
        
        require_once(ROOT.'/views/admin_order/index.php');
        return true;
    }
    
    public function actionUpdate($id)
    {
        self::checkAdmin();

        $order = Order::getOrderById($id);
        
        if (isset($_POST['submit'])) {

            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $address = $_POST['address'];
            $discount = $_POST['discount'];
            $dostavka = $_POST['dostavka'];
            $oplata = $_POST['oplata'];
            $status = $_POST['status'];

            Order::updateOrderById($id, $userName, $userPhone, $address, $discount, $dostavka, $oplata, $status);

            header("Location: /admin/order/view/$id");
        }

        require_once(ROOT . '/views/admin_order/update.php');
        return true;
    }
    
    public function actionView($id)
    {

        self::checkAdmin();

        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'], true);

        $productsIds = array_keys($productsQuantity);

        $products = Product::getProdustsByIds($productsIds);

        require_once(ROOT . '/views/admin_order/view.php');
        return true;
    }
    
    public function actionDelete($id)
    {

        self::checkAdmin();

        if (isset($_POST['submit'])) {

            Order::deleteOrderById($id);

            header("Location: /admin/order");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }
}