<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Customers;
use App\Models\Vehicles;
use App\Models\Routes;
use App\Models\Stopages;
use App\Models\Seats;
use App\Models\Bookings;
use App\Models\Payment;
use App\Mail\MailNotify;
class MailController extends Controller
{
    public function sendmail(Request $request){
        $customers=Bookings::where('vehicle_id','=',$request['vehicle_id'])->where('date','=',$request['date'])->distinct()->pluck('customer_id');;
        $vehicle=Vehicles::find($request['vehicle_id']);
        

        
        
        if ($request->has('custom')){
            $date=$request['date'];
            $vehicle_id=$request['vehicle_id'];
            $data=compact('date','vehicle_id');
            return view('custommail')->with($data);
        }

        foreach($customers as $temp){
            $customer=Customers::find($temp);

            if ($request->has('late')){
                $data=[
                'subject'=>' Late Notification',
                'body'=>"Hi ".$customer->name." we are sorry to inform you that your train ".$vehicle->name." would be late.\n \n Please Contact +880174884859 for more details."
    
    
            ];
            }
            elseif ($request->has('reminder')){
                $data=[
                'subject'=>' Reminder Notification',
                'body'=>"Hi,".$customer->name.". This is a gentle reminder that you have a journey with ".$vehicle->name." on ".$request['date'].".\n \n Thank you for choosing Bracu Tickets."
    
    
            ];
            }
            Mail::to($customer->email)->send(new MailNotify($data));


        }

        
//        Mail::to('mirzashikto@gmail.com')->send(new MailNotify($data));
        return redirect('/dashboard');

    }
    public function custom(Request $request){
        $customers=Bookings::where('vehicle_id','=',$request['vehicle_id'])->where('date','=',$request['date'])->distinct()->pluck('customer_id');;
        $vehicle=Vehicles::find($request['vehicle_id']);
        foreach($customers as $temp){
            $customer=Customers::find($temp);

            
            $data=[
            'subject'=>$request['subject'],
            'body'=>$request['body']
            ];
            
            Mail::to($customer->email)->send(new MailNotify($data));


        }

        
//        Mail::to('mirzashikto@gmail.com')->send(new MailNotify($data));
        return redirect('/dashboard');


    }
}
