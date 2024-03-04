


<x-header_logged/>



    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Welcome,{{$customer->name}} </h2>
        <div class="h-line bg-dark"></div>

        
    </div>


    <div class="modal-content pb-5">
        <div class="row justify-content center">
            <div class="col">
                <form action="{{url('/')}}/user_profile" method="POST">
                    @csrf
                    <div class="modal-body py-5   row justify-content center">

                        <div class="container col-lg-10 bg-light shadow rounded p-5">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" value="{{$customer->name}}">

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control shadow-none"value="{{$customer->email}}">

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input name="phone" type="number" class="form-control shadow-none" value="{{$customer->phone}}">

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Zip</label>
                                        <input name="zip" type="number" class="form-control shadow-none "value="{{$customer->zip}}" >

                                    </div>
                                </div>
                                
                                
                            </div>
                            
                            
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">House</label>
                                        <input name="house" type="text" class="form-control shadow-none"value="{{$customer->house}}"  >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Street</label>
                                        <input name="street" type="text" class="form-control  shadow-none"value="{{$customer->street}}"  >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Area</label>
                                        <input name="area" type="text" class="form-control  shadow-none"value="{{$customer->area}}">

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <input name="country" type="text" class="form-control  shadow-none"value="{{$customer->country}}"  >

                                    </div>
                                </div>
                            </div>


                            
                            

                            <div class="d-flex flex-row-reverse">
                                <button name="saveprofile" type="submit" class="btn btn-outline-dark shadow-none mt-2" >
                                    Save
                                </button>


                            </div>
                            
                            <!-- javascrit karon click korle kothao jabe na -->
                        </div>

                    </div>
                </form>


            </div>
            
            
        </div>
    </div>
    <div class="bg-white py-5">
        <h4 class="fw-bold h-font text-center">My Bookings</h4>
        <div class="h-line bg-dark"></div>

        
    </div>
    
    <!-- My booking table -->

    @php
    use Carbon\Carbon;
    @endphp
    
    

	<div id="my_bookings"class="m-5 p-5 bg-white shadow rounded">

		
		<table class="table table-striped" style="width:100%">
			<thead>
				<tr>
					<th>Vehicle_id</th>
					<th>Seat_id</th>
					<th>Start</th>
					<th>End</th>
					<th>Date</th>
                    <th>Status</th>
					<th></th>
                    <th></th>
				</tr>
			</thead>
			<tbody>

				@foreach($bookings as $booking)
					<tr>
						<td>{{$booking->vehicle_id}}</td>
						<td>{{$booking->seat_id}}</td>				
						<td>{{$booking->start}}</td>
						<td>{{$booking->end}}</td>
						<td>{{$booking->date}}</td>
                        <td>{{$booking->status}}</td>
                        <td>----</td>
						
						<td>
							<div class="d-flex flex-row-reverse">
							
							<form method="GET" action="{{url('/')}}/receipt/{{$booking->booking_id}}" >
									<button type="submit" class="btn btn-outline-dark shadow-none text-primary mx-2" >
										<b>Details</b>
									</button>
							</form>
                            
                            @if( (($booking->date)> Carbon::now())  and (Carbon::parse($booking->date)->diffInDays(Carbon::now())>2) and $booking->status!='Canceled')
                            <form method="GET" action="{{url('/')}}/booking_cancel_customer/{{$booking->booking_id}}" >
									<button type="submit" class="btn btn-outline-dark shadow-none text-danger mx-2" >
										<b>Cancel</b>
									</button>
							</form>

                            @endif
                            
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
        	</tr>
        </tfoot>
    </table>

</div>
								
<!-- Footer -->
<x-footer/>
