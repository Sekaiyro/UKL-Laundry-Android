<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
      <div><center><img src="https://media1.giphy.com/media/gnqwOBAs5kAUJE4nMw/giphy.gif?cid=790b76113c771ef0a1be36a7b74d17df33a7d05b86aec7ca&rid=giphy.gif&ct=g"</center></div>
        <a class="navbar-brand btn-outline-info rounded-pill px-3" href="home.php">Laundry Adrian</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link btn-outline-secondary rounded-pill px-3" aria-current="page" href="paket.php">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-secondary rounded-pill px-3" aria-current="page" href="histori_pembelian.php">Histori Transaksi</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-secondary rounded-pill px-3" aria-current="page" href="about.php">About</a>
            </li>
            <?php
            if ($_SESSION['role'] != 'kasir'){
            ?>
            <li class="nav-item">
              <a class="nav-link btn-outline-secondary rounded-pill px-3" aria-current="page" href="tampil_member.php">Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-warning rounded-pill px-3" aria-current="page" href="tampil_user.php">User</a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">logout</a>
            </li>
            
            
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
          
        </a>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link btn btn-outline-success px-4" href="about.php" img src="https://media.giphy.com/avatars/default4/80h.gif">Adrian</a>
            </li>
            
    </nav>
    
  <div class="container" style="margin-top:10px">