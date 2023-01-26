<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    use HasFactory;
    public function cat (){
        return $this->belongsTo(Category::class);
    }
    public function Reservation1 (){
        return $this->hasMany(Reservation::class);
    }
    protected $fillable = [
        'Service_Name',
        'Category_id',
        'Service_Description',
        'Service_Image',
        'Service_Price',
        'Service_Duration',
       
    ];
}
