<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
class Category extends Model
{
    use HasFactory;
    public function service (){
        return $this->hasMany(Service::class);
    }
    protected $fillable = [
        'Category_Name',
        'Category_Image',
        'Category_Description',
        
       
    ];
}
