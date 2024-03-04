@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif
<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">Payment</h2>
		<div class="h-line bg-dark"></div>

		
</div>
	
<form method="POST" action="{{url('/')}}/payment_complete">
@csrf
<div class="modal-content">
    <form method="POST">
        
        <div class="modal-body py-5   row justify-content center">

            <div class="container col-lg-4 bg-light shadow rounded p-5">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label me-3 mb-3"><h5>Payment Method</h5>  </label>
                            <i class="bi bi-credit-card-2-back"></i>
                            <i class="bi bi-wallet2 "></i>
                            <i class="bi bi-credit-card"></i>
                            
                            <select name="card_type"class="form-select" >
                                <option value="credit">Credit Card</option>
                                <option value="visa">Visa Card</option>
                                <option value="master">Master Card</option>


                            </select>


                        </div>
                    </div>
                    

                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label"><h6>CARD NUMBER</h6></label>
                            <input name="card_number" type="number" class="form-control shadow-none" required>

                        </div>
                    </div>
                    
                    
                </div>
                
                
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label"><h6>CVC/CVV</h6></label>
                            <input  name="cvc" type="number" class="form-control shadow-none" required >

                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label"><h6>EXPIRY DATE</h6></label>
                            <input name="expiry" type="date" class="form-control  shadow-none" required min="{{date('Y-m-d')}}" >

                        </div>
                    </div>
                    
                </div>


                
                

                <div class="d-flex flex-row-reverse">
                    <button name="pay" type="submit" class="btn btn-outline-dark shadow-none mt-4" >
                    <h5 class="pt-1">Pay ${{session()->get('cost')}} <i class=" mx-2 bi bi-arrow-right-circle"></i></h5>
                </button>


                </div>
                
                
            </div>

        </div>
    </form>
</div>
</form>

<x-footer/>		