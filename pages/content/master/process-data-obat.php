<?php
// Termasuk file koneksi database
include "../../core/connection.php";

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> DAPATKAN DAFTAR DATA TMU <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
$QueryGetListUser = mysqli_query($mysqli, "SELECT tb_obat.kode, tb_obat.nama, tb_obat.supplierid, tb_obat.beli, tb_obat.jual, tb_obat.stok, tb_obat.status FROM tb_obat");

// Periksa apakah query berhasil dieksekusi
if (!$QueryGetListUser) {
    $message = 'Kesalahan Terjadi Pada Proses Pengambilan Data User: ' . mysqli_error($mysqli);
    die($message);
}

?>
