<?php if (isset($_SESSION['id_u'])) { ?>
<div class="container mt-4">
	<div class="row d-flex justify-content-center">
		<div class="col-auto">
			<div class="card text-white bg-success mb-3">
  				<div class="card-header">
  					<h3 class="text-center">Bienvenue <?= $_SESSION['pseudo']; ?> !</h3>
  				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="container mt-4">
	<div class="row d-flex justify-content-center">
		<div class="col-auto">
			<div class="card text-white bg-primary mb-3">
  				<div class="card-header">
  					<h3 class="text-center">Bienvenue sur SuperCar !</h3>
  				</div>
			</div>
		</div>
	</div>
</div>

<div class="container mt-4">
	<div class="row d-flex justify-content-center">
		<div class="col-auto">
			<div class="card text-white bg-light mb-3">
  				<div class="card-header">
  					<h3 class="text-center text-dark">PREVIEW</h3>
  				</div>
  				<div class="card-body">
  					<a class="btn" href="https://www.motorlegend.com/actualite-automobile/lamborghini-countach-l-adn-du-design-lamborghini/23002.html" target="_blank">
                        Lamborghini Countach : l'ADN du design Lamborghini
  					</a>
  				</div>
  				<div class="card-footer">
  					<span class="badge bg-dark">Supercar</span>
  					<span class="badge bg-danger">HyperCar</span>
  					<span class="badge bg-primary">SupraCar</span>
  				</div>
			</div>
		</div>
		<div class="col-auto">
			<div class="card text-white bg-light mb-3">
  				<div class="card-header">
  					<h3 class="text-center text-dark">PREVIEW</h3>
  				</div>
  				<div class="card-body">
  					<a class="btn" href="https://www.motorlegend.com/actualite-automobile/ssc-presente-les-tuatara-striker-et-agressor/22999.html" target="_blank">
                        SSC présente les Tuatara Striker et Agressor
  					</a>
  				</div>
  				<div class="card-footer">
  					<span class="badge bg-dark">Supercar</span>
  					<span class="badge bg-primary">HyperCar</span>
  					<span class="badge bg-success">SupraCar</span>
  					<span class="badge bg-primary">SimpleCar</span>
  				</div>
			</div>
		</div>
	</div>
</div>
