
<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$input = mysqli_query($con, "INSERT INTO tbl_mhs
(FirstName, LastName, Age)
VALUES ('incess', 'aura', '15')");

if ($input) {
    echo "Input data berhasil dibuat";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($con);
}

mysqli_close($con);
?>
