<?php 
    include "header.php";
?>
<h2>Daftar Paket Di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Nama Paket</th><th>Jumlah</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_paket']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
 
        <?php endforeach ?>
    </tbody>
</table>
<form action="checkout.php" method="post">
        <select name="member" class="form-control">
            <option></option>
                <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn,"select * from member");
                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_member'].'">'.$data_kelas['nama'].'</option>';    
                }
                ?>
        </select>
        <input type="submit" name="simpan" value="Confirm" class="btn btn-primary">
    </form>
    
<?php 
    include "footer.php";
?>
