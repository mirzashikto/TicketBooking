


@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif

<div class="container-fluid px-4" style="height:550px; width: 1800px;">
		
		<div class="swiper mySwiper " >
			<div class="swiper-wrapper">
				
				
				<div class="swiper-slide ">
					<img src="images/4.jpg"class="w-100 d-block"height="650">
				</div>
				<div class="swiper-slide ">
					<img src="images/1.jpg"class="w-100 d-block"height="650">
				</div>
				<div class="swiper-slide ">
					<img src="images/3.jpg"class="w-100 d-block"height="650">
				</div>
				
				
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
	</div>

<div class='bg-light'>
    <div class="container" style="margin-top: -80px ; position: relative ; z-index: 2;">
		
		<div class="row">
			<div class="col shadow bg-white rounded p-3 m-4">
				<h5 class="fs-3 fw-bold h-font">Check Availability</h5>
				
				<form action="{{url('/')}}/search_vehicle" method="POST" >
					@csrf
					<div class="row py-2 align-items-end">
						<div class="col-lg-3">

							<label class="form-label fw-bold">Journey Date</label>
							<input name="date" type="date" class="form-control shadow-none" required min="{{date('Y-m-d')}}" > 


						</div>
						<div class="class col-lg-3">
							<label class="form-label fw-bold">From</label>
							<select name="start" class="form-control" >
								
							@foreach ($stopages as $stopage)
								<option>{{$stopage}}</option>
							@endforeach
								
                                

								
								
							</select>



						</div>

						<div class="class col-lg-3">
							<label class="form-label fw-bold">To</label>
							<select name="end" class="form-control" >
								
							@foreach ($stopages->reverse() as $stopage)
								<option>{{$stopage}}</option>
							@endforeach

								
								
							</select>



						</div>

						<div class="class col-lg-3">
							<label class="form-label fw-bold">Transport Type</label>
							<select name="type" class="form-control" >
								
								<option>Bus</option>
                                <option>Train</option>
								<option>Airplane</option>

								
								
							</select>



						</div>
						


					</div>
                    <div class="class m-3 ">
							
							<button name="Search" type="submit" class="btn btn-outline-dark "  >
								Search
							</button>


						</div>

				</form>
			</div>


		</div>
		
	</div>

	<!-- our vehicles -->
	

	<div class="container ">
		<div class="my-5 px-4">
			<h2 id="transports" class="fw-bold h-font text-center">Our Vehicles</h2>
			<div class="h-line bg-dark"></div>
		</div>
	
		<div class="row  mb-5">

		<div class="col-lg-4 p-2 "><!-- Individual card -->
				
				<div class="card shadow pt-2" style="max-width: 350px margin:auto; ;">
					<div class="container-fluid px-4">

						<div class="swiper mySwiper mt-2">
							<div class="swiper-wrapper">

								
								<div class="swiper-slide ">
									
									<img src="images/2.jpg"class="w-100  d-block" height="350">
									
								</div>

								<div class="swiper-slide ">
									
									<img src="images/3.jpg"class="w-100  d-block" height="350">
									
								</div>

								<div class="swiper-slide ">
									
									<img src="images/4.jpg"class="w-100  d-block" height="350">
									
								</div>
								
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>


					<div class="card-body">


						
						<br>
						<h3 class="card-title mb-2 h-font">Buses </h3>
						<br>
						
						<h6 class="card-title mb-2">loremjkdshkfjhusfhdkgnksdjg</h6>



						<div class="mt-4 mb-2"> <!-- Lower buttons -->
							<a href="{{url('/')}}/buses"><button class="btn btn-primary">See More</button></a>
								
							
						</div>
						

					</div>
				</div>
			</div>	
			

			<div class="col-lg-4 p-2 "><!-- Individual card -->
				
				<div class="card shadow pt-2" style="max-width: 350px margin:auto; ;">
					<div class="container-fluid px-4">

						<div class="swiper mySwiper mt-2">
							<div class="swiper-wrapper">

								
								<div class="swiper-slide ">

									<img src="images/1.jpg"class="w-100  d-block" height="350">
									
								</div>

								<div class="swiper-slide ">
									
									<img src="images/4.jpg"class="w-100  d-block" height="350">
									
								</div>

								<div class="swiper-slide ">
									
									<img src="images/2.jpg"class="w-100  d-block" height="350">
									
								</div>
								
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>


					<div class="card-body">


						
						<br>
						<h3 class="card-title mb-2 h-font">Trains </h3>
						<br>
						
						<h6 class="card-title mb-2">loremjkdshkfjhusfhdkgnksdjg</h6>



						<div class="mt-4 mb-2"> <!-- Lower buttons -->
							<a href="/trains"><button class="btn btn-primary">See More</button></a>
								
							
						</div>
						

					</div>
				</div>
			</div>	

			<div class="col-lg-4 p-2 "><!-- Individual card -->
				
				<div class="card shadow pt-2" style="max-width: 350px margin:auto; ;">
					<div class="container-fluid px-4">

						<div class="swiper mySwiper mt-2">
							<div class="swiper-wrapper">

								
								<div class="swiper-slide ">

									<img src="images/4.jpg"class="w-100  d-block" height="350">
									
								</div>

								<div class="swiper-slide ">
									
									<img src="images/1.jpg"class="w-100  d-block" height="350">
									
								</div>

								<div class="swiper-slide ">
									
									<img src="images/3.jpg"class="w-100  d-block" height="350">
									
								</div>
								
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>


					<div class="card-body">


						
						<br>
						<h3 class="card-title mb-2 h-font">Airplanes </h3>
						<br>
						
						<h6 class="card-title mb-2">loremjkdshkfjhusfhdkgnksdjg</h6>



						<div class="mt-4 mb-2"> <!-- Lower buttons -->
							<a href="/airplanes"><button class="btn btn-primary">See More</button></a>
								
							
						</div>
						

					</div>
				</div>
			</div>

		</div>		
	
	</div>

    
	<!-- Our Facilities -->
	
	
	<div class="container py-4">
		<div class="my-5 px-4 py-4">
				<h2 id="facilities" class="fw-bold h-font text-center">Our Facilities</h2>
				<div class="h-line bg-dark"></div>
		</div>
		<div class="row mb-5 justify-content-evenly">


			<div class="col-lg-2 text-center shadow rounded bg-white p-5">
				
				
				<img src="images/facilities/1.png" class="card-img-top" alt="..." width="80px">
				<h6 class="h-font">Wifi</h6>

			</div>
			<div class="col-lg-2 text-center shadow rounded bg-white p-5">
				
				
				<img  src="images/facilities/2.png" class="card-img-top" alt="..." width="80px">
				<h6 class="h-font">TV</h6>

			</div>
			<div class="col-lg-2 text-center shadow rounded bg-white p-5">
				
				
				<img src="images/facilities/3.png" class="card-img-top" alt="..." width="80px">
				<h6 class="h-font">AC</h6>

			</div>
			<div class="col-lg-2 text-center shadow rounded bg-white p-5">
				
				
				<img src="images/facilities/4.png" class="card-img-top" alt="..." width="80px">
				<h6 class="h-font">Foods</h6>

			</div>
			<div class="col-lg-2 text-center shadow rounded bg-white p-5">
				
				
				<img src="images/facilities/5.png" class="card-img-top" alt="..." width="80px">
				<h6 class="h-font">24/7 Customer Support</h6>

			</div>

		</div>
	</div>	
	



	<!-- Reach Us -->
    <div >
		<div class="my-5 px-4 py-4">
			<h2 id="contact" class="fw-bold h-font text-center">Reach Us</h2>
			<div class="h-line bg-dark"></div>
		</div>
	<div class="row justify-content-evenly mb-5">
		<div class="col-lg-7 bg-white text-center shadow py-4 rounded">
			<!-- Google Map -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.080536701386!2d90.4045954750157!3d23.780146278650047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7715a40c603%3A0xec01cd75f33139f5!2sBRAC%20University!5e0!3m2!1sen!2sbd!4v1687540369315!5m2!1sen!2sbd" width="830" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		</div class='mb-5'>
		<div class="col-lg-3">
			<h5>Call Us</h5>

			<a class="text-decoration-none text-dark" href="tel: +8801711254478">
				<i class="bi bi-telephone-outbound-fill px-2"></i>
			+8801711254478</a>
			<br>
			<a class="text-decoration-none text-dark" href="tel: +8801711254479">
				<i class="bi bi-telephone-outbound-fill px-2"></i>
			+8801711254479</a>


			<h5 class="my-2 mt-5">Follow Us</h5>

			<a class="text-decoration-none text-dark mx-3" href="https://www.facebook.com/">
				<span>
					<i class="bi bi-facebook"></i>
					Facebook
				</span>
			</a>
			<a class="text-decoration-none text-dark d-inline-block" href="https://twitter.com/">
				<span>
					<i class="bi bi-twitter"></i>
					Twitter
				</span>
			</a>

		</div>
        </div>


</div>
<x-footer/>