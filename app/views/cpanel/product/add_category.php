<?php
// add product
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue; font-weight: bold;">'.$value.'</span>';
    }
}
?>
<h3 style="text-align: center;">Them danh muc san pham</h3>
<div class="col-md-6">
    <form action="<?=BASE_URL?>/product/insert_category" method="POST">
        <div class="form-group">
            <label for="">Ten danh muc:</label>
            <input type="text" name="title_category_product" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Mota danh muc:</label>
            <input type="text" name="desc_category_product" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-default">Them danh muc</button>
    </form>
</div>