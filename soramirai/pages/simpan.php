<?php
include "koneksi.php";

$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$query = "INSERT INTO tbuser VALUES ('', '', '', '', '', '', '', '', '', '$email', '$username', '$password')";
mysqli_query($db, $query);

// penulisan lokasi harus tepat sesuai halaman yang akan di buka
header("location: index.php?hal=login-user");
?>


