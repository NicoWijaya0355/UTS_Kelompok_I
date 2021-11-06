<?php
    include('../db.php');

    $id = $_POST['id'];
    $ambildata = mysqli_query($con, "SELECT * FROM penduduk WHERE id='$id'");
    $data= mysqli_fetch_assoc($ambildata);
    
    $name = $_POST['nama'];
    $RT = $_POST['RT'];
    $RW= $_POST['RW'];
    $jenis = $_POST['jenis'];
    $umur=$_POST['umur'];
    $queryupdate = mysqli_query($con,
    "UPDATE penduduk SET nama = '$name', RT = '$RT', RW = '$RW', jenis = '$jenis', umur = '$umur'
    WHERE id = '$id'")
    or die(mysqli_error($con));
        
    if($queryupdate){
    echo
        '<script>
        alert("Edit Data Success"); window.location = "../page/dataPendudukPage.php"
        </script>';
    }else{
    echo
        '<script>
        alert("Edit Data Failed");
        </script>';
    }
?>