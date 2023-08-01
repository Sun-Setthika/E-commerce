<?php

namespace App\Http\Controllers;

use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class CustomerInfoController extends Controller
{
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            return CustomerInfo::create([
                'address' => $request->address,
                'country' => $request->country,
                'state' => $request->state,
                'phone_number' => $request->phone_number,
                'zip' => $request->zip,
               
            ]);
        
    }
}
