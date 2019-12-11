<?php
require_once '../src/templates/head.php';
?>
    <div class="register">
        <h1>Registration Form</h1>
        <form action="processRegister.php" method="post">
            <input type="text" name="username" placeholder="Choose Username" required>
            <input type="password" name="password" required placeholder="Enter Password(min 8 chars)">
            <input type="password" name="password2" required placeholder="Repeat Password">
            <button type="submit">Register</button>
        </form>
    </div>
<?php
require_once '../src/templates/foot.php';