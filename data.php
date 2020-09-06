<?php

class RestaurantData {
    
    private $restaurantList;

    function __construct(array $restaurantList) {
        if (sizeof($restaurantList)>0) {
            $this->restaurantList = $restaurantList;
        } else {
            throw new Exception("No menu record available");
        }
    }

    public function getItemName() {
        $itemNameList = [];

        foreach($this->restaurantList as $menu_items) {
            $itemNameList[] = array(
               "id"=>$menu_items['id'],
               "name"=>$menu_items['name'],
               
            );
        }

        return json_encode($itemNameList);
    }

    public function getItemById($id) {  
        $response = ["In-Valid ID"];
        if($id) {
            foreach($this->restaurantList as $menu_items) {
                if ($id == $menu_items['id']) {
                    $response = $menu_items;
                    break;
                }
            }
        }
        return json_encode($response);
    }
}
?>