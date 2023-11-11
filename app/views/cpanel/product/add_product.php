<?php
// add product
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue; font-weight: bold;">'.$value.'</span>';
    }
}
?>
<h3 style="text-align: center;">Them san pham</h3>
<div class="col-md-6">
    <form action="<?=BASE_URL?>/product/insert_category" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Ten san pham:</label>
            <input type="text" name="title_product" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Hinh anh san pham:</label>
            <input type="file" name="image_product" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Gia san pham:</label>
            <input type="text" name="price_product" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">So luong san pham:</label>
            <input type="text" name="quantity_product" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Mota san pham:</label>
            <textarea type="text" name="desc_product" class="form-control" id="" rows="5" style="resize:  none;"></textarea>
        </div>
        <div class="form-group">
            <label for="">Danh muc san pham:</label>
            <select type="text" name="category_product" class="form-control">
                <?php foreach($category as $key => $cate) : ?>
                    <option value="<?=$cate['id_category_product']?>"><?=$cate['title_category_product']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Them danh muc</button>
    </form>
</div>