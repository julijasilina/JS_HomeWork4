<?php
// session_start();
if (!isset($_SESSION['username'])) {
    return;
}
require_once '../src/db.php';

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_REQUEST['search'])){

$search = mysql_real_escape_string($_REQUEST['search']);
$stmt = $conn->prepare("SELECT * FROM todo_list
WHERE tasks LIKE '%$search%'");
$stmt->bindParam(':users_id', $_SESSION['id']); 
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$allRows = $stmt->fetchAll();
var_dump($_search);
}

// SELECT * FROM `todo_list` WHERE `tasks` LIKE 'eat'

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo "We got a GET request!<br>";
//     foreach ($_GET as $key => $value) {
//         echo "<div class='info-text'>We received name $key with value $value </div>";
//     }
//     if (isset($_GET['myname'])) {
//         echo "Why hello there " . $_GET['myname'] . "! <hr>";
//     }
// }
require_once '../src/templates/foot.php'; 

?>

<div class="search">
<form action='search.php' method='get'>
    <input type='search' name='search' class='form-control' placeholder='Search...'>
    <button class='btn btn-outline-secondary'>Search</button>
</form>

</div>

 
