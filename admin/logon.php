<?php
    include('./database.php');

    if (!empty($_POST) AND (empty($_POST['user']) OR empty($_POST['password']))){
	// verify if the user sent an user or password in the login form
        header('location: ./login.html'); exit;
    }

    $link = DBConnect(); // make a database connection

    $user = mysqli_real_escape_string($link, $_POST['user']);	// Security check with the sent user data
    $password = mysqli_real_escape_string($link, $_POST['password']);	// Security check with the sent pass data

    $sql = "select * from tb_users where u_email='$user' and u_password= sha1('$password') and u_active = 1 limit 1"; 
    $qr = mysqli_query($link,$sql);// check if is possible pick the user from database

    if (mysqli_num_rows($qr) != 1) {
	// if the system didn't get any user, redirect the user to login page again
        header('location: ./login.html'); exit;
    } else {
        $rs = mysqli_fetch_assoc($qr);
        
        if(!isset($_SESSION)) session_start();
	// make a session with the data taken from database (username and user email)

        $_SESSION['userID'] = $rs['u_id'];
        $_SESSION['userEmail'] = $rs['u_email'];
        $_SESSION['userName'] = $rs['u_name'];

        header('location: ./');
    }

    $link = null;
?>
