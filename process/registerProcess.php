<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    if(isset($_POST['register'])){

    // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input

        //include library

        include('PHPMailer-master/src/Exception.php');
        include('PHPMailer-master/src/PHPMailer.php');
        include('PHPMailer-master/src/SMTP.php');
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        
        $jabatan = $_POST['jabatan'];
        $email = $_POST['email'];
        $vkey=md5(time().$username);
        
        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,

        "INSERT INTO users(username, password, name, jabatan, email,vkey,veryfied)
        VALUES

        ('$username', '$password', '$name', '$jabatan','$email','$vkey',0)")
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”


                if($query){
                    $email_pengirim= 'nicowijaya56@gmail.com';
                    $nama_pengirim= 'Nico Wijaya';
                    $email_penerima= $_POST['email'];
                    $subjek= 'Registrasi user baru';
                    $pesan= "<a href='http://kenamental.epizy.com/process/very.php?vkey=$vkey'>Register Account</a>" ;
                    
                    $mail=new PHPMailer;
                    $mail->isSMTP();

                    $mail->Host='smtp.gmail.com';
                    $mail->Username=$email_pengirim;
                    $mail->Password='vsbecewvttjzxrku';
                    $mail->Port=465;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='ssl';
                    $mail->SMTPDebug=2;
                    $mail->setFrom($email_pengirim,$nama_pengirim);
                    $mail->addAddress($email_penerima);
                    $mail->isHTML(true);
                    $mail->Subject= $subjek;
                    $mail->Body=$pesan;

                    $send=$mail->send();
                    if($send){
                        echo                 
                        '<script>                
                        alert("Register Success, Dont forget to verify you account"); window.location = "../index.php"
                        </script>';
                    }else{
                        echo                 
                        '<script>                
                        alert("Register failed ");  window.location="../page/registerPage.php"
                        </script>';
                    }
                    
                }else{
                    echo
                    '<script>
                    alert("Register Failed");
                    </script>';
                }

    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }
    ?>