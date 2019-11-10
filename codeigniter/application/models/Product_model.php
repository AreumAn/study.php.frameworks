<?php

class Product_model extends CI_Model {

    function get_product() {
        $result = $this->db->get('product');
        return $result;
    }

    function save($product_name, $product_price) {
        $data = array(
            'product_name' => $product_name,
            'product_price' => $product_price
        );
        $this->db->insert('product', $data);
    }
}

?>
