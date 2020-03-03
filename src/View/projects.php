<?php include_once 'snippets/header.php' ?>

<?php include_once 'snippets/navbar.php' ?>

<div class="container">

	<div class="row d-flex justify-content-center">

		<div class="col-md-8 pt-5 pb-5">

			<h1 class="font-weight-bold text-center"><?= $content->title ?></h1>

			<p class="h5 pt-3 text-secondary text-center article-description"><?= $content->description ?></p>

		</div>

	</div>

</div>

<div class="container-fluid bg-ultra-grey">

	<div class="row d-flex justify-content-center pt-md-5">

		<div class="card col-md-8 text-white border-0 p-0 m-0 rounded-0">
			<img src="/images/<?= $content->img_cover ?>" class="card-img rounded-0" alt="">
		</div>

	</div>

</div>

<div class="p-0 m-0 article-content">
	<?= $content->text_html ?>
</div>

<!--
<pre>
<?php
	print_r( get_defined_vars() );
?>
</pre>
-->

<?php include_once 'snippets/pre-footer.php' ?>
<?php include_once 'snippets/footer.php' ?>