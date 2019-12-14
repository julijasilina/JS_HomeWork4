<?php
session_start();
require_once '../src/db.php';
require_once '../src/dbutils.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    if (strlen($_POST['password']) < 2) {
        // echo "Password too short";
        // die("Too short!");
        header('Location: /');
    }
    if ($_POST['password'] != $_POST['password2']) {
        // echo "Password mismatch";
        ader('Location: /');
    }
    
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, hash)
                            VALUES (:username, :hash)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':hash', $hash);
    
    $stmt->execute();

    checkLogin($conn, $username, $_POST['password']);
} else {
    echo "That was not a POST, most likely GET";
}
