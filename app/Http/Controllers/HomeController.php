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

class HomeController extends Controller
{   
    public function index(){
        $stopages = Stopages::distinct()->pluck('name');
        $data=compact('stopages');
        return view('home')->with($data);
    }
    public function HomeFunctions(Request $request){
        
        $keys=(array_keys($request->all()));
        
        if ($keys[sizeof($keys)-1]=='login'){#checking the name of the submit button and taking action accordingly
            return ($this->login($request));
        }
        elseif ($keys[sizeof($keys)-1]=='register'){
            return ($this->register($request));
        }
        
    }
    public function login($request){
        $temp=Customers::where('username','=',$request['username'])->get();
        if ($temp->isEmpty()){
            $customer=NULL;
        }
        else{
            $customer=Customers::find($temp[0]->customer_id); //Customers er moddhe id ta find kortesi. id pacchi $temp[0]->customer_id theke
        }

          
        if ($customer == NULL){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Wrong username </strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
            
        }
        else{
            if ($customer->password==$request['password']){
                // echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                //     <strong>Welcome,user</strong> 
                //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //             </div>';//Alert from bootstrap
                session(['logged'=>$customer->customer_id]);                
                
            }
            else{
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Wrong password.</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';//Alert from bootstrap
                
            }
            


        }
        return $this->index();
        
    }
    public function register($request){
        $temp=Customers::where('username','=',$request['username'])->get();
        if ($temp->isEmpty()){
            $customer=NULL;
        }
        else{
            $customer=1;
        }

        if($customer==NULL and $request['password']==$request['confirm_password']){
            $customer= new Customers;
            $customer->username=$request['username'];
            $customer->password=$request['password'];
            $customer->name=$request['name'];
            $customer->email=$request['email'];
            $customer->phone=$request['phone'];
            $customer->house=$request['house'];
            $customer->street=$request['street'];
            $customer->area=$request['area'];
            $customer->country=$request['country'];
            $customer->zip=$request['zip'];
            $customer->dob=$request['dob'];
            $customer->save();

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Registration Successful. Please Login.</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';//Alert from bootstrap
            
    

        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Username already exist or passwords dont match. Try again</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';//Alert from bootstrap

        }


        return $this->index();
        

    }
    public function logout(){
        session(['logged'=>-1]);
        
        return redirect ('/');
    }

    //home page theke jokhon transport er see more e click korbe tokhon egula call hobe and corresponding data niye vehicles page e boshaye view return korbe.
    public function buses(){
        $tittle="Our Buses";
        session(['vehicle_id'=>""]);
        session(['start'=>""]);
        session(['end'=>""]);
        session(['date'=>""]);
        $top_description="Lorem Bus dolor, sit amet consectetur adipisicing elit. <br>Nulla minima nostrum exercitationem aliquam, porro voluptas culpa iusto mollitia eius eos.";
        $vehicles=Vehicles::where('category','=','Bus')->get();
        $data=compact('tittle','vehicles','top_description');
        return view('vehicles')->with($data);
    }
    public function trains(){
        $tittle="Our Trains";
        session(['vehicle_id'=>""]);
        session(['start'=>""]);
        session(['end'=>""]);
        session(['date'=>""]);
        $top_description="Lorem Train dolor, sit amet consectetur adipisicing elit. <br>Nulla minima nostrum exercitationem aliquam, porro voluptas culpa iusto mollitia eius eos.";
        $vehicles=Vehicles::where('category','=','Train')->get();
        $data=compact('tittle','vehicles','top_description');
        return view('vehicles')->with($data);
        
    }
    public function airplanes(){
        $tittle="Our Airplanes";
        session(['vehicle_id'=>""]);
        session(['start'=>""]);
        session(['end'=>""]);
        session(['date'=>""]);
        $top_description="Lorem Airplane dolor, sit amet consectetur adipisicing elit. <br>Nulla minima nostrum exercitationem aliquam, porro voluptas culpa iusto mollitia eius eos.";
        $vehicles=Vehicles::where('category','=','Airplane')->get();
        $data=compact('tittle','vehicles','top_description');
        
        return view('vehicles')->with($data);
    }
    
}
