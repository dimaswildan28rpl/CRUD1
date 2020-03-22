<?php

include_once("koneksi.php");

$id = $_GET['id'];
$query ="DELETE FROM siswa WHERE id =$id";

$result = mysqli_query($connect = "koneksi.php",$query );

$num = mysqli_affected_rows ($connect = "keneksi.php");

?>
