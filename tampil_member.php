<?php 
    include "header.php";
?>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>
<center><h2>Daftar Member Laundry Adrian</h2><center>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_member=mysqli_query($conn,"select * from member");
    while($dt_member=mysqli_fetch_array($qry_member)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title"><?=$dt_member['nama']?></h5>
                <p class="card-text"><?=substr($dt_member['alamat'], 0,100)?></p>
                <p class="card-text"><?=substr($dt_member['gender'], 0,20)?></p>
                <p class="card-text"><?=substr($dt_member['telp'], 0,20)?></p>
                <a href="ubah_member.php?id_=<?=$dt_member['id_member']?>" class="btn btn-success">Ubah</a> | <a href="hapus_member.php?id_member=<?=$dt_member['id_member']?>" class="btn btn-warning">Hapus</a>
                
              </div>
              
            </div>
            
        </div>
        
        <?php
    }
    ?>
    
</div>
<a href="tambah_member.php" class="btn btn-success"><b>tambah Member</b></a>
<?php 
    include "footer.php";
?>

