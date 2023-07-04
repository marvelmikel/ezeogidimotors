

<div class="main-slider style-two default-banner">
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				<div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
					<ul>
						<!-- SLIDE 1 -->
						<li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('frontend/') }}asset/plugins/revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('frontend/asset/images/main-slider/slide1.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<div class="tp-caption   tp-resizeme" 
								id="slide-2957-layer-5" 
								data-x="502" 
								data-y="center" 
								data-voffset="130" 
								data-width="['none','none','none','none']"
								data-height="['none','none','none','none']"
								data-transform_idle="o:1;"
								data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="opacity:0;s:300;" 
								data-start="1200" 
								data-responsive_offset="on" 
								style="z-index: 11;">
									<img src="{{ asset('frontend/asset/images/car2.png') }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
							</div>	
						</li>
						<!-- SLIDE 2 -->
						<!-- SLIDE  -->
						<li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('frontend/asset/plugins/revolution/assets/100x50_3176d-road-bg.jpg') }}"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('frontend/asset/images/main-slider/slide2.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<div class="tp-caption   tp-resizeme" 
								id="slide-2957-layer-4" 
								data-x="502" 
								data-y="center" 
								data-voffset="130" 
								data-width="['none','none','none','none']"
								data-height="['none','none','none','none']"
								data-transform_idle="o:1;"
								data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="opacity:0;s:300;" 
								data-start="1200" 
								data-responsive_offset="on" 
								style="z-index: 11;">
									<img src="{{ asset('frontend/asset/images/car3.png') }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
							</div>	
						</li>
						
					</ul>
					<div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
				</div>
			</div>
			<!-- END REVOLUTION SLIDER -->
		</div>
	</div>
	<!-- Form -->	
	<div class="form-slide">
		<div class="container">
			<form class="search-car" action="https://carzone.dexignlab.com/xhtml/new-car-search-result-list.html" method="post">
				<div class="form-head">
					<h2>Search the right car</h2>
				</div>
				<!-- TABS -->
				<div class="form-find-area">
					<ul class="nav theme-tabs">
						<li role="presentation" class="active"><a data-toggle="tab"  aria-controls="new-car"  href="#new-car">NEW CAR</a></li>
						<li role="presentation" ><a data-toggle="tab"  aria-controls="popular" href="#used-car">USED CAR</a></li>
					</ul>
					<div class="tab-content">
						<!-- NEW CAR -->
						<div id="new-car"  class="tab-pane active clearfix">
							<ul class="nav text-center check-nav">
								<li>
									<input id="radio1" type="radio" name="new_search" checked="checked" value="budget"/>
									<label for="radio1">BY BUDGET</label>
								</li>
								<li>
									<input id="radio2" type="radio" name="new_search" value="brand"/>
									<label for="radio2">BY BRAND</label>
								</li>
							</ul>
							<div  id="budgetDiv" class="new_form_div">
								<div class="input-group">
									<select class="form-control">
										<option>Select Budget</option>
										<option>1 Lakh - 5 Lakh</option>
										<option>5 Lakh - 10 Lakh</option>
										<option>10 Lakh - 20 Lakh</option>
										<option>20 Lakh - 50 Lakh</option>
										<option>50 Lakh - 1 Crore</option>
										<option>Above 1 Crore</option>
									</select>
								</div>
								<div class="input-group">
									<select class="form-control">
										<option>All Vehicle Types</option>
										<option>Hatchback</option>
										<option>Sedans</option>
										<option>MUV</option>
									</select>
								</div>
							</div>
							<div  id="brandDiv" class="new_form_div" style="display: none;">
								<div class="input-group">
									<select class="form-control">
										<option>Select Brand</option>
										<option>Hatchback</option>
										<option>Sedans</option>
										<option>MUV</option>
									</select>
								</div>
								<div class="input-group">
									<select class="form-control">
										<option>Select Model</option>
										<option>Hatchback</option>
										<option>Sedans</option>
										<option>MUV</option>
									</select>
								</div>
							</div>									
							
							<div class="input-group">
								<button class="site-button button-lg btn-block" type="submit">SEARCH</button>
							</div>
							<div class="input-group text-center">
								<a class="site-button-link" href="new-car-search.html">ADVANCED SEARCH <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<!-- USED CAR -->
						<div id="used-car"  class="tab-pane clearfix">
							<ul class="nav text-center check-nav">
								<li>
									<input id="radio3" type="radio" name="used_search" checked="checked" value="used_budget"/>
									<label for="radio3">BY BUDGET</label>
								</li>
								<li>
									<input id="radio4" type="radio" name="used_search" value="used_model"/>
									<label for="radio4">BY MODEL</label>
								</li>
							</ul>
							<div id="used_budgetDiv" class="used_form_div">
								<div class="input-group">
									<select class="form-control">
										<option>Select Budget</option>
										<option>1 Lakh - 5 Lakh</option>
										<option>5 Lakh - 10 Lakh</option>
										<option>10 Lakh - 20 Lakh</option>
										<option>20 Lakh - 50 Lakh</option>
										<option>50 Lakh - 1 Crore</option>
										<option>Above 1 Crore</option>
									</select>
								</div>
								<div class="input-group">
									<select class="form-control">
										<option>Select City</option>
										<option>Hatchback</option>
										<option>Sedans</option>
										<option>MUV</option>
									</select>
								</div>
							</div>
							<div  id="used_modelDiv" class="used_form_div" style="display: none;">
								<div class="input-group">
									<select class="form-control">
										<option>Select Model</option>
										<option>1 Lakh - 5 Lakh</option>
										<option>5 Lakh - 10 Lakh</option>
										<option>10 Lakh - 20 Lakh</option>
										<option>20 Lakh - 50 Lakh</option>
										<option>50 Lakh - 1 Crore</option>
										<option>Above 1 Crore</option>
									</select>
								</div>
								<div class="input-group">
									<select class="form-control">
										<option>Select City</option>
										<option>Hatchback</option>
										<option>Sedans</option>
										<option>MUV</option>
									</select>
								</div>
							</div>									
							<div class="input-group">
								<button class="site-button button-lg btn-block" type="submit" onclick="window.location.href='index.html'">SEARCH</button>
							</div>
							<div class="input-group text-center">
								<a class="site-button-link" href="new-car-search.html">ADVANCED SEARCH <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>	
	<!-- Form END -->	
</div>