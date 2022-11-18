<?php 
    include "header.php";
?>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>
<center><h2>Daftar Harga Laundry</h2><center>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>

<center><div class="" style="margin-top:10px;"><center>
<div class="row">

    
    <?php 
    include "koneksi.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    while($dt_paket=mysqli_fetch_array($qry_paket)){
        ?>
        <div class="col-md-3 mb-2">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title"><?=$dt_paket['nama_paket']?></h5>
                <p class="card-text"><?=substr($dt_paket['deskripsi'], 0,25)?></p>
                <p class="card-text"><?=substr($dt_paket['harga'], 0,20)?></p>
                <a href="pinjam_paket.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-success">Pilih</a> | <a href="hapus_paket.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-warning">Hapus</a>             
              </div>
            </div>
        </div>
    
        <?php
    }
    ?>
</div>
<a href="tambah_paket.php" class="btn btn-success"><b>tambah Paket</b></a>
</div>

<?php

    include "footer.php";
?>

