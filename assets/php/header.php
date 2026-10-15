<?php
if (!isset($basePath)) {
    $basePath = '';
}
?>
<header class="header">
    <div class="container header__inner">
        <div class="logo">
            <a href="<?php echo $basePath; ?>index.php">
                <img src="<?php echo $basePath; ?>assets/images/logo1.jpg" alt="Активный Горизонт">
            </a>
        </div>
        <nav class="nav">
            <a href="<?php echo $basePath; ?>index.php">Главная</a>
            <a href="<?php echo $basePath; ?>pages/catalog.php">Каталог</a>
            <a href="<?php echo $basePath; ?>pages/sale.php">Акции</a>
            <a href="<?php echo $basePath; ?>pages/login.php">Вход</a>
            <a href="<?php echo $basePath; ?>pages/registration.php">Регистрация</a>
        </nav>
    </div>
</header>