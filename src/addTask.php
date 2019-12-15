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

</form>
</div>

