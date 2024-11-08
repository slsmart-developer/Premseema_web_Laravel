	<main>
		<div class="header-video">
    			<div id="hero_video">
    				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
    					<div class="container">
    						<div class="row justify-content-center justify-content-md-start">
    							<div class="col-lg-6">
    								<div class="container slide-text white">
    								    <p style="color:white; font-size:25px;">Welcome to</p>
    									<p style="color:white; font-size:38px">PREMINDUSTRIES test</p>
    									<p>Sky fruit is traditionally used to promote blood circulation and improves our general health conditions. In the year 1996, a team of renowned American biochemists encountered the discovery of abundant Flavonoids and Saponins in the sky fruit.</p>
    									<a class="btn_1" href="/products" role="button">Shop Now</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<video id="videobcg" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="{{ asset('assets/video/skyfruit_intro.mp4')}}" type="video/mp4">
                  </video>
    		</div>



		<ul id="banners_grid" class="clearfix">
			<li>
				<a href="#0" class="img_container">
					<img src="{{ asset('assets/img/banners_cat_placeholder.jpg')}}" data-src="{{asset('assets/img/uses/diabetes1.jpg')}}" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>DIABETES</h3>
						<br>
						<h6 class="txt-align txt-clr">Sky Fruit is highly beneficial for diabetic patients. On a weekly consumption of this fruit, it helps to lower the glucose level in the blood.</h6>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="{{ asset('assets/img/banners_cat_placeholder.jpg')}}" data-src="{{asset('assets/img/uses/impotency.jpg')}}" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>IMPOTENCY</h3>
						<br>
						<h6 class="txt-align txt-clr">Erectile dysfunction which is faced by a lot of men in our society can be treated with Skyfruit. This is caused due to stress and work pressure. </h6>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="{{ asset('assets/img/banners_cat_placeholder.jpg')}}" data-src="{{asset('assets/img/uses/skin-prod.jpg')}}" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>SKIN ALLERGY</h3>
						<br>
						<h6 class="txt-align txt-clr">Sky fruit is the best remedy for skin allergies. Grind a small amount of the seeds with the help of a masher and drink it along with water. </h6>
					</div>
				</a>
			</li>
		</ul>
		<!--/banners_grid -->

		<div class="container margin_60_35">
			<div class="main_title">
				<h2 class="ht-color">SKYFRUIT PRODUCTS</h2>
				<span>SKYFRUIT PRODUCTS</span>
			</div>
			<div class="row small-gutters">
				@foreach ($products as $product)

				<div class="col-4 col-md-4 col-xl-4">
					<div class="grid_item">
						<figure>
							<a href="{{route('product.details',['slug'=>$product->slug])}}">
								<img class="img-fluid lazy hover-overlay hover-zoom " src="{{ asset('assets/img/products/product_placeholder_square_medium.jpg')}}" data-src="{{ asset('assets/img/products/prem_product')}}/{{$product->image}}" alt="{{$product->name}}" width="300" height="300">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="/product-detail">
							<h3>{{$product->name}}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">₹{{$product->regular_price}}</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>

				</div>

				<!-- /col -->
				@endforeach

				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->




		<div class="featured lazy" style="height : 400px;" data-bg="url({{ asset('assets/img/featured_home.jpg')}})">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.8)">
				<div class="container margin_60">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-lg-12 wow" data-wow-offset="150">
							<h2 class="txt-clr">If you are suffering from any sort of health disorders or ailments,  </h2>
							<br>
							<h3>CONSUMING SKYFRUIT WILL CREATE A MIRACLE</h3>
							<div class="feat_text_block">
								<br>
								<a class="btn_1" href="/products" role="button">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /featured -->



		<div class="container margin_60_35">
			<div class="main_title">
				<h2 class="ht-color">Latest News</h2>
				<span>Blog</span>

			</div>
			<div class="row">
				<div class="col-lg-6">

					<a class="box_topic" href="#0">
					   <iframe width="70%" height="80%" src="https://www.youtube.com/embed/pxabuiN_b0s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</a>




				</div>
				<!-- /box_news -->
				<div class="col-lg-6">

					<a class="box_topic" href="#0">
                      <iframe width="70%" height="80%" src="https://www.youtube.com/embed/VpWZ2roA1i8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</a>



				</div>
				<!-- /box_news -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
