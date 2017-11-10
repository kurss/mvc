<?php
class Model_Price extends Model {

    public function get_data()
        {
            $sql_product = "SELECT id, name, description, price, url FROM tovar";
            $result = $this->mysql->query($sql_product);
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            return $rows;
        }
}

    
