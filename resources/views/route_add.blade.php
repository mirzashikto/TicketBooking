
<x-header_navless/>

<h1 class="text-center p-4">Add Route </h1>
<div class="h-line bg-dark"></div>
	<br>

                <form action="{{url('/')}}/route_add" method="POST">
                    @csrf
                    <div class="modal-body py-5   row justify-content center">

                        <div class="container col-lg-8 bg-light shadow rounded p-5">
                            
                            
                            
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Start</label>
                                        <input name="start" type="text" class="form-control shadow-none" required >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">End</label>
                                        <input name="end" type="text" class="form-control  shadow-none" required  >

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicle type</label>
                                        <select name="type" class="form-select" >

                                            
                                            <option >Bus</option>
                                            <option >Train</option>
                                            <option >Aiplane</option>
                                        
                                            
                                        </select>


                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Distance</label>
                                        <input name="distance" type="number" class="form-control  shadow-none" required >

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