<?php
class categorymodel extends DModel{
    public function __construct(){
        parent::__construct();
    }
    
    // category product
    public function category($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
        $result = $this->db->select($sql);
        return $result;
    }

    public function categorybyid($table, $cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function insertcategory($table_category_product, $data){
        $result = $this->db->insert($table_category_product,$data);
        return $result;
    }

    public function updatecategory($table_category_product, $data, $cond){
        $result = $this->db->update($table_category_product, $data, $cond);
        return $result;
    }

    public function deletecategory($table_category_product, $cond){
        $result = $this->db->delete($table_category_product, $cond);
        return $result;
    }

    // category post
    public function insertcategory_post($table, $data){
        $result = $this->db->insert($table,$data);
        return $result;
    }

    public function post_category($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
        $result = $this->db->select($sql);
        return $result;
    }

    public function deletecategory_post($table_category_product, $cond){
        $result = $this->db->delete($table_category_product, $cond);
        return $result;
    }

    public function categorybyid_post($table, $cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function updatecategory_post($table_category_product, $data, $cond){
        $result = $this->db->update($table_category_product, $data, $cond);
        return $result;
    }
}