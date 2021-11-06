<?php
    $host = "sql302.epizy.com";
    $user = "epiz_30066166";
    $pass = "mMcXPRl4cY";
    $name = "epiz_30066166_dbtubes";


    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL :" .mysqli_connect_error();
    }
    ?>