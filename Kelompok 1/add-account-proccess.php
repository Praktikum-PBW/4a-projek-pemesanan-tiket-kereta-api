<?php
include 'koneksi.php';
if(isset($_POST['add'])){
    $alamat_email = $_POST['alamat_email'];
    $id_pengguna = $_POST['id_pengguna'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
}
?>