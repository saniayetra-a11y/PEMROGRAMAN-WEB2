
<?php
$konek = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$hasil = mysqli_query($konek, "SELECT * FROM tbl_mhs");

$hit = mysqli_num_rows($hasil);

echo "Jumlah record: " . $hit;

mysqli_close($konek);
?>
