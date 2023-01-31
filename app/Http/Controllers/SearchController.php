<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $search = $request->search;
        $results = Service::where('Service_Name', 'like', '%'.$search.'%')
            ->orWhere('Service_Description', 'like', '%'.$search.'%')
            ->get();
        return view('service', ['collection' =>$results]);
    }
}
