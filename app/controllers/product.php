<?php

class product extends DController{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->add_category();
    }

    // category
    public function add_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/add_category');
        $this->load->view('cpanel/footer');
    }

    public function insert_category(){
        $title = $_POST['title_category_product'];
        $desc = $_POST['desc_category_product'];
        $table = "tbl_category_product";
        $data = array(
            'title_category_product' => $title,
            'desc_category_product' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertcategory($table, $data);

        if($result == 1){
            $message['msg'] = "Them danh muc san pham thanh cong";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }else{
            $message['msg'] = "Them danh muc that bai";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }
    }

    public function list_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');

        $table = "tbl_category_product";

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);

        $this->load->view('cpanel/product/list_category', $data);
        $this->load->view('cpanel/footer');
    }

    public function delete_category($id){
        $table = "tbl_category_product";
        $cond = "id_category_product = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory($table, $cond);

        if($result == 1){
            $message['msg'] = "Xoa danh muc san pham thanh cong";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }else{
            $message['msg'] = "Xoa danh muc that bai";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }
    }

    public function edit_category($id){

        $table = "tbl_category_product";
        $cond = "id_category_product = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categorybyid($table, $cond);

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/edit_category', $data);
        $this->load->view('cpanel/footer');
    }

    public function update_product($id){
        $table = "tbl_category_product";
        $cond = "id_category_product = '$id'";
        $title = $_POST['title_category_product'];
        $desc = $_POST['desc_category_product'];
        $data = [
            'title_category_product' => $title,
            'desc_category_product' => $desc
        ];
        $categorymodel = $this->load->model('categorymodel');

        $result = $categorymodel->updatecategory($table, $data, $cond);

        if($result == 1){
            $message['msg'] = "Cap nhat danh muc san pham thanh cong";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }else{
            $message['msg'] = "Cap nhat danh muc that bai";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }
    }

    // method of product
    public function add_product(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');

        $table = "tbl_category_product";
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);


        $this->load->view('cpanel/product/add_product', $data);
        $this->load->view('cpanel/footer');
    }

    public function insert_product(){
        $title = $_POST['title_product'];
        $desc = $_POST['desc_product'];
        $price = $_POST['price_product'];
        $quantity = $_POST['quantity_product'];
        $image = $_POST['image_product'];
        $category = $_POST['category_product'];

        $table = "tbl_category_product";
        $data = array(
            'title_category_product' => $title,
            'desc_category_product' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertcategory($table, $data);

        if($result == 1){
            $message['msg'] = "Them danh muc san pham thanh cong";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }else{
            $message['msg'] = "Them danh muc that bai";
            header('Location:'.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
        }
    }
}