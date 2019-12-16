<?php
if (!isset($_SESSION['username'])) {
    return;
}
?>


<form action="processAddTask.php" method="post">
<div class="main-task-cont">
    <div class="task">Add task</div>
    <input name="tasks" class='form-control' placeholder="add task" required>
    <input type="date" class='form-control' name="tasks_ends">
    <button type="submit" class="btn btn-outline-secondary">Add New Task</button>
    <hr>
</div>

</form>

