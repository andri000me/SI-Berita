<?php 

	include "config/config.php";

	$id = $_GET['id'];

	$query = mysqli_query($con, "SELECT * FROM tbl_posts WHERE id_post='$id'");
	$data = mysqli_fetch_array($query);
	
 ?>

 <div class="col-lg-10 col-xs-12">
	<h3><?= $data['judul'] ?></h3>
	<p class="mt-3 text-muted" style="font-size: 12px;"><i class="ion-calendar"></i>&nbsp;<?= $data['date'] ?>&nbsp;&nbsp;<a href="#" class="text-muted" style="text-transform: uppercase;text-decoration: none;"><?= $data['kategori'] ?></a></p>	
	<img src="assets/file/post/<?= $data['img'] ?>" class="img-fluid">		
	<p class="mt-4 text-justify"><?= $data['artikel'] ?></p>
 </div>
 <div class="col-lg-2"></div>
