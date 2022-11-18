<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
    <title></title>
</head>
<body>

<center><a href="https://imgbb.com/"><img src="https://i.ibb.co/cJPk3kr/21-removebg-preview-1-1.png" alt="21-removebg-preview-1-1" border="0"></a><center>
<span style="font-size:13pt;color:#000000;"><b>TAMBAH PAKET LAUNDRY ADRIAN</b></span>
<div class="row" style="margin-top:30px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 10px 10px 10px -3px;padding:20px">
    <form action="proses_tambah_paket.php" method="post">
     <b><h3 align="center" style="color:#000000;">Tambah Paket</h3></b>
     <div class="form-actions">
     <label class="control-label visible-ie8 visible-ie9"></label>   
     <input class="form-control" type="varchar" autocomplete="on" placeholder="Nama_paket.." name="nama_paket" id="nama_paket" value=""> 
     <label class="control-label visible-ie8 visible-ie9"></label>   
     <input class="form-control" type="text" autocomplete="on" placeholder="Deskripsi.." name="deskripsi" id="deskripsi" value="">
     <label class="control-label visible-ie8 visible-ie9"></label>  
     <input class="form-control" type="varchar" autocomplete="on" placeholder="Harga.." name="harga" id="harga" value="">
     <div class="form-group text-center text-muted content-divider">
											<span class="px-2"><i class="icon-mustache" style="font-size: 50px;"></i></span>
										</div>
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
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