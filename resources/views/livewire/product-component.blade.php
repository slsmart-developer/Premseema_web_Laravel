	<main>
		<div class="top_banner">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
				<div class="container">
					<div class="breadcrumbs">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="#">Products</a></li>
							<li>Page active</li>
						</ul>
					</div>
					<h1> SKYFRUIT PRODUCTS</h1>
				</div>
			</div>
			<img src="{{ asset('assets/img/sky_bg11.jpg') }}" class="img-fluid" alt="">
		</div>
		<!-- /top_banner -->

			<div id="stick_here"></div>
			<div class="toolbox elemento_stick">

			</div>
			<!-- /toolbox -->

			<div class="container margin_30">
			<div class="row small-gutters">

				@foreach ($products as $product)
				<div class="col-6 col-md-4 col-xl-4">
					<div class="grid_item">
						<figure>
							<a href="{{route('product.details',['slug'=>$product->slug])}}">
								<img class="img-fluid lazy" src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg')}}" data-src="{{ asset('assets/img/products/prem_product')}}/{{$product->image}}" alt="">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="{{route('product.details',['slug'=>$product->slug])}}">
							<h3>{{$product->name}}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">₹{{$product->regular_price}}</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /col -->
				@endforeach


			</div>
			<!-- /row -->

			<div class="pagination__wrapper">
				<ul class="pagination">
					<li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
					<li>
						<a href="#0" class="active">1</a>
					</li>
					<li>
						<a href="#0">2</a>
					</li>
					<li>
						<a href="#0">3</a>
					</li>
					<li>
						<a href="#0">4</a>
					</li>
					<li><a href="#0" class="next" title="next page">&#10095;</a></li>
				</ul>
			</div>

		</div>
		<!-- /container -->
	</main>
