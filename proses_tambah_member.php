<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $telp=$_POST['telp'];
    if(empty($nama)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_member.php';</script>";
 
    } elseif(empty($alamat)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, gender, telp) value ('".$nama."','".$alamat."','".$gender."','".$telp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}
?>
