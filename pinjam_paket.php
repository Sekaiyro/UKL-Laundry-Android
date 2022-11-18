<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_detail_paket);
?>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>
<center><h2>Pilih Paket</h2></center>
<img src="https://user-images.githubusercontent.com/88439222/164865523-76e64f6a-277c-4020-9661-4804e4392323.gif"/>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-11">
        <form action="masukkankeranjang.php?id_paket=<?=$dt_paket['id_paket']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Paket :</td><td><?=$dt_paket['nama_paket']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi :</td><td><?=$dt_paket['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Pilih Paket :</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="5"><input class="btn btn-success" type="submit" value="PILIH PAKET"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>

<div class="container" style="margin-top:250px"></div>
<?php 
    include "footer.php";
?>
