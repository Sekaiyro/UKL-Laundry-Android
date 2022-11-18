<?php
if($_POST){
    $id_user=$_POST['id_user'];
    $nama_user=$_POST['nama_user'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['role'];
    if(empty($nama_user)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($role)){
        echo "<script>alert('role tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";  
        $update=mysqli_query($conn,"update user set nama_user='".$nama_user."',
             alamat='".$alamat."',role='".$role."' where id_user = '".$id_user."'")
             or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update ');location.href='ubah_user.php?id_member="
                .$id_user."';</script>";
            }
        }
        
    } 
?>
