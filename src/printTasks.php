<?php
require_once 'db.php';

$stmt = $conn->prepare("SELECT * FROM todo_list");
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$allRows = $stmt->fetchAll();

$columnsPrinted = false; 
// var_dump($allRows);
foreach ($allRows as $row) {
    if (!$columnsPrinted) {
        echo "<div class='row-column-names'>";
        foreach ($row as $key => $value) {
            echo "<span class='column-name'> $key </span>";
        }
        $columnsPrinted = true;
    }
        echo "</div>";

        echo "<div class='row-tasks'>";
        echo "<form action='updateTask.php' method='post'>";
        // echo "<div class='update-tasks'>";
        echo "<span>Tasks: " . $row["tasks"] . "</span>";
    echo "</div>";
    
        foreach ($row as $key => $value) {
    
            switch ($key) {
                case 'tasks':
                case 'tasks_ends':
                case 'Is_finished':
                    echo "<input class='input-value-cell value-$key' name='$key' value='$value'></input>";
                    break;
                default:
                    echo "<span class='value-cell'>$value </span>";
                    break;
            }
        }
        echo "<button name='update' value='" . $row['Id'] . "'>Update</button>";
        echo "<form action='deleteTask.php' method='post'>";
        echo "<button name='delete' value='" . $row['Id'] . "'>Delete</button>";
        echo "</form>"; 
    }
    
    
    // echo "</div>";
    echo "</form>";
    // echo "<form action='deleteTasks.php' method='post'>";
    // echo "<button name='delete' value='" . $row['id'] . "'>Delete</button>";
//     echo "</form>";
//     echo "</div>";

// echo "</div>";
// echo "<hr>";
