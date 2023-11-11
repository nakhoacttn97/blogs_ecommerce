<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Ecommerce</title>
</head>

<body>

    <div style="font-size: 16px;">
        <?php
            spl_autoload_register(function($class){
                include_once 'system/libs/'.$class.'.php';
            });

            include_once 'app/config/config.php';

            $main = new Main();

            // xem class -> method -> statement -> params -> some thing ifo
            echo '<pre>';
            print_r($main);
            echo '</pre>';

        ?>
    </div>

</body>

</html>