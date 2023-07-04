<div class="section-full content-inner bg-img-fix overlay-primary-dark" style="background-image: url({{ asset('frontend/asset/images/background/bg3.jpg') }});">
	<div class="container">


		<div class="section-head text-center head-1 text-white">
			<span>What Our Happy Clients say about us </span>
			<h3 class="h3 text-uppercase">our Testimonial</h3>
			<div class="dlab-separator bg-white"></div>
			<p>We understand that purchasing a used car is a significant decision, and we strive to make the process as hassle-free as possible. see what our client say about Ezeogidi Motors</p>
		</div>

		@php
		$testimonials = App\Models\Testimonials::orderBy('testi_name','ASC')->get();
		@endphp
				
		<div class="section-content ">
		
			<div class="testimonial-center owl-carousel owl-btn-center-lr">
				@foreach($testimonials as $item)
				<div class="item">
					
					<div class="testimonial-2 testimonial-bg style-1">
						<div class="testimonial-text">
							<p>{{ $item->long_descp }}</p>
						</div>
						<div class="testimonial-detail clearfix">
							<div class="testimonial-box">
								<div class="testimonial-pic radius shadow"><img src="{{ asset( $item->testi_image) }}" alt="" width="100" height="100"></div>
								<strong class="testimonial-name" style="font-size: 10px">{{ $item->testi_name }}</strong> 
								<span class="text-white">{{ $item->testi_title }}</span> 
							</div>
						</div>
					</div>
				</div>	
				@endforeach
			</div>
		</div>

		
	</div>
</div>