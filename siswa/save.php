<?php

//include koneksi database
include('../config/koneksi.php');

//get data dari form
$nisn           = $_POST['nisn'];
$nama = $_POST['nama'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (nisn, nama, alamat) VALUES ('$nisn', '$nama', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
