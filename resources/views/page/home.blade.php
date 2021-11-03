@extends('layouts.main')

@section('container')
<section id="home">
	
	<div class="container-fluid">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/home/home-slide-1.jpg" class="d-block w-100" alt="Home Slide 1">
				</div>
				<div class="carousel-item">
					<img src="img/home/diplomacy-festival.jpg" class="d-block w-100" alt="Diplomacy Festival">
				</div>
				<div class="carousel-item">
					<img src="img/home/korean-day.jpg" class="d-block w-100" alt="Korean Day">
				</div>
			</div>
		
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon me-5" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" 	data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon ms-5" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	
	<div class="container d-flex justify-content-evenly">
		<div class="row row-cols-4 mt-3">
			<div class="col-lg">
				<a href="http://ejournal.upnjatim.ac.id/" target="blank">
					<img src="img/home/e-journal.jpg" alt="e-journal" class="img-fluid border border-5">
				</a>
			</div>
			<div class="col-lg">
				<a href="http://pustaka.upnjatim.ac.id/" target="blank">
					<img src="img/home/DIGILIB.jpg" alt="DIGILIB" class="img-fluid border border-5">
				</a>
			</div>
			<div class="col-lg">
				<a href="http://ilmu.upnjatim.ac.id/" target="blank">
					<img src="img/home/E-LEARNING.jpg" alt="E-LEARNING" class="img-fluid border border-5">
				</a>
			</div>
			<div class="col-lg">
				<a href="http://eprints.upnjatim.ac.id/" target="blank">
					<img src="img/home/e-prints.jpg" alt="e-prints" class="img-fluid border border-5">
				</a>
			</div>
		</div>
	</div>
	
	<div class="container d-flex justify-content-evenly">
		<div class="row row-cols-4 mt-3">
			<div class="col-lg">
				<a href="http://siamik.upnjatim.ac.id/" target="blank">
					<img src="img/home/siamik.jpg" alt="siamik" class="img-fluid border border-5">
				</a>
			</div>
			<div class="col-lg">
				<a href="http://simaba.upnjatim.ac.id/index.html" target="blank">
					<img src="img/home/simaba.jpg" alt="simaba" class="img-fluid border border-5">
				</a>
			</div>
			<div class="col-lg">
				<a href="http://alumni.upnjatim.ac.id/" target="blank">
					<img src="img/home/SIANI.jpg" alt="SIANI" class="img-fluid border border-5">
				</a>
			</div>
			<div class="col-lg">
				<a href="http://siortu.upnjatim.ac.id/" target="blank">
					<img src="img/home/SIORTU.jpg" alt="SIORTU" class="img-fluid border border-5">
				</a>
			</div>
		</div>
	</div>
	


	<div class="row align-items-md-stretch mt-4 m-1">
		<div class="col-md">
			<div class="h-100 px-4 py-2 bg-light border rounded-3">
				<h2>Our Certificate</h2>
				<img src="img/full.png" alt="Full" width="1200" height="82" class="img-fluid">
			</div>
		</div>
	</div>


</section>
@endsection

