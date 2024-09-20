<?php
include "koneksi.php";
$id=$_POST['id'];
$username=$_POST['username'];
$nama=$_POST['nama'];
$password=$_POST['password'];
$level=$_POST['level'];
$query=mysqli_query($koneksi,"UPDATE user SET username='$username', nama='$nama', password='$password',level='$level' WHERE id='$id'");
header('location:?page=user/index');

?>