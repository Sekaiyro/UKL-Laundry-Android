<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <title></title>
</head>
<div><center><img src="https://media0.giphy.com/media/dM0GtJR2mQxW7LBJJN/giphy.gif?cid=790b76115491274dec2f91d95ae1a06013fb134ea351ea3e&rid=giphy.gif&ct=g"</center></div>
<body>
<center><span style="font-size:15pt;color:#000000;"><b>ADRIAN DRY CLEANING LAUNDRY</b></span></center>
<div class="row" style="margin-top:20px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 20px 20px 30px 10px;padding:30px">
    <?php 
    include "koneksi.php";
    // echo $_GET[íd];
    $qry_get_member=mysqli_query($conn,"select * from member where 
id_member = '".$_GET['id_']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    
    <center><h3>Ubah Member</h3></center>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value= 
  "<?=$dt_member['id_member']?>">
        Nama member :
  <input type="varchar" name="nama" value=   "<?=$dt_member['nama']?>" class="form-control">
        Alamat : 
  <input type="text" name="alamat" value="<?=$dt_member['alamat']?>" class="form-control">
        Gender : 
        <?php 
        $arr_gender=array('Laki-Laki'=>'Laki-laki','Perempuan'=>'Perempuan');
        ?>
        <select name="gender" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_member['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        Telp : 
<textarea name="telp" class="form-control" rows="1"><?=$dt_member['telp']?></textarea>
        
        
    </form>
    <center><a href="tampil_member.php" class="btn btn-success"><b>Confirm</b></a></center>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <div class="col-md"></div>
</body>
</html>