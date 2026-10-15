<?php

date_default_timezone_set('Asia/Atyrau');
$currentHour = (int)date('G');

if ($currentHour >= 7 && $currentHour < 20) {
    $themeClass = 'theme-light';
} else {
    $themeClass = 'theme-dark';
}


if (!isset($basePath)) {
    $basePath = '';
}
?>