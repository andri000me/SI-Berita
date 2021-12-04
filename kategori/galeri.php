<?php 

	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_gallery");

 ?>
	<div class="row text-center">
	<?php foreach($sql as $data): ?>
		<div class="col-md-4 col-xs-12 mt-3">
			<img src="assets/img/<?= $data['nama'] ?>" alt="" class="img-thumbnail">
		</div>
	<?php endforeach; ?>
	</div>