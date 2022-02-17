<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$link = 'login.php';
if (isset($_SESSION['member_id'])) {
    $link = 'myPage.php';
}

$quantity = 0;
if (isset($_SESSION['items'])) {
    $quantity = array_sum(array_column($_SESSION['items'], 'quantity'));
    $quantity = $quantity > 99 ? 99 : $quantity;
}
?>


<?php include __DIR__ . '/header.php' ?>


<?php $req = '&nbsp;<span class="text-danger">*</span>' ?>
<?php $pageCheck = preg_match('/^.*myPage.php$/', $content) ?>

<?php if (preg_match('/^.*index.php$/', $content)) : ?>
    <div class="top-visual d-flex justify-content-center align-items-center">
        <h1 class="heading">hoge</h1>
    </div>
<?php else : ?>
    <div class="headline-outer">
        <div class="headline-inner container d-flex align-items-center">
            <p class="headline-p">
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


<?php include __DIR__ . '/footer.php' ?>
