<?php 

	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_kebijakan");
	$data = mysqli_fetch_array($sql);

 ?>
<h4>Kebijakan Daerah</h4>
<embed type="application/pdf" src="assets/file/pdf/kebijakan/<?= $data['pdf'] ?>" style="width: 100%; height: 100vh;"></embed>