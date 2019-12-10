<?php
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tasks_Id = $_POST['delete'];
    //"DELETE FROM `todo_list` WHERE `todo_list`.`Id` = 4"
    $stmt = $conn->prepare("DELETE FROM `todo_list` WHERE `todo_list`.`Id` = (:tasksid)");
    $stmt->bindParam(':tasksid', $tasks_Id);
    $stmt->execute();
    header('Location: /');
}

