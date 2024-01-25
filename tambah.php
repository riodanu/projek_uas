<?php
include("koneksi.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $ipk = $_POST['ipk'];


    $sql = "INSERT INTO mahasiswa(nama, nim, jurusan, ipk)
    VALUES('$nama', '$nim', '$jurusan', '$ipk')";
    $query = mysqli_query($conn, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: dasboard.php?status=sukses');
    else
        header('Location: dasboard.php?status=gagal');
} else
    die("Akses dilarang...");