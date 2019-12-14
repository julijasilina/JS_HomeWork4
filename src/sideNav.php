<?php
if (!isset($_SESSION['username'])) {
  return;
}
require_once '../src/db.php';
if (!isset($_GET['format'])) 
{
    // echo $_GET['format'];
    require_once '../src/printTasks.php';
    // var_dump($_GET);
} 
// elseif (isset($_GET['week'])) 
// {
//     require_once '../src/week.php';
// } 
else
{
  require_once '../src/addTask.php';
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
  <!-- <a href="?format2=week" name="week" value="add">Next 7 days</a> -->
  </form> 
  <form action="week.php" method="get">
  <a href="?format=week" name="task" value="add">Week</a>
</form>
  <!-- <a href="#">In Progress</a>
  <a href="#">Filters</a>
  <a href="#">Birthdays</a> -->
   
</div>
 