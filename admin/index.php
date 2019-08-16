<?php
    include("verification.php");
    include("database.php");
    if(isset($_GET['m'])){
        $m = $_GET['m'];
    } else {
        $m = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard |-| Random Picker PHP</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://www.tamec.com.br/lib/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="menu">
        <ul class="ml-5">
            <li><a class="btn" href="./">Home</a></li>
            <li><a class="btn" href="./index.php?m=subscribed">Subscribers List</a></li>
            <li><a class="btn" href="./index.php?m=lottery">Pick a Winner</a></li>
            <li><a class="btn" href="./index.php?m=reset">Reset Lottery</a></li>
            <li><a class="btn" href="./logout.php">LogOut</a></li>
        </ul>
    </nav>
    <hr>
    <?php 
        switch($m){
            default:
                echo "<p>Welcome, choose a menu option to start</p>";
            break;
            case 'subscribed':
                include("subscribed.php");
            break;
            case 'students':
                include("students.php");
            break;
            case 'lottery':
                include("lottery.php");
            break;
            case 'reset':
                echo "Are you sure of this ?  THIS ACTION CANT BE UNDONE! <a href='./reset.php'>Continue</a>";
            break;
        }
    ?>
</body>
</html>
