<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>&nbsp;/&nbsp;Hoge</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,300;0,400;0,500;0,800;0,900;1,500&family=Noto+Sans+JP:wght@400;500;700&family=Work+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Work+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <header class="shadow-sm">
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="link h4 m-0 p-0">
                    <a href="index.php">Hoge</a>
                </div>
                <ul class="link m-0 p-0 d-flex flex-row flex-wrap justify-content-between">
                    <a href="index.php" class="link-line">
                        <li>Home</li>
                    </a>
                    <a href="products.php" class="link-line">
                        <li>Products</li>
                    </a>
                    <a href="access.php" class="link-line">
                        <li">Access</li>
                    </a>
                    <a href="<?php echo $link ?>" class="link-line">
                        <li>Login / MyPage</li>
                    </a>
                </ul>
                <div class="d-flex">
                    <a href="cart.php">
                        <img src="css/img/cart.png" alt="cart">
                    </a>
                    <?php if ($quantity != 0) : ?>
                        <div class="cartCount rounded-circle bg-danger text-white"><?= $quantity ?></div>
                    <?php endif ?>
                </div>
            </nav>
        </div>
    </header>
