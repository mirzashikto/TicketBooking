<x-header_navless/>

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
					
						<form method="POST" action="{{url('/')}}/custom">
								@csrf
						
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label">Vehicle ID</label>
										<input name="vehicle_id" type="number" class="form-control shadow-none" readonly="true" value="{{$vehicle_id}}">

									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<label class="form-label">Date</label>
										<input name="date" type="date" class="form-control shadow-none" readonly="true" value="{{$date}}">

									</div>
								</div>
								

							</div>

							

							
							<div class="row">
                                <label class="form-label">Subject</label>
                                <input name="subject" type="text" class="form-control shadow-none" required>
								
								
							</div>
                            <div class="row">
                                <label class="form-label">Description</label>
                                <textarea name="body" class="form-control shadow-none" required></textarea>

								
							</div>
							
							
                                <br><br>
							<button name="sendmail" type="submit" class="btn btn-outline-dark shadow-none" >
								Send Mail
							</button>
							
							
							</form>
							</div>
							<!-- javascrit karon click korle kothao jabe na -->
						

					
				
			</div>
<x-footer_textless/>