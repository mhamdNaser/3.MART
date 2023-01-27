<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory ,SoftDeletes;
    public function user (){
        return $this->belongsTo(User::class);
    }
    public function service (){
        return $this->belongsTo(Service::class);
    }
    protected $fillable = [
        'Service_Id',
        'User_Id',
        'City',
        'Street_Name',
        'Building_Number',
        'Start_Time',
        'End_Time',
        'Total_Price',
        'Status',
       
    ];
}
