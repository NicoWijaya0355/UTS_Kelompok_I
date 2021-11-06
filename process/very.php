<?php
    include('../db.php');

    $vkey=$_GET['vkey'];
    $ambildata = mysqli_query($con, "SELECT * FROM users WHERE vkey='$vkey'");
    $data= mysqli_fetch_assoc($ambildata);
   
    $queryupdate = mysqli_query($con,
    "UPDATE users SET veryfied = 1 WHERE vkey = '$vkey'")
    or die(mysqli_error($con));

    if($queryupdate){
        echo
        '<script>
        alert("Verified Success"); window.location = "../page/loginPage.php"
        </script>';
            
        }else{
        echo
            '<script>
            alert("Verified Failed");
            </script>';
        }
    

?>