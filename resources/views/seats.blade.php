@if (session()->has('logged') and session()->get('logged')!=-1)
    <x-header_logged/>
@else
    <x-header/>

@endif
	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">Available Seats</h2>
		<div class="h-line bg-dark"></div>

	</div>

  <form method="POST"action="/confirm_booking">
    @csrf
	<div class="container mb-5">
		
		<div class="row justify-content-center">
			<div class="col-lg-4 shadow-none bg-white rounded p-5">
				<div class="seat-status">
					<ul class="seat-availablity">
						<li><span>Available</span>
						<div class="seat-available"></div>
						</li>
						<li><span>Booked</span>
						<div class="seat-booked"></div>
						</li>
						<li><span>Selected</span>
						<div class="seat-selected"></div>
						</li>
					</ul>
				</div>
				<div class="foods">
					<h4>Select Foods:</h4>
					<input type="checkbox" id="breakfast" name="breakfast" value="breakfast">
					<label for="breakfast"> Breakfast</label><br>
					<input type="checkbox" id="lunch" name="lunch" value="lunch">
					<label for="lunch">Lunch</label><br>
					<input type="checkbox" id="dinner" name="dinner" value="dinner">
					<label for="dinner">Dinner</label><br><br>
					
				</div>
			</div>

			

			<div class="col-lg-4 shadow-none bg-white rounded p-5">
			  <div class="container">
				  <div class="bus-container">
					  <img width="50" height="50" src="https://img.icons8.com/ios/50/driver.png" alt="driver" class="driver-img" />
					  <div class="passenger-seats">

            
					    <div class="right">
						  
                <div class="row-four">
                @foreach($available_seats as $seat => $availability)
                @if(substr($seat,1)=='1')
                  @if($availability=='available')<div class="seat">{{$seat}}</div>@endif
                  @if($availability=='booked')<div class="seat booked">{{$seat}}</div>@endif
                @endif
                @endforeach
                </div>
                <div class="row-two">
                @foreach($available_seats as $seat => $availability)
                @if(substr($seat,1)=='2')
                  @if($availability=='available')<div class="seat">{{$seat}}</div>@endif
                  @if($availability=='booked')<div class="seat booked">{{$seat}}</div>@endif
                @endif
                @endforeach 
                </div>
					    </div>
              <div class="left">
                
                <div class="row">
                @foreach($available_seats as $seat => $availability)
                @if(substr($seat,1)=='3')
                  @if($availability=='available')<div class="seat">{{$seat}}</div>@endif
                  @if($availability=='booked')<div class="seat booked">{{$seat}}</div>@endif
                @endif
                
                @endforeach
                </div>
                <div class="row">
                @foreach($available_seats as $seat => $availability)
                @if(substr($seat,1)=='4')
                  @if($availability=='available')<div class="seat">{{$seat}}</div>@endif
                  @if($availability=='booked')<div class="seat booked">{{$seat}}</div>@endif
                @endif
                @endforeach
                </div>
                
                
              </div>

              
              </div>
            </div>

            <div>
              
					
					
				</div>
				</div>
    <!-- Display the total price here -->
    

			</div>
			
			<div class="col-lg-4 shadow-none bg-white rounded p-5">
				
				

					<div class="row py-4 align-items-end">

						<div class="class col">
							<label class="form-label fw-bold">Vehicle ID</label>
							<input name="vehicle_id" type="number" class="form-control shadow-none" readonly="true"  value="{{session()->get('vehicle_id')}}">

						</div>

						<div class="col">

							<label class="form-label fw-bold">Journey Date</label>
							<input name="date" type="date" class="form-control shadow-none" readonly="true" value="{{session()->get('date')}}">


						</div>
						
						
						
                       
						
						

					</div>
					<div class="row mb-3">
							
							
						
						<div class="col">

							<label class="form-label fw-bold">Start Time</label>
							<input name="start_time" type="time" class="form-control shadow-none" readonly="true" value="{{session()->get('start_time')}}">


						</div>
						<div class="col">

							<label class="form-label fw-bold">End Time</label>
							<input name="start_time" type="time" class="form-control shadow-none" readonly="true" value="{{session()->get('end_time')}}">


						</div>
							
							

					</div>
					<div class="row">
						<div class="class col">
							<label class="form-label fw-bold">Start</label>
							<input name="start" type="text" class="form-control shadow-none" readonly="true" value="{{session()->get('start')}}">



						</div>
                        <div class="class col">
							<label class="form-label fw-bold">End</label>
							<input name="end" type="text" class="form-control shadow-none" readonly="true" value="{{session()->get('end')}}">



						</div>

					</div>
					<br>
					
					<div class="row">
						<div class="row p-4">
            
                <input type="hidden" name="cost" id="jstotal-price" />
                <input type="hidden" name="seats" id="jsseats" />
                <button id="submit-btn">Submit</button>
				    

							
						</div>
					
					
					<label class="form-label"><h4 class="h-font"><span id="total-price">Total Price: $0.00</span></h4></label>
					

					<label class="form-label"><h4 class="h-font">Selected seats:<br><br><ul id="details"></ul></h4></label>
					

			</div>
						

						



					</div>
        
          
          
        


			</div>


		</div>

	</div>
  </form>

	<br>
	<br><br><br>

<x-footer/>

<script>
  // elements
  const seats = document.querySelectorAll(".seat");
  const foods = document.querySelectorAll("input[type=checkbox]");
  const showDetails = document.querySelector("#details");
  const submit = document.querySelector("#submit-btn");
  const checkoutSeats = document.querySelector("#checkout-list");
  const checkoutFoods = document.querySelector("#checkout-foods");
  const totalPriceElement = document.getElementById("total-price");
  const jstotalPriceElement = document.getElementById("jstotal-price");
  const jsseatsElement = document.getElementById("jsseats");
  

  let selectedFoods = [];
  let selectedSeats = [];

  const seatPrice = {{session()->get('cost')}};
  const foodPrice = 80;

  function updateTotalPrice() {
    const selectedSeatsPrice = selectedSeats.length * seatPrice;
    const selectedFoodsPrice = selectedSeats.length *selectedFoods.length * foodPrice;
    const totalPrice = (selectedSeatsPrice + selectedFoodsPrice).toFixed(2);
    totalPriceElement.textContent = `Total Price: $${totalPrice}`;
    jstotalPriceElement.value = totalPrice;
    jsseatsElement.value = selectedSeats;
    
  }

  seats?.forEach((seat) => {
    seat.addEventListener("click", function () {
      showDetails.innerHTML = "";

      if (!this.className.includes("selected") && !this.className.includes("booked")) {
        this.classList.add("selected");
        selectedSeats.push(this.innerText);
      } else if (this.className.includes("selected") && !this.className.includes("booked")) {
        this.classList.remove("selected");
        selectedSeats = selectedSeats.filter((item) => item !== this.innerText);
      }

      if (selectedSeats.length > 0) {
        selectedSeats.forEach((item) => {
          listItemElement = document.createElement("li");
          listItemElement.textContent = item;
          showDetails.appendChild(listItemElement);
        });
      }

      updateTotalPrice();
    });
  });

  foods.forEach((food) => {
    food.addEventListener("change", function () {
      if (this.checked && !selectedSeats.includes(this.value)) {
        selectedFoods.push(this.value);
      } else if (!this.checked) {
        selectedFoods = selectedFoods.filter((item) => item !== this.value);
      }

      updateTotalPrice();
    });
  });

  submit.addEventListener("click", function () {
    alert(`Your Seats Are: ${selectedSeats.join(",")} and foods are: ${selectedFoods.join(",")}`);
  });
</script>

  

  <style>
    * {
    margin: 0;
    padding: 0;
  }
  
  body {
    background: rgb(233, 233, 233);
  }
  
  li {
    list-style: none;
  }
  
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    z-index: 100000;
    flex-wrap: wrap;
  }
  
  .bus-container {
    border: 2px solid #000;
    max-width: max-content;
    padding: 2rem;
  }
  .passenger-seats {
    display: flex;
    gap: 10rem;
  }
  .right {
    display: flex;
    gap: 2rem;
  }
  .left {
    display: flex;
    gap: 2rem;
  }
  .seat {
    border: 2px solid #000;
    height: 2rem;
    width: 2rem;
    margin-top: 0.875rem;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  .driver {
    height: 2rem;
    width: 2rem;
  }
  .driver-img {
    display: block;
    margin-left: auto;
  }
  
  .seat-status {
    border: 2px solid #000;
    max-width: max-content;
    padding: 2rem;
  }
  .seat-availablity {
    display: flex;
    gap: 1rem;
    justify-content: center;
    align-items: center;
  }
  .seat-booked {
    background-color: #000;
    margin: 0.875rem auto;
    border: 2px solid #000;
    height: 2rem;
    width: 2rem;
    background-color: #97e6e6;
  }
  .seat-selected {
    background-color: rgb(204, 213, 80);
    margin: 0.875rem auto;
    border: 2px solid #000;
    height: 2rem;
    width: 2rem;
  }
  .seat-available {
    margin: 0.875rem auto;
    border: 2px solid #000;
    height: 2rem;
    width: 2rem;
  }
  .seat-availablity li {
    text-align: center;
  }
  
  .selected {
    background-color: rgb(204, 213, 80);
  }
  
  .booked {
    background-color: #97e6e6;
  }
  
  .foods {
    border: 2px solid #000;
    max-width: max-content;
    padding: 2rem;
    margin-top: 10px;
  }
  
  #submit-btn {
    text-decoration: none;
    color: #fff;
    background-color: rgb(137, 177, 251);
    padding: 0.5rem;
    border-radius: 5px;
  }
  
  </style>
