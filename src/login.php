<?php
//we need to start sesssion to check if user already exists
// session_start();
if (isset($_SESSION['username'])) {
    echo "You are logged in " . $_SESSION['username'];
    // echo "<form action='processLogout.php' method='post'>";
    // echo "<button>Logout</button>";
    // echo "</form>";
    ?>
    <form action="processLogout.php" method="post">
        <button>Logout</button>
    </form>
<?php

} else {
    
    echo "<span class='logo'>JS </span>" ;
    echo "<div class='sign-in'>Sign in </div>" ;
    echo "<span class='sign-in'>to see your tasks </span>" ;
    echo "<form class='login-f' action='processLogin.php' method='post'>";
    echo "<input name='username'placeholder='Enter username' required>";
    echo "<input name='password' type='password' placeholder='Enter password' required>";
    echo "<button>Sign in</button>";
    echo "</form>";
    echo "</div>";
}
echo "<hr>";