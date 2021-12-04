<?php 

	include "config/config.php";

	$query = mysqli_query($con, "SELECT * FROM tbl_posts WHERE kategori='berita' ORDER BY date DESC");

 ?>

<?php foreach($query as $data): ?>
	<div class="col-md-4 col-xs-12 mt-3">
		<h3 class="text-primary" style="height: 100px;"><?= $data['judul'] ?></h3>
		<img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-thumbnail">
		<div>
			<i class="ion-calendar">&nbsp; <?= $data['date'] ?> &nbsp; / &nbsp;</i>
			<i class="ion-person">&nbsp; <?= $data['author'] ?></i>
		</div>
		<p class="article-text">
			<?= substr($data['artikel'], 0, 100) ?>
		</p>
		<a href="#" class="btn btn-primary">Read More</a>
	</div>
<?php endforeach; ?>

<!-- Pagination -->
		<!-- <div class="d-flex justify-content-center">
			<nav aria-label="..." class="mt-5">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			    </li>
			    <li class="page-item active"><a class="page-link" href="#">1</a></li>
			    <li class="page-item" aria-current="page">
			      <a class="page-link" href="#">2</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
			</nav>
		</div> -->
	</div>
</div>
