<link rel="stylesheet" href="./css/login.css">

<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once("functions.php");
$con = connect();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_users WHERE username = '$username' AND password = '$password'";
    $user = $conn->query($sql) or die($conn->error);
    $row = $user->fetch_assoc();
    echo $total = $user->num_rows;

    if ($total > 0) {

        $_SESSION['UserLogin'] = $row['username'];
        $_USERNAME['Access'] = $row['access'];
        echo header("Location: index.php");
    } else {
        echo "No user found";
    }
}


?>


<div class="container">
    <div class="myform">

        <form action="" method="post">
            <h1>Login Page</h1>
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <div class="formImage">
        <img src="./assets/bike_1.png" alt="" width="500">
    </div>

</div>