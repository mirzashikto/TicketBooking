@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">{{$tittle}}</h2>
    <div class="h-line bg-dark"></div>

    <p class="text-center mt-3">{!!$top_description!!}</p> 
     
</div>

<div class="container">
    <div class="row  mb-5">

        @if (count($vehicles) === 0)
        <div class="container" style="height:550px; width: 1200px; display: flex; justify-content: center; align-items: center;">
            <img src="images/no_result.png" >
        </div>

        @endif


        @foreach ($vehicles as $vehicle)

               

        <div class="col-lg-4 p-2 "><!-- Individual card -->
            
            <div class="card shadow pt-2" style="max-width: 350px margin:auto; ;">
                <div class="container-fluid px-4">

                    <div class="swiper mySwiper mt-2">
                        <div class="swiper-wrapper">

                            
                            <div class="swiper-slide ">
                                
                                <img src="images/1.jpg"class="w-100  d-block" height="350">
                                
                            </div>

                            <div class="swiper-slide ">
                                
                                <img src="images/2.jpg"class="w-100  d-block" height="350">
                                
                            </div>

                            <div class="swiper-slide ">
                                
                                <img src="images/3.jpg"class="w-100  d-block" height="350">
                                
                            </div>
                            
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


                <div class="card-body">


                    <h4 class="card-title  h-font"> Vehicle Name: {{$vehicle->name}}</h4>
                    
                    
                    
                    <div class='row '>
                        <div class='col'>
                            <h5 class="card-title  h-font"> ID: {{$vehicle->vehicle_id}} </h5>
                            

                        </div>
                        <div class="col-lg-5 p-4">
                            <h5 class="card-title  h-font"> Start Time: {{$vehicle->start_time}} </h5>
						
						</div>
                        

                    </div>
                
                    <h6 class="card-title mb-2"> {{$vehicle->description}}</h6>



                    <div class="mt-4 mb-2"> <!-- Lower buttons -->
                    
                        <form method="GET" action="{{url('/')}}/booking/{{$vehicle->vehicle_id}}" >
                            
                            <button type="submit" name="vehicle_id" class="btn btn-primary">Book Now</button>
                        </form>
                    
                        
                    </div>
                    

			</div>
		</div>
	</div>

    @endforeach


</div>		

</div>

<x-footer/>