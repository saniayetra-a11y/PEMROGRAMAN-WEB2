
<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$kueri = mysqli_query($con,
    "DELETE FROM tbl_mhs WHERE LastName = 'Bakar'");

if ($kueri && mysqli_affected_rows($con) > 0) {
    echo "Data berhasil dihapus";
} else {
    echo "Data gagal dihapus atau tidak ditemukan";
}

mysqli_close($con);
?>
