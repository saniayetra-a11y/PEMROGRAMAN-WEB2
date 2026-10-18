
<?php
$konek = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$hasil = mysqli_query($konek, "SELECT * FROM tbl_mhs");

while ($data = mysqli_fetch_array($hasil)) {
    echo $data["FirstName"] . " "
       . $data["LastName"] . " "
       . $data["Age"] . "<br>";
}

mysqli_close($konek);
?>
