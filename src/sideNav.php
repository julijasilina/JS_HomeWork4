<?php
if (!isset($_SESSION['username'])) {
  return;
}
require_once '../src/db.php';

if (isset($_GET['format'])) 
{
    // echo $_GET['format'];
    require_once '../src/addTask.php';
    // var_dump($_GET);
} 
elseif (isset($_GET['format2'])) 
{
    require_once '../src/search.php';
} 
elseif (isset($_GET['format3'])) 
{
    require_once '../src/printTasks.php';
} 
else
{
  require_once '../src/printTasks.php';
}

?>

<div class="sidenav"> 


<!-- <form action="today.php" method="get">
  <ul>
    <li name="today" value="add">Today</li>
    <li>Next 7 days</li>
    <li>Complited</li>
    <li>In Progress</li>
    <li>Filters</li>
  </ul> 
</form> -->

 <form action="addTask.php" method="get">
  <a href="?format=addTask" name="addTask" value="add">Add tasks</a>
  </form> 
  <form action="search.php" method="get">
  <a href="?format2=search.php" name="search">Search</a>
</form>
  <form action="printTasks.php" method="get">
  <a href="?format3=printTasks" name="list">Task list</a>
</form>
   
</div>
 