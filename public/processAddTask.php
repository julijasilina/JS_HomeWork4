<?php
session_start();
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tasks = $_POST['tasks'];
    $tasks_ends = $_POST['tasks_ends']; 
    $Is_finished = $_POST['Is_finished'];
    $users_id = $_SESSION['id'];


    $stmt = $conn->prepare("INSERT INTO todo_list (tasks, tasks_ends, Is_finished, users_id)
                            VALUES (:tasks, :tasks_ends, :Is_finished, :users_id)");
    $stmt->bindParam(':tasks', $tasks);
    $stmt->bindParam(':tasks_ends', $tasks_ends);
    $stmt->bindParam(':Is_finished', $Is_finished);
    $stmt->bindParam(':users_id', $users_id);

    $stmt->execute();
    header('Location: /');

} else {
    echo "That was not a POST, most likely GET";
}
var_dump($_POST);

// $tasks = $_POST['tasks'];