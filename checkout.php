<?php 
    session_start();
    if($_POST){
        include "koneksi.php";
        $_SESSION['id_member']=$_POST['member']
        ;
    }
    print_r($_SESSION['id_member']);
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $lama_laundry=5; //satuan hari
        $tgl_harus_kembali=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_laundry),date('Y')));
        mysqli_query($conn,"insert into transaksi (id_member,id_user,tgl_transaksi,batas_waktu,status_bayar) 
        value('".$_SESSION['id_member']."','".$_SESSION['id_user']."','".date('Y-m-d')."','".$tgl_harus_kembali."','belum_lunas')");
         $id=mysqli_insert_id($conn);
 
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_paket,qty) 
            value('".$id."','".$val_produk['id_paket']."','".$val_produk['qty']."')");
        }
 
 
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil meminjam paket");location.href="histori_pembelian.php"</script>';
    }
?>
