<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

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
            if (!$res->End_Time){
                $res->End_Time = "not yet determined";
            }
            $res_to_send['Time']= $res->Start_Time." To ".$res->End_Time;
            if (!$res->Total_Price){
                $res->Total_Price = "not yet determined";
            }
            $res_to_send['Total_Price']= $res->Total_Price;
            $res_to_send['Status']= $res->Status;
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
        return view('admin.reservation.addreservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        // $request_date = Carbon::parse($request->Start_Time);
        // $reservations = Reservation::get();
        // foreach ($reservations as $res) {
        //     if ($res->Start_Time->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return back()->with('warning', 'This table is reserved for this date.');
        //     }}
        
        Reservation::create($request->validated());
        return to_route('Reservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation,$id)
    {
        //
        $res = Reservation::findorFail($id);
        $res->Status = "Confirmed";
        $res->save();
        return  to_route('Reservation.index')->with('success','Reservation has confirmed') ;
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Reservation::findorfail($id)->delete();
        return  to_route('Reservation.index')->with('danger','Reservation has Removed') ;
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
