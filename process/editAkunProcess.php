<?php
    include('../db.php');

    $id = $_POST['id'];
    $ambildata = mysqli_query($con, "SELECT * FROM users WHERE id='$id'");
    $data= mysqli_fetch_assoc($ambildata);
    
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $jabatan = $_POST['jabatan'];
    

    $queryupdate = mysqli_query($con,
    "UPDATE users SET username = '$username', password = '$password', name = '$name',  jabatan = '$jabatan'
    WHERE id = '$id'")
    or die(mysqli_error($con));
        
    if($queryupdate){
    echo
        '<script>
        alert("Edit Data Success"); window.location = "../page/listAkunPage.php"
        </script>';
    }else{
    echo
        '<script>
        alert("Edit Data Failed");
        </script>';
    }
?>