@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif
<div class="row justify-content-center text-center mt-5 p-5 mx-5 bg-white rounded">
		<h1 class="p-3"><i class="bi bi-check-circle-fill text-success "></i></h1>
		<h2 class="mb-4">Booking Confirmed</h2>
		We are pleased to inform you that your booking request has been received.<br>

		<div class="mt-5">
			<button class="btn btn-outline-dark shadow-none me-lg-2 m-3" >
				<a class="text-decoration-none text-primary" href="{{url('/')}}">Go to home</a>
			</button>
			
		</div>
	</div>
	


<x-footer/>		