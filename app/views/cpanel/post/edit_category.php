<?php
// add post
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight: bold;">' . $value . '</span>';
    }
}
?>
<h3 style="text-align: center;">Cap nhat danh muc bai viet</h3>
<div class="col-md-6">
    <?php foreach ($categorybyid as $key => $cate) : ?>
        <form action="<?= BASE_URL ?>/post/update_category_post/<?=$cate['id_category_post']?>" method="POST">
            <div class="form-group">
                <label for="">Ten danh muc:</label>
                <input type="text" value="<?=$cate['title_category_post']?>" name="title_category_post" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Mota danh muc:</label>
                <textarea type="text" name="desc_category_post" rows="5" class="form-control" id="" style="resize:none"><?= $cate['desc_category_post'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-default">Cap nhat danh muc</button>
        </form>
    <?php endforeach ?>
</div>