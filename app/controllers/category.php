<?php

class category extends DController{

    public function __construct(){
        $data = array();
        $message = array();
        parent::__construct();
    }

    public function list_category(){
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');

        $table_category_product = 'tbl_category_product';
        $data['category'] = $categorymodel->category($table_category_product);
        
        $this->load->view('category', $data);
        $this->load->view('footer');
    }

    public function catebyid(){

        $this->load->view('header');
        $categorymodel = $this->load->model('homemodel');
        $id = 2;

        $table_category_product = 'tbl_category_product';
        $data['categorybyid'] = $categorymodel->categorybyid($table_category_product, $id);
        
        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function addcategory(){
        $this->load->view('addcategory');
    }

    public function insertcategory(){

        $categorymodel = $this->load->model('categorymodel');

        $table_category_product = 'tbl_category_product';

        $title = $_POST['title'];
        $desc = $_POST['desc'];

        $data = [
            'title_category_product' => $title,
            'desc_category_product' => $desc,
        ];

        $result = $categorymodel->insertcategory($table_category_product, $data);
        
        if($result == 1){
            $message['msg'] = "Them du lieu thanh cong";
        }else{
            $message['msg'] = "Them du lieu that bai";
        }

        $this->load->view('addcategory', $message);
    }

    public function updatecategory(){
        $categorymodel = $this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';

        $id = 3;
        $cond = "tbl_category_product.id_category_product = '$id'";
        $data = [
            'title_category_product' => 'Macbook Air 20323',
            'desc_category_product' => 'macbook Air 2023 gia tot'
        ];
        $result = $categorymodel->updatecategory($table_category_product, $data, $cond);

        if($result == 1){
            echo "Update du lieu thanh cong";
        }else{
            echo "Update du lieu that bai";
        }
    }

    public function deletecategory(){
        $categorymodel = $this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';

        $cond = "id_category_product = 19";
        $result = $categorymodel->deletecategory($table_category_product, $cond);

        if($result = 1){
            echo "Xoa du liu thanh cong";
        }else{
            echo "Xoa du lieu that bai";
        }
    }
}