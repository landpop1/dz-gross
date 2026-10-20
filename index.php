<?php
$basePath = '';
require_once 'assets/php/theme.php';

// функция для окраски слов
function colorWords($text) {
    $words = explode(' ', $text);
    $result = [];
    
    foreach ($words as $index => $word) {
        if ($index % 2 == 0) {
            // Нечётное по счёту слово (1-е, 3-е, 5-е...) — первый цвет
            $result[] = '<span class="word-odd">' . $word . '</span>';
        } else {
            // Чётное по счёту слово (2-е, 4-е, 6-е...) — второй цвет
            $result[] = '<span class="word-even">' . $word . '</span>';
        }
    }
    
    return implode(' ', $result);
}


// Собираем весь текстовый контент страницы для анализа
$pageText = '';

// Текст из секции "О нас"
$pageText .= 'Мы команда Активный горизонт и мы уверены путешествие может быть не только красивым но и активным динамичным челлендж-ориентированным Мы создали этот проект для тех кто не представляет отдыха без движения драйва и спортивного азарта ';

// Текст из карточек команды
$pageText .= 'Макаров Артём Главный менеджер руководит работой курорта координирует процессы и обеспечивает высокий уровень сервиса для гостей ';
$pageText .= 'Журавлев Дмитрий Инструктор по горным лыжам профессионально обучает катанию на горных лыжам помогает новичкам сделать первые шаги а опытным отточить технику ';
$pageText .= 'Осипов Иван Инструктор по горнолыжному курорту знакомит гостей с инфраструктурой трассами и возможностями курорта ';
$pageText .= 'Морозова Надежда Велоинструктор отвечает за организацию велопрогулок обучает езде и помогает подобрать маршруты по пересеченной местности ';

// Текст из карточек туров
$pageText .= 'Велотур Графитовый маршрут Горный велотур по живописным перевалам Группа до 8 человек поддержка гида аренда велосипедов включена ';
$pageText .= 'Альпинизм Графитовый маршрут Восхождение на скальные пики с элементами скалолазания Сопровождение сертифицированного гида аренда снаряжения включена ';
$pageText .= 'Походы Графитовый маршрут Треккинг по горным тропам с ночёвками у озёр Группа до 8 человек гид-проводник аренда палаток и спальников включена ';

// Текст из секции акций
$pageText .= 'Путешествия о которых вы мечтали Новые вершины в каждом походе Спортивный туризм с активным горизонтом это профессиональные инструкторы безопасные маршруты и незабываемые впечатления Доверьтесь экспертам и каждое приключение станет настоящим испытанием ваших возможностей ';

//  Подсчёт гласных букв
$vowels = 'аеёиоуыэюяАЕЁИОУЫЭЮЯ';
$vowelCount = 0;
$length = mb_strlen($pageText, 'UTF-8');
for ($i = 0; $i < $length; $i++) {
    $char = mb_substr($pageText, $i, 1, 'UTF-8');
    if (mb_strpos($vowels, $char, 0, 'UTF-8') !== false) {
        $vowelCount++;
    }
}

// Подсчёт слов
preg_match_all('/[а-яёА-ЯЁa-zA-Z\-]+/u', $pageText, $matches);
$wordCount = count($matches[0]);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Активный Горизонт | Спортивный туризм</title>
<link rel="stylesheet" href="assets/css/style.css">

// Стили для раскрашенных слов 
<style>
    .word-odd {
        color: #e76f51;
        font-weight: 600;
    }
    .word-even {
        color: #264653;
        font-weight: 600;
    }
    
    .stats-block {
        background: #f0f4f0;
        border: 2px solid #1b4d3d;
        border-radius: 16px;
        padding: 20px 30px;
        margin: 30px auto;
        max-width: 800px;
        text-align: center;
    }
    .stats-block h3 {
        color: #1b4d3d;
        margin-bottom: 10px;
    }
    .stats-block p {
        font-size: 1.1rem;
        margin: 5px 0;
    }
</style>
</head>
<body class="<?php echo $themeClass; ?>">

<?php require_once 'assets/php/header.php'; ?>

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
                <?php 
                // Применяем функцию colorWords к абзацу
                $aboutText = 'Мы — команда «Активный горизонт», и мы уверены: путешествие может быть не только красивым, но и активным, динамичным, челлендж-ориентированным. Мы создали этот проект для тех, кто не представляет отдыха без движения, драйва и спортивного азарта.';
                echo '<p>' . colorWords($aboutText) . '</p>';
                ?>
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

<section class="container">
    <div class="stats-block">
        <h3>📊 Статистика главной страницы</h3>
        <p>🔤 Количество гласных букв: <strong><?php echo $vowelCount; ?></strong></p>
        <p>📝 Количество слов: <strong><?php echo $wordCount; ?></strong></p>
    </div>
</section>

</main>

<?php require_once 'assets/php/footer.php'; ?>

</body>
</html>