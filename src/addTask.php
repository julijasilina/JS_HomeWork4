<?php
if (!isset($_SESSION['username'])) {
    return;
}
?>

<div class="main-task-cont">
<form action="processAddTask.php" method="post">
    <h1 class="h1">Add task</h1>
    <input name="tasks" class='form-control' placeholder="add task" required>
    <input type="date" class='form-control' name="tasks_ends">
    <button type="submit" class="btn btn-outline-secondary">Add New Task</button>
    <hr>
</div>





<!-- 


    <div class="others">
        <h3>Given to others</h3>
            <br>
            <button type="submit">Add New Task</button>
            <button type="submit">Done</button>
            <button type="submit">In Progress</button>
            <button type="submit">Delete</button>
            <br>
            <input name="task" placeholder="add task">
            <input type="time" name="timeSpent" id="" min="1" max="10000">
            <input type="text" name="responsible" id=""  placeholder="responsible">
    </div>   

    <div class="calendar">
         <h4>Calendar</h4>
            <br>
            <button type="submit">Add New Task</button>
            <button type="submit">Done</button>
            <button type="submit">In Progress</button>
            <button type="submit">Delete</button>
            <br>
            <input name="task" placeholder="add task">
            <input type="time" name="timeSpent" id="" min="1" max="10000">
            <input type="text" name="responsible" id=""  placeholder="responsible">
    </div>

    <div class="notes">
         <h4>Notes</h4>
            <br>
            <button type="submit">Add New</button>
            <button type="submit">Delete</button>
            <br>
            <input type="text" name="responsible" id="">
    </div> -->


<!-- <div class="sidenav">
  <a href="#">Complited</a>
  <a href="#">In Progress</a>
  <a href="#">Filters</a>
  <a href="#">Birthdays</a>
</div>
  -->
</form>
</div>

