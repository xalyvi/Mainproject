<?php

class Site
{
    
    const SHOW_BY_DEFAULT = 6;
    
    
    public static function getCatalogList()
    {
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query('SELECT id, title, price, img ' . 'FROM goods ' . 'WHERE new = 0 ' . 'LIMIT ' . self::SHOW_BY_DEFAULT);
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
    
    public static function getCatalogListNew()
    {
        $db = Db::getConnection();
        
        $catalogList = array();
        
        $result = $db->query('SELECT id, title, price, img ' . 'FROM goods ' . 'WHERE new = 1 ' . 'LIMIT ' . self::SHOW_BY_DEFAULT);
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