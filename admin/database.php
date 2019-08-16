<?php
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
?>
