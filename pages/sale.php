<?php
$basePath = '../';
require_once '../assets/php/theme.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акции и скидки | Активный Горизонт</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="<?php echo $themeClass; ?>">

<?php require_once '../assets/php/header.php'; ?>

<main>
    <section class="sale-hero">
        <div class="container">
            <div class="sale-hero__wrapper">
                <div class="sale-hero__image">
                    <img src="../assets/images/14akcia.jpg" alt="Горы">
                </div>
                <div class="sale-hero__content">
                    <p class="sale-hero__subtitle">ПУТЕШЕСТВИЯ, О КОТОРЫХ ВЫ МЕЧТАЛИ</p>
                    <h1 class="sale-hero__title">НОВЫЕ ВЕРШИНЫ<br>В КАЖДОМ ПОХОДЕ!</h1>
                    <p class="sale-hero__description">
                        Спортивный туризм с активным горизонтом — это профессиональные инструкторы,
                        безопасные маршруты и незабываемые впечатления. Доверьтесь экспертам,
                        и каждое приключение станет настоящим испытанием ваших возможностей!
                    </p>
                    <a href="catalog.php" class="sale-hero__btn">ВЫБРАТЬ МАРШРУТ →</a>
                    <div class="sale-hero__reviews">
                        <div class="sale-hero__avatars">
                            <img src="../assets/images/avatar1.jpg" alt="Отзыв">
                            <img src="../assets/images/avatar2.jpg" alt="Отзыв">
                            <img src="../assets/images/avatar3.jpg" alt="Отзыв">
                            <img src="../assets/images/avatar4.jpg" alt="Отзыв">
                        </div>
                        <div class="sale-hero__rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews-count">1350+ отзывов</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once '../assets/php/footer.php'; ?>

</body>
</html>