<?php include_once 'snippets/header.php' ?>

<?php include_once 'snippets/navbar.php' ?>

<div class="container">

	<div class="row">

		<?php foreach($projects as $p) : ?>

		  <div class="card col-md-6 col-lg-4 p-3 border-0">
		    <img class="card-img-top rounded-0" src="/images/<?= $p["img_thumb"] ?>" alt="">
		    <div class="card-body">
		      <h3 class="card-title font-weight-bold"><?= $p["title"] ?></h3>
		      <p class="card-text"><?= $p["description"] ?></p>
		      <p class="card-text">
		      	<small class="text-muted">
					<a href="/projects/<?= $p["slug"] ?>" class="text-danger text-decoration-none p-0 m-0 font-weight-normal">
						Read More <i class="fas fa-arrow-right pl-2"></i>
					</a>	
		      	</small>
		      </p>
		    </div>
		  </div>

		<?php endforeach; ?>

	</div>

</div>



<!--
<pre>
<?php
	print_r( get_defined_vars() );
?>
</pre>
-->

<?php include_once 'snippets/footer.php' ?>