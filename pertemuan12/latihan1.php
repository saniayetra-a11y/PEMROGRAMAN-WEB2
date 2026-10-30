
<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_query($con, "UPDATE tbl_mhs SET Age = '36'
WHERE FirstName = 'sania' AND LastName = 'yetra'");

if (mysqli_affected_rows($con) > 0) {
    echo "Data mahasiswa berhasil diperbarui.";
} else {
    echo "Data mahasiswa tidak berubah atau tidak ditemukan.";
}

mysqli_close($con);
?>
