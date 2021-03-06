@include('users.layouts.header')
<section class="p-4" id="main-slider">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('storage/' . $banner1->photo) }}" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('storage/' . $banner2->photo) }}" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('storage/' . $banner3->photo) }}" alt="First slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<section id="new_arrival">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">NEW ARRIVAL</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($latest_products as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">SAFETY PRODUCTS</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a href="{{ url('safety') }}" class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($safety_products as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">LAB PRODUCTS</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a href="{{ url('lab') }}" class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($lab_products as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">ELECTRONICS</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a href="{{ url('electronics') }}" class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($electronics as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">MECHANICAL</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a href="{{ url('mechanical') }}" class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($mechanical as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">CIVIL</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a href="{{ url('civil') }}" class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($civils as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">TEXTILE</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a href="{{ url('textile') }}" class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($textile as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section id="safety">
	<div class="section_title p-4 bg-light clearfix">
		<div class="float-left">
			<h4 class="font-weight-bold text-dark">ISLAMIC</h4>
			<p class="text-muted font-weight-light">New Arrived On SafeBD</p>
		</div>
		<div class="float-right">
			<a href="{{ url('islamic') }}" class="btn btn-outline-primary">
				<h5>SEE ALL</h5>
			</a>
		</div>
	</div>
	<div class="p-4">
		<div class="row">
			@foreach ($islamic as $product)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ url("product_details/{$product->id}") }}" class="text-dark text-decoration-none">
					<div class="card">
						<img class="card-img-top" src="storage/{{ $product->thumb_one }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-title text-capitalize font-weight-bold" style="font-size: 0.9rem">{{ $product->name }}</p>
							<h5 class="float-right text-danger" style="font-size: 0.9rem"><b>৳ {{ $product->price }}</b></h5>
							<button href="#" class="btn btn-success add_to_cart font-weight-light" data-id="{{ $product->id }}"
								data-name="{{ $product->name }}" data-price="{{ $product->price }}">Add To Cart</button>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>

@include('users.layouts.footer')
