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
class SearchController extends Controller
{
    public function index(Request $request){
        
        $accepted_routes=array();
        $routes=Routes::where('type','=',$request['type'])->get(); //type wise filter
        
        foreach ($routes as $route) {// bus select korle all possible bus route er loop
            $route_id=$route->route_id;
            //check kortesi je user er given start ar end duitai ei route e present kina.
            $start_stopage=Stopages::where('name','=',$request['start'])->where('route_id','=',$route_id)->get();//
            $end_stopage=Stopages::where('name','=',$request['end'])->where('route_id','=',$route_id)->get();
            
            if ($start_stopage->count()>0 and $end_stopage->count()>0){//start end duitai present
                if ($start_stopage[0]->distance_from_start<$end_stopage[0]->distance_from_start){//start er distance end theke kom kina. karon bus toh ar ulta dike jabe na
                    array_push($accepted_routes,$route_id); //append in array
                }
                
                
            }
            
        }
        session(['vehicle_id'=>""]);
        session(['start'=>$request['start']]);
        session(['end'=>$request['end']]);
        session(['date'=>$request['date']]);

        $vehicles=Vehicles::whereIn('route_id', $accepted_routes)->get(); //all vehicles of accepted routes.
        $tittle=$request['type']." from ". $request['start']." to ".$request['end']." on ".$request['date'];
        $top_description="";
        $data=compact('tittle','vehicles','top_description');
        
        return view('vehicles')->with($data);

    
        
    }
}
