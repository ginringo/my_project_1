<?php
if (isset($_SESSION['id'])) {
    $link = 'myAccount.php';
} else {
    $link = 'login.php';
}
?>

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
    <!-- ヘッダー -->
    <header class="shadow-sm">
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center flex-wrap">
                <a href="index.php">
                    <h4 class="header m-0 p-0 font-weight-normal">Hoge</h4>
                </a>
                <ul class="m-0 p-0 d-flex flex-row flex-wrap">
                    <a href=" index.php">
                        <li class="header">Home</li>
                    </a>
                    <a href="items.php">
                        <li class="header">items</li>
                    </a>
                    <a href="access.php">
                        <li class="header">Access</li>
                    </a>
                    <a href="<?php echo $link ?>">
                        <li class="header">Login / My Account</li>
                    </a>
                </ul>
                <a href="cart.php">
                    <img src="img/cart.png" alt="cart">
                </a>
            </nav>
        </div>
    </header>


    <!-- 必須項目の記号を変数で管理 -->
    <?php $req = '&nbsp;<span class="text-danger">*</span>' ?>
    <?php $pageCheck = preg_match('/^.*myAccount.php$/', $content) ?>

    <!-- index.phpでは画像、それ以外はヘッドラインを表示 -->
    <?php if (preg_match('/^.*index.php$/', $content)) : ?>
        <div class="top-visual">
            <h1 class="text-danger">hoge</h1>
        </div>
    <?php else : ?>
        <div class="head-line-outer">
            <div class="head-line-inner container d-flex align-items-center">
                <p class="head-line-p">
                    <?php echo $headLineEn; ?>
                    <?php echo $headLineJa; ?>
                </p>
            </div>
        </div>
    <?php endif; ?>


    <div class="container">
        <main>
            <?php include $content; ?>
        </main>
    </div>


    <!-- フッター -->
    <div class="footer-outer">
        <div class="container d-flex flex-column align-items-center">
            <footer class="text-center">
                <p class="footer">Please Follow Us !</p>
                <div class=" mt-3 mb-3 d-flex justify-content-center flex-wrap">
                    <div>
                        <img src="img/facebook.svg" ;>
                        <img src="img/tw.svg" ;>
                    </div>
                    <div>
                        <img src="img/ig.svg" ;>
                        <img src="img/ln.svg" ;>
                    </div>
                </div>
                <p class="footer">Copyright © Hoge Co., Ltd. All Rights Reserved.</p>
            </footer>
        </div>
    </div>
</body>

</html>
