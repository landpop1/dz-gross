<?php
$basePath = '../';
require_once '../assets/php/theme.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог туров | Активный Горизонт</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="<?php echo $themeClass; ?>">

<?php require_once '../assets/php/header.php'; ?>

<main>
    <section class="catalog">
        <div class="container">
            <h2>Каталог спортивных туров</h2>
            <div class="catalog__grid">
                <div class="catalog__card">
                    <img src="../assets/images/cat1.jpg" alt="Вело-Алтай">
                    <div class="card__content">
                        <h3>Вело-Алтай: Чуйский тракт</h3>
                        <div class="price">45000₽</div>
                        <a href="tour-card.php?id=1" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat2.jpg" alt="Вело-Кавказ">
                    <div class="card__content">
                        <h3>Вело-Кавказ: Эльбрус</h3>
                        <div class="price">38500₽</div>
                        <a href="tour-card.php?id=2" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat3.jpg" alt="Вело-Карелия">
                    <div class="card__content">
                        <h3>Вело-Карелия: Ладога</h3>
                        <div class="price">22000₽</div>
                        <a href="tour-card.php?id=3" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat4.jpg" alt="Школа альпинизма">
                    <div class="card__content">
                        <h3>Школа альпинизма: Начало</h3>
                        <div class="price">65000₽</div>
                        <a href="tour-card.php?id=4" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat5.jpg" alt="Восхождение на Казбек">
                    <div class="card__content">
                        <h3>Восхождение на Казбек</h3>
                        <div class="price">55000₽</div>
                        <a href="tour-card.php" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat6.jpg" alt="Скалодром + Горы">
                    <div class="card__content">
                        <h3>Скалодром + Горы</h3>
                        <div class="price">12000₽</div>
                        <a href="tour-card.php" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat7.jpg" alt="Треккинг: Архыз">
                    <div class="card__content">
                        <h3>Треккинг: Архыз</h3>
                        <div class="price">32000₽</div>
                        <a href="tour-card.php" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat8.jpg" alt="Поход: Хибины">
                    <div class="card__content">
                        <h3>Поход: Хибины</h3>
                        <div class="price">28000₽</div>
                        <a href="tour-card.php" class="btn-card">Забронировать</a>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="../assets/images/cat9.jpg" alt="Выходные в горах">
                    <div class="card__content">
                        <h3>Выходные в горах</h3>
                        <div class="price">8000₽</div>
                        <a href="tour-card.php" class="btn-card">Забронировать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once '../assets/php/footer.php'; ?>

</body>
</html>