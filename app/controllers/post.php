<?php

class post extends DController{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->add_category();
    }

    public function add_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/post/add_category');
        $this->load->view('cpanel/footer');
    }

    public function insert_category(){
        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];
        $table = "tbl_category_post";
        $data = array(
            'title_category_post' => $title,
            'desc_category_post' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertcategory_post($table, $data);

        if($result == 1){
            $message['msg'] = "Them danh muc bai viet thanh cong";
            header('Location:'.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
        }else{
            $message['msg'] = "Them danh muc bai viet that bai";
            header('Location:'.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
        }
    }

    public function list_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');

        $table = "tbl_category_post";

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->post_category($table);

        $this->load->view('cpanel/post/list_category', $data);
        $this->load->view('cpanel/footer');
    }

    public function delete_category($id){
        $table = "tbl_category_post";
        $cond = "id_category_post = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory_post($table, $cond);

        if($result == 1){
            $message['msg'] = "Xoa danh muc san pham thanh cong";
            header('Location:'.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
        }else{
            $message['msg'] = "Xoa danh muc that bai";
            header('Location:'.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
        }
    }

    public function edit_category($id){

        $table = "tbl_category_post";
        $cond = "id_category_post = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categorybyid_post($table, $cond);

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/post/edit_category', $data);
        $this->load->view('cpanel/footer');
    }

    public function update_category_post($id){
        $table = "tbl_category_post";
        $cond = "id_category_post = '$id'";

        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];
        $data = [
            'title_category_post' => $title,
            'desc_category_post' => $desc
        ];
        $categorymodel = $this->load->model('categorymodel');

        $result = $categorymodel->updatecategory_post($table, $data, $cond);

        if($result == 1){
            $message['msg'] = "Cap nhat danh muc bai viet thanh cong";
            header('Location:'.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
        }else{
            $message['msg'] = "Cap nhat danh muc bai viet that bai";
            header('Location:'.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
        }
    }
}