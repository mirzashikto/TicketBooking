@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif
	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">Book Now</h2>
		<div class="h-line bg-dark"></div>

	</div>
	<div class="container mb-5">
		
		<div class="row justify-content-center">
			
			<div class="col-lg-8 shadow bg-white rounded p-5">
				
				<form method="POST" action="{{url('/')}}/pre_seats">
                @csrf

					<div class="row py-2 align-items-end">

						<div class="class col-lg-3">
							<label class="form-label fw-bold">Vehicle ID</label>
							<input name="vehicle_id" type="number" class="form-control shadow-none" readonly="true" value="{{$id}}">



						</div>

						<div class="col-lg-3">

							<label class="form-label fw-bold">Journey Date</label>
							<input name="date" type="date" class="form-control shadow-none" required min="{{date('Y-m-d')}}" > 


						</div>
						
						
                        <div class="class col-lg-2">
							<label class="form-label fw-bold">Start</label>
							<select name="start" class="form-control" >

								@foreach ($stopages as $stopage)
								<option>{{$stopage}}</option>
								@endforeach

									
								
							</select>



						</div>
                        <div class="class col-lg-2">
							<label class="form-label fw-bold">End</label>
							<select name="end" class="form-control" >
								
								@foreach ($stopages ->reverse() as $stopage)
								<option>{{$stopage}}</option>
								@endforeach

									
								
							</select>



						</div>
						<div class="class col-lg-2  ">
							
							<button  type="submit" class="btn btn-outline-dark shadow-none " >
								See Seats
							</button>
							


						</div>

						

						



					</div>
                    




				</form>


			</div>


		</div>

	</div>


	<br>
	<br><br><br>

<x-footer/>

	