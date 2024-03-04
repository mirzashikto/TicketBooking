
<x-header_navless/>

<h1 class="text-center p-4">Add Vehicle </h1>
<div class="h-line bg-dark"></div>
	<br>

                <form action="{{url('/')}}/vehicle_add" method="POST">
                    @csrf
                    <div class="modal-body py-5   row justify-content center">

                        <div class="container col-lg-8 bg-light shadow rounded p-5">
                            
                            
                            
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicle Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" required >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicle Type</label>
                                        <select name="category" class="form-select" >

                                            
                                            <option >Bus</option>
                                            <option >Train</option>
                                            <option >Aiplane</option>
                                        
                                            
                                        </select>


                                    </div>
                                    
                                </div>
                                
                                
                                <div class="col-lg-5">
                                    <label class="form-label">Select Route</label>
                                    <select name="route_id"class="form-select" >
                                        
                                        @foreach ($routes as $route)
                                                {{$route_id=$route->route_id}}
                                                <option value={{$route_id}}>{{$route->route_id}} ( {{$route->start}} to {{$route->end}} )</option>
                                        @endforeach


                                            
                                        
                                    </select>

                                </div>
                            </div>
                            <div class='row'>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Price</label>
                                        <input name="price" type="number" class="form-control  shadow-none" required >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Start Time</label>
                                        <input name="start_time" type="time" class="form-control  shadow-none" required  >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">End Time</label>
                                        <input name="end_time" type="time" class="form-control  shadow-none" required  >

                                    </div>
                                </div>
                                

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control shadow-none" required></textarea>

                                    </div>
                                </div>
                                <div class=" col-lg-2 mb-3">
                                    <label class="form-label">Total Seats</label>
                                    <input name="total_seats" type="number" class="form-control  shadow-none" required  >

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


            

<x-footer_textless/>