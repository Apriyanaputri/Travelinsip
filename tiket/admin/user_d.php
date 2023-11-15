<?php
include "koneksi.php";

$id = $_GET['id_user'];

$sql_delete_reserv = mysqli_query($conn, 'DELETE FROM reserv WHERE id_user="' . $id . '" ');

if ($sql_delete_reserv) {
    $sql_delete_user = mysqli_query($conn, 'DELETE FROM user WHERE id_user="' . $id . '" ');
    if ($sql_delete_user) {
        echo "<script>window.alert('Data berhasil dihapus');window.location.href='user.php';</script>";
    } else {
        echo "<script>window.alert('Gagal tuk Hapus: " . mysqli_error($conn) . "');window.close();</script>";
    }
} else {
    echo "<script>window.alert('Gagal tuk Hapus: " . mysqli_error($conn) . "');window.close();</script>";
}
?>

