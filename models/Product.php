<? 

class Product
{
    /**
     * Returns single catalog item with specified id
     * $param integer $id
     */
    
    public static function getProductItemById($id)
    {
        $id = intval($id);
        
        if ($id) {
            
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM goods WHERE id=' . $id);
            
//            $result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            $catalogItem = $result->fetch();
            
            return $catalogItem;
        }
    }
    
    public static function getProductRelated($brand,$title)
    {
        $db = Db::getConnection();
        
        $result = $db->query("SELECT id, title, price, img " . "FROM goods " . "WHERE brand = '".$brand."' AND NOT title = '".$title."' " . "LIMIT 6");
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
    
    public static function getTotalProducts()
    {
        $db = Db::getConnection();
        
        $result = $db->query('SELECT count(id) AS count FROM goods');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        return $row['count'];
    }
    
    public static function getProductsByIds($idsArray)
    {
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',', $idsArray);
        
        $sql = "SELECT id, title, price, img, cartimg FROM goods WHERE id IN ($idsString)";
        
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['img'] = $row['img'];
            $products[$i]['cartimg'] = $row['cartimg'];
            $i++;
        }
        
        return $products;
    }
}