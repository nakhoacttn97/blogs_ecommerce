<?php
// add product
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight: bold;">' . $value . '</span>';
    }
}
?>
<h3 style="text-align: center;">Liet ke danh muc bai viet</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ten danh muc</th>
            <th>Mota</th>
            <th>Quan ly</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($category as $key => $value) :
        ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $value['title_category_post'] ?></td>
                <td><?= $value['desc_category_post'] ?></td>
                <td>
                    <a href="<?= BASE_URL ?>/post/delete_category/<?= $value['id_category_post'] ?>">Xoa</a>||
                    <a href="<?= BASE_URL ?>/post/edit_category/<?= $value['id_category_post'] ?>">Cap nhat</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </tbody>
</table>