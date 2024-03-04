@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif
<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">About Us</h2>
		<div class="h-line bg-dark"></div> 

		<p class="text-center mt-3" id="below about us">fdgfd</p>
</div>

	<div class="container mb-5">
		<div class="row justify-content-center">
			<div class="bg-light col-lg-4 p-5">
				
					<h5 class="fw-bold " id="h1">dfgfd</h5>
					<p id="t1">
							sdfdfs
					</p>

			</div>
			<div class="bg-light col-lg-4 px-4 pb-4">			
					<img src="images/about/1.png" class="w-100">
			</div>
		</div>

		<div class="row justify-content-center">

			<div class="bg-light col-lg-4 px-4 pb-4">			
					<img src="images/about/2.png"class="w-100">
			</div>
			<div class="bg-light col-lg-4 p-5">
				
					<h5 class="fw-bold " id="h2">sdfdsfs</h5>
					<p id="t2">
						sdafsdf
					</p>

			</div>
			
		</div>
		<div class="row justify-content-center">
			<div class="bg-light col-lg-4 p-5">
				
					<h5 class="fw-bold " id="h3">sdfdsfeds</h5>
					<p id="t3">
						sdfdsfsd
					</p>

			</div>
			<div class="bg-light col-lg-4 px-4 pb-4">			
					<img src="images/about/3.png"class="w-100">
			</div>
		</div>

		<div class="col pt-5 pb-5">
			
			<h5 class="fw-bold ">Our Policy:</h5>
					<p id="policy">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. At ducimus distinctio odit excepturi maxime eius optio, assumenda nemo officiis architecto impedit alias, voluptas quo modi numquam eum tempore obcaecati repudiandae.
					</p>
		</div>



	</div>
<x-footer/>