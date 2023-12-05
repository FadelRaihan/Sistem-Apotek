<?php
// Termasuk file koneksi database
include "../../core/connection.php";

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> DAPATKAN DAFTAR DATA TMU <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
$QueryGetListUser = mysqli_query($mysqli, "SELECT * FROM users");

// Periksa apakah query berhasil dieksekusi
if (isset($_POST['save'])) {

    $NAMA = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $USERNAME = mysqli_real_escape_string($mysqli, $_POST['username']);
    $JENIS_KELAMIN = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);
    $EMAIL = mysqli_real_escape_string($mysqli, $_POST['email']);
    $PASSWORD = mysqli_real_escape_string($mysqli, $_POST['password']);
    $ALAMAT = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $DOMISILI = mysqli_real_escape_string($mysqli, $_POST['domisili']);
    
    $QueryAddUser = "INSERT INTO users(users.nama, users.username, users.jenis_kelamin, users.email, users.password, users.alamat, users.domisili) VALUES ('".$NAMA."','".$USERNAME."','".$JENIS_KELAMIN."','".$EMAIL."','".$PASSWORD."','".$ALAMAT."','".$DOMISILI."')";

    $ResultQueryAddUser = mysqli_query($mysqli, $QueryAddUser);

    if ($ResultQueryAddUser) {
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        User added successfully!
      </div>';
        header("Location: masteruser");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">
            Error: ' . mysqli_error($mysqli) . '
          </div>';
    }
}


?>
