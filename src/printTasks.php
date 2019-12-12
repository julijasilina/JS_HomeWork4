<?php
require_once 'db.php';

if (!isset($_SESSION['username'])) {
    // echo "Please Login to see your tasks";
    echo "<div class='register-p'>Create account <a href='register.php'><button> Next </button></a>";
    return;
} else {
    echo "Welcome " . $_SESSION['username'] . "!<br>";
}

$stmt = $conn->prepare("SELECT * FROM todo_list
WHERE (users_id = :users_id)");
$stmt->bindParam(':users_id', $_SESSION['id']); 
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$allRows = $stmt->fetchAll();

$columnsPrinted = false; 
foreach ($allRows as $row) {
    //jāizdzēš, ja neies

        //  switch ($row) {
        //     case 'tasks':
        //     case 'tasks_ends':
        //     case 'Is_finished':
        //         echo "<input class='input-value-cell value-$row' name='$row' value='$value'></input>";
        //         break;
        //     default:
        //         // echo "<span class='value-cell'>$value </span>"; //lai nerādas visi row
        //         // break;
        // }
    
    
    if (!$columnsPrinted) {
        echo "<div class='row-column-names'>";
        foreach ($row as $key => $value) {
            
            if ($key == 'tasks_ends') {
            $key = "Deadline";
        }
            if ($key == 'tasks') {
            $key = "Your task";
        }
            if ($key == 'Is_finished') {
            $key = "Done";
        }

            echo "<span class='column-name'> $key </span>";
            //te b'us j'apapildina ar switch
        }
        $columnsPrinted = true;
    }
        echo "</div>";

        echo "<div class='row-tasks'>";
        echo "<form action='updateTask.php' method='post'>";
        // echo "<div class='update-tasks'>";
        // echo "<span>Tasks: " . $row["tasks"] . "</span>";
        // echo "<span> Deadline: " . $row["tasks_ends"] . "</span>";
        // echo "<span> Is finished: " . $row["Is_finished"] . "</span>";

    echo "</div>";
    
        foreach ($row as $key => $value) {
    
            switch ($key) {
                case 'tasks':
                case 'tasks_ends':
                case 'Is_finished':
                    echo "<input class='input-value-cell value-$key' name='$key' value='$value'></input>";
                    break;
                default:
                    // echo "<span class='value-cell'>$value </span>"; //lai nerādas visi row
                    break;
            }
        }
        echo "<button name='update' value='" . $row['id'] . "'>Update</button>";
        echo "</form>";
        echo "<form action='deleteTask.php' method='post'>";
        echo "<button name='delete' value='" . $row['id'] . "'>Delete</button>";
        echo "</form>"; 
        
    }
    