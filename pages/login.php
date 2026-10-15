<?php
$basePath = '../';
require_once '../assets/php/theme.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Активный Горизонт</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="<?php echo $themeClass; ?>">

<?php require_once '../assets/php/header.php'; ?>

<main class="auth-page">
    <div class="auth-card">
        <div class="auth-tabs">
            <button class="tab-btn active">Вход</button>
            <button class="tab-btn" onclick="window.location.href='registration.php'">Регистрация</button>
        </div>

        <div class="auth-content active" id="login">
            <h2>Добро пожаловать!</h2>
            <p>Если забыли пароль, его можно восстановить через почту</p>

            <img src="../assets/images/palatka.svg" alt="Кемпинг" class="auth-img">

            <form class="auth-form">
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="active@example.com" required>
                </div>
                <div>
                    <label for="password">Пароль</label>
                    <input type="password" id="password" placeholder="••••••" required>
                </div>
                <button type="submit" class="btn-auth">Войти</button>
            </form>

            <div class="auth-links">
                <a href="#">Восстановить пароль</a>
            </div>
        </div>
    </div>
</main>

<?php require_once '../assets/php/footer.php'; ?>

</body>
</html>