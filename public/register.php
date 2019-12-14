<?php
require_once '../src/templates/head.php';
?>
    <div class="register">
        
        <div class="main-login-f login-f sign-in">
        <span class="h1">Registration Form</span>
        <form action="processRegister.php" method="post">
        <br>    
        <input type="text" name="username" class='form-control' placeholder="Choose Username" required>
        <br>
         <input type="password" name="password" class='form-control' required placeholder="Enter Password(min 8 chars)">
        <br>
        <input type="password" name="password2" class='form-control' required placeholder="Repeat Password">
        <button type="submit" class="btn btn-secondary">Register</button>
        </form>
        </div>
    </div>
<?php


require_once '../src/templates/foot.php';

