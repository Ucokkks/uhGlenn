<?php
//Memulai session
session_start();

//Melakukan koneksi terhadap database
$link = mysqli_connect('localhost','root','');

//Memilih database yang akan digunakan
mysqli_select_db($link, "ddg_ujian" /**<-- UBAH NAMA DATABASE DISINI */);


//Mengambil input data dari form, yang dikirim berupa format POST
$username = $_POST['username'];
$password = $_POST['password'];
$action = $_POST['action']; //Bisa jadi login, register, juga logout dan hapus akun


if (isset($action)) {
    if ($action === 'login') {
        //Menjalankan kurei SQL
        $sql = mysqli_query($link, "SELECT * FROM akun /**<-- UBAH NAMA TABEL DISINI */ WHERE `nama` = '$username' AND `password` = '$password'");

        //Mengecek jumlah rows yang di dapatkan, jika sama dengan nol maka mengirimkan pesan berupa variabel msg yang nantinya akan menjadi variabel $_GET['msg']
        if ($result_total = mysqli_num_rows($sql) === 0) {
            header('Location: login.php?msg=Username%20atau%20Password%20salah!!');
            exit();
        } else {

            //Set variabel session username dan password menjadi variabel username dan password
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: index.php');
            exit();
        }
    }


   //Membuat akun 
    if ($action === 'register') {
        //Menjalankan kurei SQL
        $sql = mysqli_query($link, "INSERT INTO akun/**<-- UBAH NAMA TABEL DISINI */(`nama`,`password`) VALUES ('$username', '$password')");
        if (!$sql) {
            echo "Gagal menambahkan data ke dalam database";
        }
        header('Location: login.php');
        exit();
    }

    //Jika sudah berhasil masuk dan ingin keluar dari akun tersebut
    if ($action === 'logout') {
        session_destroy();
        header('Location: index.php');
        exit();
    }

    
}
?>
