@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif
<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">Confirm Booking</h2>
		<div class="h-line bg-dark"></div>

	</div>
	
<!-- <form method=""action=""></form> -->
<div class="row justify-content-center">
<div class="col-lg-8 shadow p-4">
				
					<div class="row">
						<i class="bi bi-archive-fill fs-3 me-2 p-4"></i>
						
						
					</div>
					
						<form method="POST" action="{{url('/')}}/payment">
								@csrf
						
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label">Vehicle ID</label>
										<input name="vehicle_id" type="number" class="form-control shadow-none" readonly="true" value="{{$request['vehicle_id']}}">

									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label class="form-label">Journey Date</label>
										<input name="date" type="date" class="form-control shadow-none" readonly="true" value="{{$request['date']}}">

									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label class="form-label">From</label>
										<input name="start" type="text" class="form-control shadow-none" readonly="true" value="{{$request['start']}}">

									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label class="form-label">To</label>
										<input name="end" type="text" class="form-control shadow-none" readonly="true" value="{{$request['end']}}">

									</div>
								</div>

							</div>

							

							
							<div class="row">
								
								<div class="col-lg-2">
									<div class="mb-3">
										<label class="form-label">Seat</label>
										<input name="seats" type="text" class="form-control shadow-none" readonly="true" value="{{$request['seats']}}">

									</div>
								</div>
								<div class="col-lg-5">
									<div class="mb-3">
										<label class="form-label">Ordered Foods</label>
										<input name="food_list" type="text" class="form-control shadow-none" readonly="true" value="{{$food_list}}">

									</div>
								</div>
								<div class="col-lg-3">

									<label class="form-label fw-bold">Start Time</label>
									<input name="start_time" type="time" class="form-control shadow-none" readonly="true" value="{{session()->get('start_time')}}">


								</div>
								
							</div>
							
							

							<div class="row my-5">
								<div class="col-lg-6">
									
								</div>
								<div class="col-lg-2">
									<div class="mb-3">
										<label class="form-label"><h4 class="h-font">Total cost ($)</h4></label>
										
									</div>
								</div>
								<div class="col-lg-3">
									<div class="mb-3">
										
										<input name="cost" type="number" class="form-control shadow-none" readonly="true" value="{{$cost}}">

									</div>
								</div>
								
							</div>
								
									<br>
							
							<button name="payment" type="submit" class="btn btn-outline-dark shadow-none" >
								Proceed to Payment
							</button>
							
							
							</form>
							</div>
							<!-- javascrit karon click korle kothao jabe na -->
						

					
				
			</div>


	<br>
	<br><br><br>

	<br>
	<br><br><br>

<x-footer/>

	