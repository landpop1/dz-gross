<?php
$basePath = '../';
require_once '../assets/php/theme.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация | Активный Горизонт</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="<?php echo $themeClass; ?>">

<?php require_once '../assets/php/header.php'; ?>

<main class="auth-page">
    <div class="auth-card">
        <div class="auth-tabs">
            <button class="tab-btn" onclick="window.location.href='login.php'">Вход</button>
            <button class="tab-btn active">Регистрация</button>
        </div>

        <div class="auth-content active" id="register">
            <h2>Давайте знакомиться!</h2>

            <img src="../assets/images/palatka.svg" alt="Кемпинг" class="auth-img">

            <h3 style="font-size: 1.1rem; margin: 20px 0 15px;">Личные данные</h3>

            <form class="auth-form">
                <div>
                    <label>Имя</label>
                    <input type="text" placeholder="Ваше имя" required>
                </div>
                <div>
                    <label>Фамилия</label>
                    <input type="text" placeholder="Ваша фамилия" required>
                </div>
                <div>
                    <label>Номер телефона</label>
                    <input type="tel" placeholder="+7 (___) ___-__-__" required>
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" placeholder="your@email.com" required>
                </div>
                <div>
                    <label>Пароль</label>
                    <input type="password" placeholder="••••••" required>
                </div>
                <div>
                    <label>Повторите пароль</label>
                    <input type="password" placeholder="••••••" required>
                </div>

                <div class="checkbox-wrapper">
                    <input type="checkbox" id="policy" required>
                    <label for="policy">Нажимая на кнопку, вы соглашаетесь с политикой конфиденциальности</label>
                </div>

                <button type="submit" class="btn-auth">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</main>

<?php require_once '../assets/php/footer.php'; ?>

</body>
</html>