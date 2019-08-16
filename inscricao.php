<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = strip_tags(trim($_POST['name']));
        $name = str_replace(array("\r","\n"),array(" ", " "), $name);
        $id = trim($_POST['id']);
        $class = trim($_POST['class']);


        define ( 'DB_HOSTNAME', 'YOUR-DB-HOSTNAME' );
        define ( 'DB_USERNAME', 'YOUR-DB-USER' );
        define ( 'DB_PASSWORD', 'YOUR-DB-PASS' );
        define ( 'DB_DATABASE', 'YOUR-DB-NAME' );
        define ( 'DB_CHARSET', 'utf8' );


        function DBConnect(){
            $link = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
            mysqli_set_charset($link, DB_CHARSET) or die(mysqli_error($link));
            return $link;
        }
        
            $link = DBConnect();
            $sql = "INSERT INTO tb_registered VALUES ('', '$name', '$id')";

            if ($link->query($sql)) {
                http_response_code(200);
                header("Location: ./index.php?return=success");
            } else {
                echo "ERROR!<br>";
                echo $sql;
            }

            $link = "";
    } else {
        http_response_code(403);
    }

?>
