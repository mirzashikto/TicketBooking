
<x-header_navless/>

<h1 class="text-center p-4">Add Stopage </h1>
<div class="h-line bg-dark"></div>
	<br>

                <form action="{{url('/')}}/manage_stopage" method="POST">
                    @csrf
                    <div class="modal-body py-5   row justify-content center">

                        <div class="container col-lg-8 bg-light shadow rounded p-5">
                            
                            
                            
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Route ID</label>
                                        <input name="route_id" type="number" class="form-control shadow-none" readonly="true" value="{{$route->route_id}}" >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" required >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Distance From Start</label>
                                        <input name="distance_from_start" type="number" class="form-control shadow-none" required >

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