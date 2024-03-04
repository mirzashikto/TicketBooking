<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Vehicles;
use App\Models\Routes;
use App\Models\Stopages;
use App\Models\Seats;
use App\Models\Bookings;
use App\Models\Payments;

class BookingController extends Controller
{   

    public function booking($id) {
        if (session()->get('logged')==-1){
            return redirect('/');
        }

        session(['vehicle_id'=>$id]);
        if(session()->get('start')!=""){//user came by searching
            return redirect("/seats");
        }
        else{//user came from vehicle list
            $stopages = Stopages::distinct()->pluck('name');
            $vehicles=Vehicles::all();
            
            $data=compact('stopages','vehicles','id');
            
            return view('booking')->with($data);


        }
        
    }
    public function pre_seats(Request $request) {
        session(['vehicle_id'=>$request['vehicle_id']]);
        session(['date'=>$request['date']]);
        session(['start'=>$request['start']]);
        session(['end'=>$request['end']]);
        
        return redirect('/seats');
        
        
    }

    public function seats() {
        
        
        $vehicle =Vehicles::find(session()->get('vehicle_id')); //type wise filter 
        session(['start_time'=>$vehicle->start_time]); 
        session(['end_time'=>$vehicle->end_time]); 

        $route=Routes::where('route_id','=',$vehicle->route_id)->get(); 
        $route=Routes::find($route[0]->route_id);
        
        $route_id=$route->route_id;
        
        $start_stopage=Stopages::where('name','=',session()->get('start'))->where('route_id','=',$route_id)->get();//
        $end_stopage=Stopages::where('name','=',session()->get('end'))->where('route_id','=',$route_id)->get();
        
        $available_seats= [];
        $seats=Seats::where('vehicle_id','=',session()->get('vehicle_id'))->get();
        
        foreach ($seats as $seat){
            $available_seats[$seat->name]='booked';
            
            $available=TRUE;
            $bookings=Bookings::where('vehicle_id','=',session()->get('vehicle_id'))->
                            where('date','=',session()->get('date'))->
                            where('seat_id','=',$seat->seat_id)->get();
            if ($bookings->count()>0){
                foreach($bookings as $booking){
                    
                    $booked_start_distance=Stopages::where('name','=',$booking->start)->where('route_id','=',$route_id)->get()[0]->distance_from_start;
                    $booked_end_distance=Stopages::where('name','=',$booking->end)->where('route_id','=',$route_id)->get()[0]->distance_from_start;
                    $new_start_distance=Stopages::where('name','=',session()->get('start'))->where('route_id','=',$route_id)->get()[0]->distance_from_start;
                    $new_end_distance=Stopages::where('name','=',session()->get('end'))->where('route_id','=',$route_id)->get()[0]->distance_from_start;
                    
                    if ($new_end_distance<=$booked_start_distance or $new_start_distance>= $booked_end_distance){
                        
                    }
                    else{// previous ar new booking clash kortese.
                        
                        $available=FALSE;
                    }
                }

            }
            
            if ($available==TRUE){
                $available_seats[$seat->name]='available';
            }
        }
        
        ksort($available_seats);
        
        //finding cost
        $total_distance=$route->distance;
        $total_cost=$vehicle->price;
        if ($start_stopage->count()>0 and $end_stopage->count()>0){//start end duitai present
            if ($start_stopage[0]->distance_from_start<$end_stopage[0]->distance_from_start){//start er distance end theke kom kina. karon bus toh ar ulta dike jabe na
                
                $distance=$end_stopage[0]->distance_from_start-$start_stopage[0]->distance_from_start;
                $cost=($distance/$total_distance)*$total_cost;
                session(['cost'=>$cost]);                
                $data=compact('available_seats');
                return view('seats')->with($data);

            }
            
            
            
        }
        return redirect('/booking/'.session()->get('vehicle_id'));

    }
    public function confirm_booking(Request $request) {
        

        $cost= $request['cost'];
        $food_list="";

        if($request->has('breakfast')) {  $food_list.="Breakfast "; }
        if($request->has('lunch')) {       $food_list.="Lunch "; }
        if($request->has('dinner')) {    $food_list.="Dinner "; }
        $data=compact('request','cost','food_list');
        session(['foods'=>$food_list]);
        return view('confirm_booking')->with($data);
    }
    public function payment(Request $request) {
        session(['vehicle_id'=>$request['vehicle_id']]);
        session(['date'=>$request['date']]);
        session(['start'=>$request['start']]);
        session(['end'=>$request['end']]);
        session(['seats'=>$request['seats']]);
        
        session(['food_list'=>$request['food_list']]);
        session(['cost'=>$request['cost']]);
        
        return view('payment');
    }
    public function payment_complete(Request $request){
        

        //Filling payment
        $payment= new Payments;
        $payment->card_number=$request['card_number'];
        $payment->expiry=$request['expiry'];
        $payment->amount=(session()->get('cost'))/count(explode(",", session()->get('seats')));
        $payment->save();
        session(['transiction_id'=>$payment->transiction_id]);
        
        //filling booking 
        $jsseats= explode(",", session()->get('seats')); //split based on ,
        foreach($jsseats as $jsseat ){
            $booking =new Bookings;
            $seats=Seats::where('vehicle_id','=',session()->get('vehicle_id'))->where('name','=',$jsseat)->get(); 
            $booking->seat_id=$seats[0]->seat_id;
            $booking->status="Pending";
            $booking->vehicle_id=session()->get('vehicle_id');
            $booking->customer_id=session()->get('logged');
            $booking->transiction_id=session()->get('transiction_id');
            $booking->start=session()->get('start');
            $booking->end=session()->get('end');
            $booking->date=session()->get('date');
            $booking->foods=session()->get('foods');
            
            $booking->save();
            session(['booking_id'=>$booking->booking_id]);

        }
        
        return view('payment_complete');


    }
    
    
}
