<?php
session_start();
if (!isset($_SESSION['username'])) {
    return;
}
?>

<div class="week">
<form action="week.php" method="get">
        <h2>Next 7 days</h2>
        <input name="week" placeholder="showweek">
        <input type="time" name="timeSpent" id="" min="1" max="10000">
            <br>   
            <button type="submit">Add New Task</button>
            <button type="submit">Done</button>
            <button type="submit">In Progress</button>
            <button type="submit">Delete</button>
            <br>
    </form>
</div>

 
