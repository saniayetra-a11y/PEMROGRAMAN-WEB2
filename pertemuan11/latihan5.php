
<?php
$konek = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$hasil = mysqli_query($konek, "SELECT * FROM tbl_mhs");

while ($data = mysqli_fetch_row($hasil)) {
    echo "$data[0] $data[1] $data[2] $data[3]<br>";
}

mysqli_close($konek);
?>
