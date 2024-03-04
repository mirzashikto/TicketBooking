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
use App\Models\Admin_cred;
class AdminController extends Controller
{
    public function index(){
        session(['admin_logged'=>-1]);   
        return view('adminlogin');

    }
    public function logincheck(Request $request){
        
        $temp=Admin_cred::where('admin_name','=',$request['admin_name'])->get();
        if ($temp->isEmpty()){
            return redirect('/admin');
        }
        else{
            $admin=Admin_cred::find($temp[0]->admin_id); 
            if ($admin->admin_pass==$request['admin_pass']){
                
                session(['admin_logged'=>$admin->admin_id]);                
                return redirect('/dashboard');
            }
            
        }
        return redirect('/admin');

   

    }
    public function dashboard(){
        if (session()->get('admin_logged')==-1){
            return redirect('/admin');

        }
        else{

            $vehicles=Vehicles::all();
            $routes=Routes::all();
            $bookings=Bookings::all();
            $data=compact('vehicles','routes','bookings');
            return view('dashboard')->with($data);
        }
            

    }

    

    public function modify_route(Request $request){
        if ($request->has('delete')){
            return redirect('/route_delete/'.$request['route_id']);
        }
        elseif ($request->has('update')){
            return redirect('/route_update/'.$request['route_id']);
        }
        elseif ($request->has('manage_stopage')){
            return redirect('/manage_stopage/'.$request['route_id']);
        }
        else{
            
            return redirect('/route_add');
        }
    }


    public function modify_vehicle(Request $request){
        if ($request->has('delete')){
            return redirect('/vehicle_delete/'.$request['vehicle_id']);
        }
        elseif ($request->has('update')){
            return redirect('/vehicle_update/'.$request['vehicle_id']);
        }
        
        else{
            
            return redirect('/vehicle_add');
        }
    }



    public function route_update($id){

        $route=Routes::find($id);
        
        $data=compact('route');
        return view("route_update")->with($data);
    }
    public function route_add(){
        return view("route_add");
    }
    public function route_delete($id){
        Routes::find($id)->delete(); 
        return redirect('/dashboard');
    }
    public function manage_stopage($id){
        $route=Routes::find($id);
        
        $data=compact('route');
        return view("stopage_add")->with($data);
    }




    public function route_update_data(Request $request){

        $route=Routes::find($request['route_id']);
        
        $route->start=$request['start'];;
        $route->end=$request['end'];;
        $route->distance=$request['distance'];;
        $route->type=$request['type'];;
       
        $route->save();
        return redirect('/dashboard');
    }
    public function route_add_data(Request $request){
        $route= new Routes;
        $route->start=$request['start'];
        $route->end=$request['end'];
        $route->type=$request['type'];
        $route->distance=$request['distance'];
     
        $route->save();

        //Start and end ke stopage hisabe add kortesi

        $stopage= new Stopages;
        $stopage->name=$request['start'];
        $stopage->distance_from_start=0;
        $stopage->route_id=$route->route_id;
        $stopage->save();

        $stopage= new Stopages;
        $stopage->name=$request['end'];
        $stopage->distance_from_start=$request['distance'];
        $stopage->route_id=$route->route_id;
        $stopage->save();

        return redirect('/dashboard');
    }

    public function manage_stopage_data(Request $request){
        $route=Routes::find($request['route_id']);
        if ($route->distance>$request['distance_from_start']){

            $stopage= new Stopages;
            $stopage->name=$request['name'];
            $stopage->distance_from_start=$request['distance_from_start'];
            $stopage->route_id=$request['route_id'];
            $stopage->save();


        }
       
        
      
        
        return redirect('/dashboard');
    }




    public function vehicle_update($id){
        $vehicle=Vehicles::find($id);
        $routes=Routes::all();
        $data=compact('vehicle','routes');
        return view("vehicle_update")->with($data);
    }
    public function vehicle_add(){
        $routes=Routes::all();
        $data=compact('routes');
        return view('vehicle_add')->with($data);
    }
    public function vehicle_delete($id){
        Vehicles::find($id)->delete(); 
        return redirect('/dashboard');
    }




    public function vehicle_update_data(Request $request){
        $vehicle=Vehicles::find($request['vehicle_id']);
        
        $vehicle->name=$request['name'];
        $vehicle->category=$request['category'];
        $vehicle->route_id=$request['route_id'];
        $vehicle->start_time=$request['start_time'];
        $vehicle->end_time=$request['end_time'];
        $vehicle->price=$request['price'];
        $vehicle->category=$request['category'];
        $vehicle->description=$request['description'];
        $vehicle->started_at=date("H:i:s");
       
        $vehicle->save();
        return redirect('/dashboard');
    }
    public function vehicle_add_data(Request $request){


        $vehicle= new Vehicles;
        $vehicle->name=$request['name'];
        $vehicle->category=$request['category'];
        $vehicle->route_id=$request['route_id'];
        $vehicle->start_time=$request['start_time'];
        $vehicle->end_time=$request['end_time'];
        $vehicle->price=$request['price'];
        $vehicle->category=$request['category'];
        $vehicle->description=$request['description'];
        $vehicle->total_seats=$request['total_seats'];
        $vehicle->started_at=date("H:i:s");
      
        $vehicle->save();

        //Seat managing

        $char=64;
        
        for ($i = 0; $i < ($request['total_seats']); $i++) {
            if ($i%4==0){
                $char+=1;
            }
            $name =chr($char).strval($i%4+1);

            $seat= new Seats;
            $seat->name=$name;
            $seat->type="Normal";
            $seat->vehicle_id=$vehicle->vehicle_id;

            $seat->save();

        }
        

        return redirect('/dashboard');
    }




    public function booking_approve($id){
        $booking=Bookings::find($id);
        $booking->status="Approved";
        $booking->save();


        return redirect('/dashboard');
    }
    public function booking_cancel($id){
        $booking=Bookings::find($id);
        $booking->status="Canceled";
        $booking->save();
        return redirect('/dashboard');
    }
    public function booking_cancel_customer($id){
        $booking=Bookings::find($id);
        $booking->status="Canceled";
        $booking->save();
        return redirect('/user_profile/#my_bookings');
    }
    public function receipt($id){
        $booking=Bookings::find($id);
        $payment=Payments::find($booking->transiction_id);
        $customer=Customers::find($booking->customer_id);
        $seat=Seats::find($booking->seat_id);
        $vehicle=Vehicles::find($booking->vehicle_id);
        $data=compact('booking','payment','customer','vehicle','seat');
        return view("receipt")->with($data);
    }

    public function reset(){
        Admin_cred::truncate();
        $admin= new Admin_cred;
        $admin->admin_name="bracu";
        $admin->admin_pass="123";
        $admin->save();
        Bookings::truncate();
        Stopages::truncate();

        $temps=Payments::all();
        foreach ($temps as $temp){
            Payments::find($temp->transiction_id)->delete();

        }

        $temps=Seats::all();
        foreach ($temps as $temp){
            Seats::find($temp->seat_id)->delete();

        }
        $temps=Vehicles::all();
        foreach ($temps as $temp){
            Vehicles::find($temp->vehicle_id)->delete();

        }
        $temps=Routes::all();
        foreach ($temps as $temp){
            Routes::find($temp->route_id)->delete();

        }
        $temps=Customers::all();
        foreach ($temps as $temp){
            Customers::find($temp->customer_id)->delete();

        }
        
        
        
        


       
        return redirect('/dashboard');

    }

}
