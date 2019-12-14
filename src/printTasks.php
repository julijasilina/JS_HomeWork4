<?php
require_once 'db.php';

$stmt = $conn->prepare("SELECT * FROM todo_list
WHERE (users_id = :users_id)");
$stmt->bindParam(':users_id', $_SESSION['id']); 
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$allRows = $stmt->fetchAll();

echo "<div class='main-cont'>";
echo "<div class='main-task-cont'>";
// echo "<div class='input-group-text'>";
$columnsPrinted = false; 
foreach ($allRows as $row) {
    if (!$columnsPrinted) 
    {
        // echo "<div class='task-list'>";
        foreach ($row as $key => $value) 
        {    

            switch ($key) 
            {
                case 'tasks':
                    
                    echo "<span> Task </span>";
                break;
                case 'tasks_ends':
                    echo "<span> Date </span>";
                break;
                // case 'Is_finished':
                //     echo "<span class='column-name'> Done </span>";
                // break;
                default:
                    //do nothing for other columns
            }
        }
        $columnsPrinted = true;
        echo "</div>";

                    
    }
        // echo "<div class='row-tasks'>";
        echo "<form action='updateTask.php' method='post'>";
        echo "<div class='update-task'><br>";
        // echo "<div class='update-tasks'>";
        // echo "<span>Tasks: " . $row["tasks"] . "</span>";
        // echo "<span> Deadline: " . $row["tasks_ends"] . "</span>";
        // echo "<span> Is finished: " . $row["Is_finished"] . "</span>";

   
        foreach ($row as $key => $value) 
        {
            // echo "<div class='task-list'>";
            switch ($key) 
            {
                case 'tasks':
                case 'tasks_ends':
                // case 'Is_finished':
                    echo "<input value-'$key' name='$key' value='$value'></input>";
                    break;
                default:
            }
            
        }
        
        echo "<button name='update' value='" . $row['id'] . "'>Update</button>";
        // echo "</div>";
        echo "</form>";
        echo "<form action='deleteTask.php' method='post'>";
        echo "<div class='delete-task'>";
        echo "<button name='delete' value='" . $row['id'] . "'>Delete</button>";
        echo "</div>";
        echo "</form>"; 
        echo "</div>";
     
    }
    echo "</div>";
    