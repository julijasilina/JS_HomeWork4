<?php
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tasks_id = $_POST['update'];
    $tasks = $_POST['tasks'];
    $tasks_ends = $_POST['tasks_ends'];
    $Is_finished = $_POST['Is_finished'];

    $stmt = $conn->prepare("UPDATE `todo_list`
        SET `tasks` = (:tasks),
            `tasks_ends` = (:tasks_ends),
            `Is_finished` = (:Is_finished)
        WHERE `todo_list`.`id` = (:tasks_id)");

    $stmt->bindParam(':tasks_id', $tasks_id);
    $stmt->bindParam(':tasks', $tasks);
    $stmt->bindParam(':tasks_ends', $tasks_ends);
    $stmt->bindParam(':Is_finished', $Is_finished);

    $stmt->execute();
    header('Location: /');
} 
