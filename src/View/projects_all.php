<?php include_once 'snippets/header.php' ?>

<?php include_once 'snippets/navbar.php' ?>

	<div class="container p-md-0">

		<div class="row pt-5 pb-5 m-0">
			
			<div class="col-md-12 text-left">
					
				<h1 class="projects-font">Projects</h1>

				<p class="font-weight-bold">The most meaningful digital projects</p>

			</div>

		</div>

	</div>

	<div class="container p-md-0">

		<div class="row pl-3 pr-3 p-0 m-0 pb-5">

			<ul class="nav nav-tabs col-md-12" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link-projects nav-link text-dark active" id="allprojects-tab" data-toggle="tab" href="#allprojects" role="tab" aria-controls="allprojects" aria-selected="true">All</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link-projects nav-link text-dark" id="ca-projects-tab" data-toggle="tab" href="#ca-projects" role="tab" aria-controls="ca-projects" aria-selected="false">Canada</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link-projects nav-link text-dark" id="ua-projects-tab" data-toggle="tab" href="#ua-projects" role="tab" aria-controls="ua-projects" aria-selected="false">Ukraine</a>
			  </li>
			</ul>

		</div>

	</div>

	<div class="tab-content" id="myTabContent">

		 <div class="tab-pane fade show active" id="allprojects" role="tabpanel" aria-labelledby="allprojects-tab">

			<div class="container p-0">

			  <div class="row p-0 m-0 pb-5">

				<?php foreach($projects["all"] as $p) : ?>

				  <div class="card col-md-6 col-lg-4 p-2 border-0">
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

		</div>

		<div class="tab-pane fade" id="ca-projects" role="tabpanel" aria-labelledby="ca-projects-tab">

			<div class="container p-0">

			  <div class="row p-0 m-0 pb-5">

				<?php foreach($projects["ca"] as $p) : ?>

				  <div class="card col-md-6 col-lg-4 p-2 border-0">
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

		</div>

		<div class="tab-pane fade" id="ua-projects" role="tabpanel" aria-labelledby="ua-projects-tab">

			<div class="container p-0">

			  <div class="row p-0 m-0 pb-5">

				<?php foreach($projects["ua"] as $p) : ?>

				  <div class="card col-md-6 col-lg-4 p-2 border-0">
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