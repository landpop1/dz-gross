<?php
$basePath = '../';
require_once '../assets/php/theme.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Восхождение на Казбек | Активный Горизонт</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="<?php echo $themeClass; ?>">

<?php require_once '../assets/php/header.php'; ?>

<main>
    <section class="service-detail">
        <div class="container">
            <div class="service-detail">
                <div class="service-image">
                    <img src="../assets/images/tour5.jpg" alt="Восхождение на Казбек">
                </div>
                <div class="service-info">
                    <h2>Восхождение на Казбек</h2>
                    <p>Эпичное восхождение на один из пятитысячников Кавказа. 7 дней, профессиональные гиды, полное снаряжение. Опыт не требуется, необходима хорошая физподготовка.</p>
                    <div class="price">55000₽</div>
                    <a href="registration.php" class="btn-card" style="margin-top: 20px;">Записаться сейчас</a>
                    <p style="margin-top: 20px;">⭐ Включено: трансфер, питание, страховка, аренда кошек и ледорубов.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once '../assets/php/footer.php'; ?>

</body>
</html>