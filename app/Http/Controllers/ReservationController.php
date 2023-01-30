<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Reservations = Reservation::get();
        $result = [];
        foreach ($Reservations as $res){
            $res_to_send = [];
            $res_to_send["id"] = $res->id;
            $service=Service::findorfail($res->Service_Id);
            $res_to_send['Service'] = $service->Service_Name;
            $user=User::findorfail($res->User_Id );
            $res_to_send['User'] = $user->name;
            $res_to_send['location']= $res->City."/".$res->Street_Name."/".$res->Building_Number;
            // if (!$res->End_Time){
            //     $res->End_Time = "not yet determined";
            // }
            $res_to_send['Time']= $res->Start_Time." To ".$res->End_Time;
            // if (!$res->Total_Price){
            //     $res->Total_Price = "not yet determined";
            // }
            $res_to_send['Total_Price']= $res->Total_Price;
            $res_to_send['Status']= $res->Status;
            $res_to_send['Reject_Reason']= $res->Reject_Reason;
            array_push($result,$res_to_send);
        } 
        return view('admin.reservation.showreservation',['Reservations'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('admin.reservation.addreservation');
        // dd($id);
        return view('makereservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        $service = Service::findorfail($request->serviceid);
        $new_res=$request->validated();
        $request_date = Carbon::parse($request->Start_Time);
        $new_res["End_Time"]= $request_date->addHours($service->Service_Duration);
        $new_res["Total_Price"]= ($service->Service_Price);
        $new_res["Service_Id"]= ($request->serviceid);
        $new_res["User_Id"]= Auth::user()->id;
        // i will convert the date for number of seconds
        // start time in sec
        $date = $request->Start_Time;
        $pattern = "/[-\s:]/";
        $components = preg_split($pattern, $date);
        $pattern2 = "/[T]/";
        $split_day_hour = preg_split($pattern2, $components[2]);
        $new_start_time_sec =($components[0]*95255631) + ($components[1]*2628000) + ($split_day_hour[0]*86400) + ($split_day_hour[1]*3600) + ($components[3]*60);
        // check for working hours from 7am to 10pm
        if (($split_day_hour[1] >22) || ($split_day_hour[1] < 7))  {
            return back()->with('warning','Sorry our working hours is from 7am to 10pm') ;
        }
        $min_time_res=Carbon::now()->addDay()->toDatetimeString();
        $components = preg_split($pattern, $min_time_res);
        $min_time_res_sec =($components[0]*95255631) + ($components[1]*2628000) + ($components[2]*86400) + ($components[3]*3600) + ($components[4]*60);
        if ($new_start_time_sec < $min_time_res_sec)  {
            return back()->with('warning','Sorry, You must give us one day from now to review your request') ;
        }
        // end time in sec
        $end_time=$new_res["End_Time"]->toDatetimeString() ;
        $components = preg_split($pattern, $end_time);
        $new_end_time_sec =($components[0]*95255631) + ($components[1]*2628000) + ($components[2]*86400) + ($components[3]*3600) + ($components[4]*60);

        
        // $isResarved=Reservation::find($id);
        $reservations = Reservation::get()->where('Service_Id',$request->serviceid);
        foreach ($reservations as $res) {
            // $restime =Carbon::parse($res->Start_Time);
            // if ($restime->format('Y-m-d') == $request_date->format('Y-m-d')) {
            //     return back()->with('warning','this time is reserved pick another time') ;
            $pattern = "/[-\s:]/";
            $components = preg_split($pattern, $res->Start_Time);
            $res_start_time_sec =($components[0]*95255631) + ($components[1]*2628000) + ($components[2]*86400) + ($components[3]*3600) + ($components[4]*60);
            $components = preg_split($pattern, $res->End_Time);
            $res_end_time_sec =($components[0]*95255631) + ($components[1]*2628000) + ($components[2]*86400) + ($components[3]*3600) + ($components[4]*60);
            if ((($res_start_time_sec < $new_start_time_sec) && ($new_start_time_sec < $res_end_time_sec)) || (($res_start_time_sec < $new_end_time_sec) && ($new_end_time_sec < $res_end_time_sec))) {
                    return back()->with('warning','this time is reserved pick another time') ;
            }
        }
            Auth::user()->id;
            // dd($new_res["Total_Price"]);
        Reservation::create($new_res);
        // dd($request->validated());
        return back()->with('warning','THANK YOU ,your reservation will be confirmed soon');
            
        }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('makereservation',["serviceid" =>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Reservation $reservation,$str)
    {
        //
        $pattern = "/[ ]/";
        $components = preg_split($pattern, $str);
        // dd($components);    
        // return view('makereservation');
        $res = Reservation::findorFail($components[0]);
        $res->Status = $components[1];
        $res->save();
        return  to_route('Reservation.index') ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        dd("good");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $res = Reservation::findorFail($request->id);
        $res->Status = "Rejected";
        $res->Reject_Reason = $request->resone;
        $res->save();
        return  to_route('Reservation.index') ;
        // Reservation::findorfail($id)->delete();
        // return  to_route('Reservation.index')->with('danger','Reservation has Removed') ;
    }
    // public function cancel($id)
    // {
    //     //
    //     $res = Reservation::findorFail($id);
    //     $res->Status = "canceld";
    //     $res->save();
    //     return  to_route('Reservation.index')->with('success','Reservation has confirmed') ;
    // }

}
