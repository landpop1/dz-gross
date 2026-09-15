<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Активный Горизонт</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container header__inner">
            <div class="logo">
                <img src="../assets/images/logo1.jpg" alt="Активный Горизонт">
            </div>
            <nav class="nav">
                <a href="../index.php">Главная</a>
<a href="catalog.php">Каталог</a>
<a href="sale.php">Акции</a>
<a href="login.php">Вход</a>
<a href="registration.php">Регистрация</a>
            </nav>
        </div>
    </header>

    <main class="auth-page">
        <div class="auth-card">
            <div class="auth-tabs">
                <button class="tab-btn active">Вход</button>
                <button class="tab-btn" onclick="window.location.href='registration.html'">Регистрация</button>
            </div>

            <div class="auth-content active" id="login">
                <h2>Добро пожаловать!</h2>
                <p>Если забыли пароль, его можно восстановить через почту</p>
                
                <!-- Иллюстрация палатки -->
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

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__info">
                    <h3>Активный Горизонт</h3>
                    <p>Спортивный туризм, экспедиции,<br>велопоходы, альпинизм</p>
                    <p><strong>Телефон:</strong> 8 (965) 999-11-22</p>
                    <p><strong>Email:</strong> active@horizon.ru</p>
                    <div class="footer__social">
                        <h4>Мы в соцсетях</h4>
                        <div class="footer__social-links">
                            <a href="#" title="VK">VK</a>
                            <a href="#" title="Telegram">TG</a>
                            <a href="#" title="YouTube">YT</a>
                        </div>
                    </div>
                </div>
                
                <div class="footer__nav">
                    <h4>Навигация</h4>
                    <a href="../index.html">Главная</a>
                    <a href="catalog.html">Туры</a>
                    <a href="sale.html">Акции</a>
                    <a href="#">Блог</a>
                    <a href="login.html">Вход</a>
                </div>
                
                <div class="footer__contacts">
                    <h4>Информация</h4>
                    <a href="#">О нас</a>
                    <a href="#">Контакты</a>
                    <a href="#">Политика конфиденциальности</a>
                    <a href="#">Условия использования</a>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 Активный горизонт. Политика конфиденциальности</p>
            </div>
        </div>
    </footer>
</body>
</html>