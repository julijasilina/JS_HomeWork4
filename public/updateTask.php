<?php
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tasks_id = $_POST['update'];
    $tasks = $_POST['tasks'];
    $tasks_ends = $_POST['tasks_ends'];
    $Is_finished = $_POST['Is_finished'];
    // for check boxes we only get the value when checkbox is checked!
    // $isFavorite = isset($_POST['favorite']);

    $stmt = $conn->prepare("UPDATE `todo_list`
        SET `tasks` = (:tasks),
            `tasks_ends` = (:tasks_ends),
            `Is_finished` = (:Is_finished)
            -- `favorite` = (:favorite)
        WHERE `todo_list`.`id` = (:tasks_id)");

    $stmt->bindParam(':tasks_id', $tasks_id);
    $stmt->bindParam(':tasks', $tasks);
    $stmt->bindParam(':tasks_ends', $tasks_ends);
    $stmt->bindParam(':Is_finished', $Is_finished);
    // $stmt->bindParam(':favorite', $isFavorite);

    $stmt->execute();
    header('Location: /');
} else {
    echo "That was not a POST, most likely GET";
}
