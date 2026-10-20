<?php
if (!isset($basePath)) {
    $basePath = '';
}
?>
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
                <a href="<?php echo $basePath; ?>index.php">Главная</a>
                <a href="<?php echo $basePath; ?>pages/catalog.php">Туры</a>
                <a href="<?php echo $basePath; ?>pages/sale.php">Акции</a>
                <a href="#">Блог</a>
                <a href="<?php echo $basePath; ?>pages/login.php">Вход</a>
            </div>
            <div class="footer__contacts">
                <h4>Информация</h4>
                <a href="#">О нас</a>
                <a href="#">Контакты</a>
                <a href="#">Политика конфиденциальности</a>
                <a href="#">Условия использования</a>
            </div>
        </div>

        <!-- ЗАДАНИЕ 4: Текущая дата и дни до Нового года -->
        <div class="footer__bottom">
            <p>&copy; <?php echo date('Y'); ?> Активный горизонт. Все права защищены.</p>

            <?php
            // Получаем текущую дату
            $today = date('d.m.Y');

            // Определяем следующий Новый год (1 января следующего года)
            $currentYear = (int)date('Y');
            $newYearTimestamp = mktime(0, 0, 0, 1, 1, $currentYear + 1);

            // Текущий timestamp
            $now = time();

            // Вычисляем разницу в секундах и переводим в дни
            $secondsToNewYear = $newYearTimestamp - $now;
            $daysToNewYear = (int)ceil($secondsToNewYear / (60 * 60 * 24));

            // Выводим результат
            echo '<p style="margin-top: 10px;">';
            echo '📅 Сегодня: <strong>' . $today . '</strong><br>';
            echo '🎄 До Нового года осталось: <strong>' . $daysToNewYear . ' дн.</strong>';
            echo '</p>';
            ?>
        </div>
    </div>
</footer>