@extends('layouts.template')
@section('title','category')
@livewire('navigation-dropdown')
	<main class="container">
		<div class="row">
			<div class="col">
				<div class="carousel slide" id="slideshow" data-ride="carousel">
					<!--Inicaciones-->
					<ol class="carousel-indicators">
						<li data-target="#slideshow" data-slide-to="0" class="active"></li>
						<li data-target="#slideshow" data-slide-to="1"></li>
						<li data-target="#slideshow" data-slide-to="2"></li>
					</ol>
					<!--Slides-->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://media.tiffany.com/is/image/tiffanydm/BrowseGrid_EndTile_LE_Appt_Desktop_V4?$tile$&wid=2992" class="d-block w-100" width="1200" height="400" alt="">
						</div>
						<div class="carousel-item">
							<img src="https://bnsec.bluenile.com/bluenile/is/image/bluenile/092020_SHOT14_Pre_BF_Special_Engagement_Ring_and_Band_81171_79877_LD01429110_349_R?$MODRN_HP_Hero_lrg$&rgn=1980,0,0,1055&hei=400" class="d-block w-100" width="1200" height="400" alt="">
						</div>
						<div class="carousel-item">
							<img src="https://media.tiffany.com/is/image/tiffanydm/Holiday-DotCom-HP-SDR_Desktop?$tile$&wid=2992" class="d-block w-100" width="1200" height="400" alt="">
						</div>
					</div>
					<!--Controles-->
					<a href="#slideshow" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a href="#slideshow" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguente</span>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="py-4 border-bottom">
					<h1 class="text-center">Jhon's ring shop</h1>
				</div>
			</div>
		</div>

        @foreach ($categories as $category)
		<div class="row py-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">{{$category->nameCategory}}</h3>
                        <div class="row">
                            @foreach ($category->rings as $ring)
                            <div class="col-lg-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <img src="{{ asset('previewRings') }}/{{$ring->ring_preview}}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">{{$ring->ring_description}}</p>
                                        <a href="#" class="btn btn-sm btn-primary">Buy</a>
                                        <a href="{{ url('rings/' . $ring->id) }}" class="btn btn-sm btn-secondary">Details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
	</main>

	<footer class="container">
		<div class="row border-top py-5">
			<div class="col">
				<h3 class="lead">JhonCode.com</h3>
				<a href="#" class="btn btn-link">Acerca de</a>
				<a href="#" class="btn btn-link">Contacto</a>
			</div>
			<div class="col text-right">
				<!--https://informaticapc.com/patrones-de-diseno/-->
				<a href="#" class="btn btn-link">Subir en pagina</a>
			</div>
		</div>
	</footer>