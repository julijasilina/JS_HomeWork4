<?php
if (isset($_SESSION['username'])) {
    // echo "You are logged in " . $_SESSION['username'];
    echo "<div class='modal-header'>";
         echo "<form class='logout-b' action='processLogout.php' method='post'>";
                echo "<button class='btn btn-secondary' >Logout</button>";
         echo "</form>";
    echo "</div>";
} 
else {
    echo "<div class='main-login-f'>";
    echo "<form class='login-f' action='processLogin.php' method='post'>";
    echo "<span class='logo'>J<span class='green'>S</span> t<span class='green'>o</span> d<span class='green'>o</span> l<span class='green'>i</span>s<span class='green'>t</span></span>" ;
    echo "<div class='sign-in'>Sign in </div>" ;
    echo "<div> to see your tasks </div>" ;
    // echo "<label for='exampleInputEmail1'>Email address</label>";
    echo "<br><input name='username' type='email' class='form-control' placeholder='Enter username' required></br>";
    echo "<br><input name='password' type='password' class='form-control' placeholder='Enter password' required></br>";
    echo "<br><button class='btn btn-secondary'>Sign in</button></br>";
    echo "</form>";
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 'shortpassword':
                echo "<p>Password too short</p>";
                break;
            default:
                echo "<p>Your registration failed because: " . $_GET['error'] . "</p>";
                break;
        }
    }
    echo "<div class='register-p'>or <a href='register.php'>create account</a></div>";
    // echo "<div class='register-p'>Create account <a href='register.php'><button type='button' class='btn btn-secondary'> Next </button></a></div>";
    echo "</div>";
    return;

}
// echo "<hr>";