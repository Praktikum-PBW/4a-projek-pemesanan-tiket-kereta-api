<?php
if(isset($_GET['id'])){
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM account WHERE id='$id'");
    if($query){
        $message = "Data Berhasil Dihapus";
        $message = urlencode($message);
        header("Location:index.php?message={$message}");
    }else{
        $message = "Data Gagal Dihapus";
        $message = urlencode($message);
        header("Location:add-account.php?message={$message}");
    }
}
?>