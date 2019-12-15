<?php
session_start();
require_once '../src/db.php';
require_once '../src/dbutils.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    if (strlen($_POST['password']) < 2) {
        header('Location: /?error=shortpassword');
        exit();

    }
    if ($_POST['password'] != $_POST['password2']) {

        header('Location: /?error=mismatch');
        exit();
    }
    
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, hash)
                            VALUES (:username, :hash)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':hash', $hash);
    try {
        $stmt->execute();
    } catch (PDOException $error) {
        if ($error->errorInfo[1] == 1062) { /
            header('Location: /?error=userexists');
            exit();
        } else {
            throw $error; 
        }
    }
    

    checkLogin($conn, $username, $_POST['password']);
}

