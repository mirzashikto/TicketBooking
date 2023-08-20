<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Vehicles;
use App\Models\Routes;
use App\Models\Stopages;
use App\Models\Seats;
use App\Models\Bookings;
use App\Models\Payment;
use Carbon\Carbon;


class UserProfileController extends Controller
{
    public function index(){
           
        $customer=Customers::find(session()->get('logged'));
        $bookings=Bookings::where('customer_id','=',session()->get('logged'))->get();
        

        
        
        $data=compact('customer','bookings');
        
    
        return view('user_profile')->with($data);

    }
    public function UserProfileFunctions(Request $request){#for post methods
        $keys=(array_keys($request->all()));
        
        if ($keys[sizeof($keys)-1]=='saveprofile'){#checking the name of the submit button and taking action accordingly
            return ($this->saveprofile($request));
        }


        else{

            return $this->index();
        }

    }
    public function saveprofile($request){
        
        $customer=Customers::find(session()->get('logged'));
        
        $customer->name=$request['name'];;
        $customer->email=$request['email'];;
        $customer->phone=$request['phone'];;
        $customer->house=$request['house'];;
        $customer->street=$request['street'];;
        $customer->area=$request['area'];;
        $customer->country=$request['country'];;
        $customer->zip=$request['zip'];;
        $customer->save();


        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Succcessfully updated.</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';//Alert from bootstrap
            
        return redirect('/user_profile');

    }
    
    
}
