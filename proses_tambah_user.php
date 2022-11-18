<?php
if($_POST){
    $nama_user=$_POST['nama_user'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    if(empty($nama_user)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_user.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama_user, alamat, username, password, role) value ('".$nama_user."','".$alamat."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";
        }
    }
}
?>
