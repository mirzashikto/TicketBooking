
<x-header_navless/>





	<div class="row   mt-4 p-5 bg-white rounded ">
		
		<div>
			<h2 class="mb-4 h text-center">Booking Receipt</h2>
			<div class="h-line bg-dark"></div>
		</div>
		
	</div>

	<div class="modal-content">
							
								
								<div class="modal-body py-5   row justify-content center">

									<div class="container col-lg-6 bg-light shadow rounded p-5">
										<div class="row">
											<div class="col">
												<div class="mb-3">
													<label class="form-label"><b>Name</b> : {{$customer->name}}</label>
													
												</div>
											</div>
											<div class="col">
												<div class="mb-3">
													<label class="form-label"><b>Email</b> : {{$customer->email}} </label>
						

												</div>
											</div>
											
											

										</div>
										<div class="row mt-2">
											<div class="col">
												<div class="mb-3">
													<label class="form-label"><b>Phone</b> : {{$customer->phone}} </label>
								

												</div>
											</div>


										</div>
										
										
										
										
										<div class="row mt-5">
											
											<div class="col"><b>Vehicle</b> : {{$vehicle->vehicle_id}} ({{$vehicle->name}}) </div>
											<div class="col"><b>Category</b> : {{$vehicle->category}} </div>
											<div class="col"><b>Seat</b> : {{$seat->seat_id}} ({{$seat->name}}) </div>
											



										</div>
										<div class="row mt-4 pt-3">
											
											<div class="col"><b>Start</b> : {{$booking->start}}</div>
											<div class="col"><b>End</b> : {{$booking->end}}</div>
											<div class="col"><b>Time</b> : {{$vehicle->start_time}}</div>
											<div class="col"><b>Date</b> : {{$booking->date}}</div>
											
											

										</div>
										<div class="row mt-5">
											
											<div class="col-lg-3"><b>Booking id</b> : {{$booking->booking_id}} </div>
											<div class="col-lg-5"><b>Ordered Foods</b> : {{$booking->foods}} </div>
											

										</div>

								
										<div class="row mt-5">
											
											<div class="col-lg-3"><b>Total cost ($)</b>: {{$payment->amount}} </div>
											<div class="col-lg-3"><b>Status</b> : Paid </div>
											<div class="col-lg-6"><b>Transiction id</b> : {{$booking->transiction_id}} </div>
											
											

										</div>


										
										

										
										<!-- javascrit karon click korle kothao jabe na -->
									</div>

								</div>
							
						</div>	

		
	</div>

	


<x-footer_textless/>

	