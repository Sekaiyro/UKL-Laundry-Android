<?php 
    include "koneksi.php";
    $qry_histori=mysqli_query($conn,"select *,transaksi.id_transaksi AS id_transaksi from transaksi join member on transaksi.id_member = member.id_member where transaksi.id_transaksi = '".$_GET['id']."'");
    $dt_histori=mysqli_fetch_array($qry_histori);
    if($dt_histori['status_order']=='baru'){
        $update=mysqli_query($conn,"update transaksi set status_order = 'proses' where id_transaksi = '".$_GET['id']."'") or die(mysqli_error($conn));
    } elseif($dt_histori['status_order']=='proses'){
        $update=mysqli_query($conn,"update transaksi set status_order = 'selesai' where id_transaksi = '".$_GET['id']."'") or die(mysqli_error($conn));
    } elseif($dt_histori['status_order']=='selesai'){
        $update=mysqli_query($conn,"update transaksi set status_order = 'diambil' where id_transaksi = '".$_GET['id']."'") or die(mysqli_error($conn));
    }
    if($update){
        echo "<script>alert('Sukses update transaksi');location.href='histori_pembelian.php';</script>";
    } else {
        echo "<script>alert('Gagal update transaksi');location.href='histori_pembelian.php';</script>";
    }
?>