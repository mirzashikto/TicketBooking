
<x-header_navless/>


<div class="d-flex flex-row-reverse">
		<button class="btn btn-outline-dark shadow-none me-lg-2 m-3" >
			<a class="text-decoration-none text-warning" href="logout.php">Log out</a>
		</button>

	</div>

	<h1 class="text-center">Settings </h1>
	<div class="h-line bg-dark"></div>
	<br>
	<div>
		<h4 class="m-3"><i class="bi bi-building-gear"></i> Modify Routes:</h4>
		<br>
		<h6 class="m-3">Select Route id</h6>
		<form method="POST"  action="{{url('/')}}/modify_route">
			@csrf
			<div class="row m-3">
				<div class="col-lg-3">

					<select name="route_id"class="form-select" >
						
                        @foreach ($routes as $route)
								{{$route_id=$route->route_id}}
								<option value={{$route_id}}>{{$route->route_id}} ( {{$route->start}} to {{$route->end}} )</option>
						@endforeach


							
						
					</select>

				</div>

				<div class="col-lg-1">
					<button name="delete" type="submit" class="btn btn-outline-dark shadow-none mx-5" >
						Delete
					</button>
				</div>

				<div class="col-lg-1">
					<button name="update" class="btn btn-outline-dark shadow-none " >
						Update
					</button>
				</div>
				<div class="col-lg-2">
					<button name="manage_stopage" class="btn btn-outline-dark shadow-none " >
						Add Stopage
					</button>
				</div>
				


				<div class="col-lg-4">
					<button name="add" class="btn btn-outline-dark shadow-none " >
						Add New +
					</button>
				</div>


			</div>
		</form>

	</div>

<!-- modify vehicles -->
<br><br>
	<div>
		<h4 class="m-3"><i class="bi bi-building-gear"></i> Modify Vehicles:</h4>
		<br>
		<h6 class="m-3">Select Vehicle id</h6>
		<form method="POST" action="{{url('/')}}/modify_vehicle">
		@csrf
			<div class="row m-3">
				<div class="col-lg-3">

					<select name="vehicle_id" class="form-select" >
						
                        @foreach ($vehicles as $vehicle)
								{{$vehicle_id=$vehicle->vehicle_id}}
								<option value={{$vehicle_id}}>{{$vehicle->vehicle_id}} ( {{$vehicle->name}} )</option>
						@endforeach


							
						
					</select>

				</div>

				<div class="col-lg-1">
					<button name="delete" type="submit" class="btn btn-outline-dark shadow-none mx-5" >
						Delete
					</button>
				</div>

				<div class="col-lg-1">
					<button name="update" class="btn btn-outline-dark shadow-none " >
						Update
					</button>
				</div>
				


				<div class="col-lg-4">
					<button name="add" class="btn btn-outline-dark shadow-none text-info " >
						Add New +
					</button>
				</div>


			</div>
		</form>

	</div>
<!-- Email Section -->
<br><br>
	<div>
		<h4 class="m-3"><i class="bi bi-building-gear"></i> Send Mails:</h4>
		<br>
		<h6 class="m-3">Select Vehicle id</h6>
		<form method="POST" action="{{url('/')}}/sendmail">
		@csrf
			<div class="row m-3">
				<div class="col-lg-3">

					<select name="vehicle_id" class="form-select" >
						
                        @foreach ($vehicles as $vehicle)
								{{$vehicle_id=$vehicle->vehicle_id}}
								<option value={{$vehicle_id}}>{{$vehicle->vehicle_id}} ( {{$vehicle->name}} )</option>
						@endforeach


							
						
					</select>

				</div>
				<div class="col-lg-3">

					
					<input name="date" type="date" class="form-control shadow-none" required  > 


				</div>

				<div class="col-lg-2">
					<button name="late" type="submit" class="btn btn-outline-dark shadow-none mx-5" >
						Late Notification
					</button>
				</div>

				<div class="col-lg-1">
					<button name="reminder" class="btn btn-outline-dark shadow-none " >
						Remind 
					</button>
				</div>
				


				<div class="col-lg-2">
					<button name="custom" class="btn btn-outline-dark shadow-none text-info " >
						Custom
					</button>
				</div>


			</div>
		</form>

	</div>

<!--Booking section -------------------------------------------------------------------------------------------------------------------- -->

	
	<br><br>
	<h4 class="m-3"> <i class="bi bi-journal-richtext"></i> Manage Bookings:</h4>

	<!-- My booking table -->
	<div class="m-5 p-5 bg-white shadow rounded">

		
		<table class="table table-striped" style="width:100%">
			<thead>
				<tr>
					<th>Booking_id</th>
					<th>Vehicle_id</th>
					<th>Seat_id</th>
					<th>Transiction_id</th>
					<th>Customer_id</th>
					<th>Start</th>
					<th>End</th>
					<th>Date</th>
					<th>Status</th>
					
					<th></th>
				</tr>
			</thead>
			<tbody>

				@foreach($bookings as $booking)
					<tr>
						<td>{{$booking->booking_id}}</td>
						<td>{{$booking->vehicle_id}}</td>
						<td>{{$booking->seat_id}}</td>
						<td>{{$booking->transiction_id}}</td>
						<td>{{$booking->customer_id}}</td>
						<td>{{$booking->start}}</td>
						<td>{{$booking->end}}</td>
						<td>{{$booking->date}}</td>
						<td>{{$booking->status}}</td>
						
						
						<td>
							<div class="d-flex flex-row-reverse">
							<form method="GET" action="{{url('/')}}/booking_approve/{{$booking->booking_id}}" >
									<button type="submit" class="btn btn-outline-dark shadow-none text-success mx-2" >
										<b>Approve</b>
									</button>
							</form>
							<form method="GET" action="{{url('/')}}/booking_cancel/{{$booking->booking_id}}" >
									<button type="submit" class="btn btn-outline-dark shadow-none text-danger mx-2" >
										<b>Cancel</b>
									</button>
							</form>
							<form method="GET" action="{{url('/')}}/receipt/{{$booking->booking_id}}" >
									<button type="submit" class="btn btn-outline-dark shadow-none text-primary mx-2" >
										<b>Details</b>
									</button>
							</form>
							</div>


						</td>
					</tr>

				@endforeach	
            
            
        </tbody>
        <tfoot>
        	<tr>
        		<th>----</th>
        		<th>----</th>
        		<th>----</th>
        		<th>----</th>
        		<th>----</th>
        		<th>----</th>
        		<th>----</th>
				<th>----</th>
				<th>----</th>
				<th>----</th>
        	</tr>
        </tfoot>
    </table>

</div>


<br><br><br>









<div class="row">
				<button type="button" class="btn btn-danger btn-lg btn-block">
				<a class="text-decoration-none text-white" href="/confirm_reset">Factory Data Reset</a>

				</button>	

</div>

<x-footer_textless/>