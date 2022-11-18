<?php 
    include "header.php";
?>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>
<center><h2>Daftar User Laundry Adrian</h2><center>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_user=mysqli_query($conn,"select * from user");
    while($dt_user=mysqli_fetch_array($qry_user)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title"><?=$dt_user['nama_user']?></h5>
                <p class="card-text"><?=substr($dt_user['alamat'], 0,100)?></p>
                <p class="card-text"><?=substr($dt_user['username'], 0,100)?></p>
                <p class="card-text"><?=substr($dt_user['role'], 0,20)?></p>
                <a href="ubah_user.php?id_=<?=$dt_user['id_user']?>" class="btn btn-success">Ubah</a> | <a href="hapus_user.php?id_user=<?=$dt_user['id_user']?>" class="btn btn-warning">Hapus</a>
                
              </div>
              
            </div>
            
        </div>
        
        <?php
    }
    ?>
    
</div>
<a href="tambah_user.php" class="btn btn-success"><b>tambah User</b></a>
<?php 
    include "footer.php";
?>