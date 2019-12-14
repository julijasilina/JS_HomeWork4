<?php
session_start();
require_once '../src/dbutils.php';
$conn = getConn($SERVER, $DB, USER, PW);

// require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    checkLogin($conn, $username, $password);
}