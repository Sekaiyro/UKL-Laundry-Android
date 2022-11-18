
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
    <title></title>
</head>
<body>

<div><center><img src="https://media0.giphy.com/media/dM0GtJR2mQxW7LBJJN/giphy.gif?cid=790b76115491274dec2f91d95ae1a06013fb134ea351ea3e&rid=giphy.gif&ct=g"</center></div>
<center><span style="font-size:15pt;color:#000000;"><b>ADRIAN DRY CLEANING LAUNDRY</b></span></center>
<div class="row" style="margin-top:30px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 20px 20px 30px 10px;padding:30px">
    <form action="proses_tambah_user.php" method="post">
    <ul class="nav nav-tabs nav-justified alpha-grey mb-0">
                <li class="nav-item"><a href="login.php" id="tab1" class="nav-link border-y-0 border-left-0 show" data-toggle="tab"><h6 class="my-1">Masuk</h6></a></li>
                <li class="nav-item"><a href="tambah_user.php" id="tab2" class="nav-link border-y-0 border-right-0 show" data-toggle="tab"><h6 class="my-1">Daftar User</h6></a></li>
                <li class="nav-item"><a href="tambah_member.php" id="tab2" class="nav-link border-y-0 border-right-0 show" data-toggle="tab"><h6 class="my-1">Daftar Member</h6></a></li>
              </ul>
              <div class="form-group text-center text-muted content-divider">
											<span class="px-1"><i class="icon-mustache" style="font-size: 10px;"></i></span>
										</div>
     <b><h3 align="center" style="color:#000000;">Tambah User</h3></b>
     <div class="form-actions">
     <input class="form-control" type="varchar" autocomplete="on" placeholder="Nama_user" name="nama_user" id="nama_user" value="">
     <label class="control-label visible-ie8 visible-ie9"></label>
        <input class="form-control" type="text" autocomplete="on" placeholder="Alamat.." name="alamat" id="alamat" value="">
     <label class="control-label visible-ie8 visible-ie9"></label>
        <input class="form-control" type="varchar" autocomplete="on" placeholder="Username" name="username" id="username" value="">
        <label class="control-label visible-ie8 visible-ie9"></label>
        <input class="form-control" type="password" autocomplete="on" placeholder="Password" name="password" id="password" value="">
        <label class="control-label visible-ie8 visible-ie9"></label>
        <select class="form-control" type="enum" autocomplete="on" placeholder="Role" name="role" id="role" value="">
            <option></option>
            <option value="admin">admin</option>
            <option value="kasir">kasir</option>
            <option value="owner">owner</option>
        </select>
        <label class="control-label visible-ie8 visible-ie9"></label>
        <span class="px-2"><i class="icon-mustache" style="font-size: 30px;"></i></span>
        
       <center><input type="submit" name="simpan" value="Tambah User" class="btn btn-success"></center>
    </div>
    </form>
        </div>
        <div class="col-md"></div>
        </div>
        <div class="form-group text-center text-muted content-divider">
											<span class="px-2"><i class="icon-mustache" style="font-size: 30px;"></i></span>
										</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</body>
<?php

    include "footer.php";
?>
</html>