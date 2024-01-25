<?php
include("koneksi.php");

if (isset($_POST['deletedata'])) {

    $id = $_POST['delete_id'];

    
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: dasboard.php?hapus=sukses');
    } else
        die('Location: dashboard.php?hapus=gagal');
} else
    die("akses dilarang...");
