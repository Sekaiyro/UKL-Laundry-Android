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
    $qry_get_user=mysqli_query($conn,"select * from user where 
id_user = '".$_GET['id_']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    
    <center><h3>Ubah User</h3></center>
    <form action="proses_ubah_user.php" method="post">
        <input type="hidden" name="id_user" value= 
  "<?=$dt_user['id_user']?>">
        Nama User :
  <input type="varchar" name="nama" value=   "<?=$dt_user['nama_user']?>" class="form-control">
  Alamat :
  <input type="text" name="alamat" value=   "<?=$dt_user['alamat']?>" class="form-control">
        Username : 
  <input type="varchar" name="username" value="<?=$dt_user['username']?>" class="form-control">
  
Role : 
        <?php 
        $arr_role=array('admin'=>'admin','kasir'=>'kasir','owner'=>'owner');
        ?>
        <select name="role" class="form-control">
            <option></option>
            <?php foreach ($arr_role as $key_role => $val_role):
                if($key_role==$dt_user['role']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_role?>" <?=$selek?>><?=$val_role?></option>
            <?php endforeach ?>
            <center><input type="submit" name="simpan" value="Tambah User" class="btn btn-success"></center>
        </select>
        
        
    </form>
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <div class="col-md"></div>
</body>
</html>
