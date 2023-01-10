<?php
// тег title
$title = "Дела в порядке";

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

// Массив проектов
$my_work = ["Входящие", "Учёба", "Работа", "Домашние дела", "Авто",];

// Массив задач
$task_list = [
    [
        'task' => 'Собеседование в IT компании',
        'date_completion' => '01.12.2019',
        'category' => 'Работа',
        'status' => false,
    ],
    [
        'task' => 'Выполнить тестовое задание',
        'date_completion' => '25.12.2019',
        'category' => 'Работа',
        'status' => false,
    ],
    [
        'task' => 'Сделать задание первого раздела',
        'date_completion' => '21.12.2019',
        'category' => 'Учёба',
        'status' => true,
    ],
    [
        'task' => 'Встреча с другом',
        'date_completion' => '22.12.2019',
        'category' => 'Входящие',
        'status' => false,
    ],
    [
        'task' => 'Купить корм для кота',
        'date_completion' => null,
        'category' => 'Домашние дела',
        'status' => true,
    ],
    [
        'task' => 'Заказать пиццу',
        'date_completion' => null,
        'category' => 'Домашние дела',
        'status' => true,
    ],
    [
        'task' => '<>Купить автомобиль Toyota RAV4</>',
        'date_completion' => '15.09.2023',
        'category' => 'Авто',
        'status' => false,
    ],
];

?>