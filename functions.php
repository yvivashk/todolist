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
function get_time_left($data) {
    $current_time = time(); // текущее время
    $completion_time = strtotime($data); // время завершения задачи
    $result = ($completion_time - $current_time) / 3600; // количество оставшихся часов до окончания задачи
    floor($result);
    return $result;
}

?>