<?php

/**
 * Функция подсчёта задач в каждом из проектов
 * @param $list // в этот параметр передаём двумерный массив $task_list
 * @param $name // в этот параметр передаём элемент из массива $my_work
 * @return int // возвращаем количество задач
 */
function counter_task($list, $name) {
    $count = 0;
    foreach ($list as $key => $value) {
        if ($value['category'] === $name) {
            $count += 1;
        }
    }
    return $count;
}

/**
 * Функция подсчета оставшегося времени
 * @param $data_completion // в этот параметр передаём дату завершения задачи
 */
function remaining_time_counter($data_completion) {
    $current_time = time();
}

?>