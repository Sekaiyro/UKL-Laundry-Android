<?php 
    if($_GET['id_transaksi']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus member');location.href='histori_pembelian.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus member');location.href='histori_pembelian.php';</script>";
        }
    }
?>