<?php
require_once('helpers.php'); // подключаем шаблон с функциями
require_once('functions.php'); // в данном шаблоне одна функция - функция подсчета задач в каждом из проектов
require_once('data.php'); // подключаем шаблон с данными

// подключаем и получаем содержимое шаблона главной страницы
// передаём в этот шаблон нужные ему данные
$page_content = include_template('main.php', [
    'my_work' => $my_work,
    'task_list' => $task_list,
    'show_complete_tasks' => $show_complete_tasks,
]);

// подключаем наш лейаут
// передадим туда содержимое шаблона страницы, а также другие переменные
$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => $title,
]);

// выводим содержимое лейаута на экран
print($layout_content);
?>

