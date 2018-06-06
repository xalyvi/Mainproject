<?php

class Catalog
{
    
    const SHOW_BY_DEFAULT = 4;
    
    /**
     * Returns an array of catalog items
     */
    public static function getCatalogList($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query('SELECT id, title, price, img ' . 'FROM goods ' . 'LIMIT ' .self::SHOW_BY_DEFAULT. ' OFFSET ' . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
    }
    
    public static function getCatalogListDec($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query('SELECT id, title, price, img ' . 'FROM goods ' . 'ORDER BY price DESC ' . 'LIMIT '.self::SHOW_BY_DEFAULT. ' OFFSET ' . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
    }
    
    public static function getCatalogListInc($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query('SELECT id, title, price, img ' . 'FROM goods ' . 'ORDER BY price ASC ' . 'LIMIT '.self::SHOW_BY_DEFAULT. ' OFFSET ' . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
    }
    
    public static function getCatalogListNew($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query('SELECT id, title, price, img ' . 'FROM goods ' . 'WHERE new = 1 '. 'LIMIT '.self::SHOW_BY_DEFAULT. ' OFFSET ' . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
    }
    
    public static function getCatalogListCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query("SELECT id, title, price, img " . "FROM goods " . "WHERE category = '".$categoryId."' " . "LIMIT ".self::SHOW_BY_DEFAULT. " OFFSET " . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
        }
    }
    
    public static function getCatalogListCategoryDec($categoryId = false, $page = 1)
    {
        if ($categoryId) {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query("SELECT id, title, price, img " . "FROM goods " . "WHERE category = '".$categoryId."' " . "ORDER by price DESC " . "LIMIT ".self::SHOW_BY_DEFAULT. " OFFSET " . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
        }
    }
    
    public static function getCatalogListCategoryInc($categoryId = false, $page = 1)
    {
        if ($categoryId) {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query("SELECT id, title, price, img " . "FROM goods " . "WHERE category = '".$categoryId."' " . "ORDER by price ASC " . "LIMIT ".self::SHOW_BY_DEFAULT. " OFFSET " . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
        }
    }
    
    public static function getCatalogListCategoryNew($categoryId = false, $page = 1)
    {
        if ($categoryId) {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query("SELECT id, title, price, img " . "FROM goods " . "WHERE category = '".$categoryId."' AND new = 1 " . "LIMIT ".self::SHOW_BY_DEFAULT. " OFFSET " . $offset);
        $i = 0;
        while($row = $result->fetch()) {
            $catalogList[$i]['id'] = $row['id'];
            $catalogList[$i]['title'] = $row['title'];
            $catalogList[$i]['price'] = $row['price'];
            $catalogList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $catalogList;
        }
    }
}