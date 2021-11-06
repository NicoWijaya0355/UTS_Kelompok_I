<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

    // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['nama'];
        $RT = $_POST['RT'];
        $RW= $_POST['RW'];
        $jenis = $_POST['jenis'];
        $umur=$_POST['umur'];
        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,

        "INSERT INTO penduduk(nama, RT, RW, jenis, umur)
        VALUES

        ('$name', '$RT', '$RW', '$jenis', '$umur')")
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query){
                  echo
                  '<script>
                  alert("Create Penduduk Success"); window.location = "../page/dataPendudukPage.php"
                  </script>';
                 
                }else{
                  echo
                  '<script>
                  alert("Create Penduduk Failed");
                  </script>';
                }

    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }
    ?>
