<?php

//include koneksi database
include('../config/koneksi.php');

//get data dari form
$id     = $_POST['id'];
$nisn         = $_POST['nisn'];
$nama = $_POST['nama'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama = '$nama', alamat = '$alamat' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
