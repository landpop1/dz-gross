<?php

date_default_timezone_set('Asia/Atyrau');

$currentHour = (int)date('G');


if ($currentHour >= 8 && $currentHour < 20) {
    $themeClass = 'theme-light';
} else {
    $themeClass = 'theme-dark';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Активный Горизонт | Спортивный туризм</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?php echo $themeClass; ?>">
    <header class="header">
        <div class="container header__inner">
            <div class="logo">
                <img src="assets/images/logo1.jpg" alt="Активный Горизонт">
            </div>
            <nav class="nav">
                <a href="index.php">Главная</a>
                <a href="pages/catalog.php">Каталог</a>
                <a href="pages/sale.php">Акции</a>
                <a href="pages/login.php">Вход</a>
                <a href="pages/registration.php">Регистрация</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Спортивный Туризм</h1>
                <p>Откройте для себя мир спортивных путешествий!</p>
                <a href="pages/catalog.php" class="btn-transparent-dark">Подробнее о туре →</a>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <h2>О НАС</h2>
                <div class="about__wrapper">
                    <div class="about__text">
                        <p>Мы — команда «Активный горизонт», и мы уверены: путешествие может быть не только красивым, но и активным, динамичным, челлендж-ориентированным. Мы создали этот проект для тех, кто не представляет отдыха без движения, драйва и спортивного азарта.</p>
                    </div>
                    <div class="about__image">
                        <img src="assets/images/10onas.jpg" alt="Активный отдых в горах">
                    </div>
                </div>
            </div>
        </section>

        <section class="team">
            <div class="container">
                <h2>НАША КОМАНДА</h2>
                <div class="team__grid">
                    <div class="team__card">
                        <img src="assets/images/team1.jpg" alt="Макаров Артём">
                        <h3>Макаров Артём</h3>
                        <p>Главный менеджер: руководит работой курорта, координирует процессы и обеспечивает высокий уровень сервиса для гостей.</p>
                    </div>
                    <div class="team__card">
                        <img src="assets/images/team2.jpg" alt="Журавлев Дмитрий">
                        <h3>Журавлев Дмитрий</h3>
                        <p>Инструктор по горным лыжам: профессионально обучает катанию на горных лыжах, помогает новичкам сделать первые шаги, а опытным — отточить технику.</p>
                    </div>
                    <div class="team__card">
                        <img src="assets/images/team3.jpg" alt="Осипов Иван">
                        <h3>Осипов Иван</h3>
                        <p>Инструктор по горнолыжному курорту: знакомит гостей с инфраструктурой, трассами и возможностями курорта.</p>
                    </div>
                    <div class="team__card">
                        <img src="assets/images/team4.jpg" alt="Морозова Надежда">
                        <h3>Морозова Надежда</h3>
                        <p>Велоинструктор отвечает за организацию велопрогулок, обучает езде и помогает подобрать маршруты по пересеченной местности.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="world-tours">
            <div class="container">
                <h2>МИР</h2>
                <div class="world__grid">
                    <div class="world__card">
                        <img src="assets/images/11card.jpg" alt="Велотур">
                        <h3>Велотур «Графитовый маршрут»</h3>
                        <p>Горный велотур по живописным перевалам. Группа до 8 человек, поддержка гида, аренда велосипедов включена.</p>
                        <a href="pages/catalog.php" class="btn-transparent-dark">Подробнее о туре →</a>
                    </div>
                    <div class="world__card">
                        <img src="assets/images/12card.jpg" alt="Альпинизм">
                        <h3>Альпинизм «Графитовый маршрут»</h3>
                        <p>Восхождение на скальные пики с элементами скалолазания. Сопровождение сертифицированного гида, аренда снаряжения включена.</p>
                        <a href="pages/catalog.php" class="btn-transparent-dark">Подробнее о туре →</a>
                    </div>
                    <div class="world__card">
                        <img src="assets/images/13card.jpg" alt="Походы">
                        <h3>Походы «Графитовый маршрут»</h3>
                        <p>Треккинг по горным тропам с ночёвками у озёр. Группа до 8 человек, гид-проводник, аренда палаток и спальников включена.</p>
                        <a href="pages/catalog.php" class="btn-transparent-dark">Подробнее о туре →</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sale-hero">
            <div class="container">
                <div class="sale-hero__wrapper">
                    <div class="sale-hero__image">
                        <img src="assets/images/14akcia.jpg" alt="Горы">
                    </div>
                    <div class="sale-hero__content">
                        <p class="sale-hero__subtitle">ПУТЕШЕСТВИЯ, О КОТОРЫХ ВЫ МЕЧТАЛИ</p>
                        <h1 class="sale-hero__title">НОВЫЕ ВЕРШИНЫ<br>В КАЖДОМ ПОХОДЕ!</h1>
                        <p class="sale-hero__description">
                            Спортивный туризм с активным горизонтом — это профессиональные инструкторы,
                            безопасные маршруты и незабываемые впечатления. Доверьтесь экспертам,
                            и каждое приключение станет настоящим испытанием ваших возможностей!
                        </p>
                        <a href="pages/catalog.php" class="sale-hero__btn">ВЫБРАТЬ МАРШРУТ →</a>
                        <div class="sale-hero__reviews">
                            <div class="sale-hero__avatars">
                                <img src="assets/images/avatar1.jpg" alt="Отзыв">
                                <img src="assets/images/avatar2.jpg" alt="Отзыв">
                                <img src="assets/images/avatar3.jpg" alt="Отзыв">
                                <img src="assets/images/avatar4.jpg" alt="Отзыв">
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

    <footer class="footer">
        <div class="container footer__inner">
            <div class="footer__info">
                <h3>Активный Горизонт</h3>
                <p>Спортивный туризм, экспедиции, велопоходы, альпинизм<br>8 (965) 999-11-22<br>active@horizon.ru</p>
            </div>
            <div class="footer__nav">
                <h4>Навигация</h4>
                <a href="index.php">Главная</a>
                <a href="pages/catalog.php">Туры</a>
                <a href="pages/sale.php">Акции</a>
                <a href="#">Блог</a>
            </div>
            <div class="footer__copy">© 2026 Активный горизонт<br>Все права защищены</div>
        </div>
    </footer>
</body>
</html>