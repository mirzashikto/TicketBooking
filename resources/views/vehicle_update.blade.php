
<x-header_navless/>

<h1 class="text-center p-4">Add Vehicle </h1>
<div class="h-line bg-dark"></div>
	<br>

                <form action="{{url('/')}}/vehicle_update" method="POST">
                    @csrf
                    <div class="modal-body py-5   row justify-content center">

                        <div class="container col-lg-8 bg-light shadow rounded p-5">
                            
                            
                            
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicle ID</label>
                                        <input name="vehicle_id" type="number" class="form-control shadow-none" readonly="true" value="{{$vehicle->vehicle_id}}" >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicle Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" required value="{{$vehicle->name}}" >

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
                                        <input name="price" type="number" class="form-control  shadow-none" required value="{{$vehicle->price}}" >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Start Time</label>
                                        <input name="start_time" type="time" class="form-control  shadow-none" required value="{{$vehicle->start_time}}"  >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">End Time</label>
                                        <input name="end_time" type="time" class="form-control  shadow-none" required value="{{$vehicle->end_time}}"  >

                                    </div>
                                </div>
                                

                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control shadow-none" required >{{$vehicle->description}}</textarea>

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


            

<x-footer_textless/>