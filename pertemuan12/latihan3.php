
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lat_dbase";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$connection) {
    die("Tidak dapat terhubung dengan database");
} else {
    echo "Dapat terhubung dengan database<br>";
}

$pilih_db = mysqli_select_db($connection, $dbname);

if (!$pilih_db) {
    die("Tidak dapat memilih database");
} else {
    echo "Dapat memilih database";
}

mysqli_close($connection);
?>
