<?php
session_start();

// require_once '../config/config.php';

require_once '../src/templates/head.php';

require_once '../src/login.php';
// require_once '../src/sideNav.php';

// require_once '../src/today.php';
// if (!isset($_GET['format'])) {
//     require_once '../src/addWeek.php';
// }



require_once '../src/addTask.php';

require_once '../src/printTasks.php';

require_once '../src/db.php';


require_once '../src/templates/foot.php';
