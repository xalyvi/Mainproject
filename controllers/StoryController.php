<?php

class StoryController
{
    public function actionIndex()
    {
        
        $orderList = Order::getOrderListByUserId($_SESSION['user']);
        
        require_once(ROOT.'/views/user/story.php');
        return true;
    }

    
}