<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'Service_Id'=>['required'],
            // 'User_Id'=>['required'],
            'City'=>['required'],
            'Street_Name'=>['required'],
            'Building_Number'=>['required'],
            'Start_Time'=>['required'],
            // 'End_Time'=>['required'],
            // 'Total_Price'=>['required'],
        ];
    }
}
