<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= BASE_URL ?>/login/dashboard">Admin Cpanel</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?= BASE_URL ?>/login/dashboard">Trang chu</a></li>
            <li class=""><a href="#">Thong tin Website</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh muc Bai viet
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="<?=BASE_URL?>/post">Them</a></li>
                    <li><a href="<?=BASE_URL?>/post/list_category">Liet ke</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bai viet
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="<?=BASE_URL?>/post">Them</a></li>
                    <li><a href="<?=BASE_URL?>/post/list_category">Liet ke</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh muc San pham
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?=BASE_URL?>/product">Them</a></li>
                    <li><a href="<?=BASE_URL?>/product/list_category">Liet ke</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">San pham
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?=BASE_URL?>/product/add_product">Them</a></li>
                    <li><a href="<?=BASE_URL?>/product/list_product">Liet ke</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Don hang
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Them</a></li>
                    <li><a href="<?= BASE_URL ?>/order">Liet ke</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>