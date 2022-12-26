<?php
require_once("helpers.php");
require_once("functions.php");
require_once("data.php");

$page_content = include_template("main.php", [
    "my_work" => $my_work,
    "task_list" => $task_list,
]);

$layout_content = include_template("layout.php");
?>