<?php include_once 'snippets/header.php' ?>

<?php include_once 'snippets/navbar.php' ?>

	<div class="container-fluid p-0 m-0">

		<div class="card p-0 m-0 border-0 rounded-0">
			
			<div class="row no-gutters text-cover">
				
				<div class="col-md-6">
					
					<img src="/images/cover.jpg" class="card-img card-img-cover rounded-0" alt="">
				
				</div>
				
				<div class="col-md-6 pl-sm-2 pt-sm-2 pl-md-2 pt-md-2 pl-lg-4 pt-lg-4 pt-xl-4 my-auto">
					
					<div class="card-body pt-sm-2 pt-md-2 pt-lg-3 pt-xl-3">

						<div class="p-xl-5">
						
							<h1 class="card-title font-weight-bold">Hello.</h1>
								
							<h4 class="card-text text-secondary text-front font-weight-normal pt-xs-1 pt-sm-1 pt-md-1 pt-lg-2 pt-xl-2">
								I'm Artem Rumiantsev, a full-stack web developer and a web project coordinator. I work at the intersection of business, design and technology. 
							</h4>
								
							<p class="card-text pt-xs-1 pt-sm-1 pt-md-1 pt-lg-2 pt-xl-2">
								<small class="text-muted">
									<a href="/about" class="text-danger text-decoration-none p-0 m-0 font-weight-normal">
										Read More <i class="fas fa-arrow-right pl-2"></i>
									</a>
								</small>
							</p>

						</div>
					
					</div>
		    	
		    	</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row pt-5">

			<div class="col-sm-6 d-flex align-items-end">

	      		<h2 class="pt-4">
	      			<span class="text-dark text-decoration-none projects-font">Recent Projects</span>
	      		</h2>

			</div>

			<div class="col-sm-6">

	      		<h2 class="pt-4 float-sm-right">
	      			<a href="/projects" class="btn btn-lg btn-outline-dark text-decoration-none rounded-0 font-weight-bolder" role="button">All Projects</a>
	      		</h2>

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>


		<div class="row pt-1 pb-5">

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

<?php include_once 'snippets/footer.php' ?>