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

    public function getLatestAddressId()
    {
        try {
            $latestAddress = CustomerInfo::orderBy('id', 'desc')->first();;
            if ($latestAddress) {
                //lastestCartId returns the array of the carts and products
                 return response()->json(['latestAddressId' => $latestAddress]);
            } else {
                return response()->json(['message' => 'No address found.'], 404);
            }
        } catch (\Exception $e) {
            // Log the error or return a specific error response
            return response()->json(['error' => 'Failed to fetch latest address ID.'], 500);
        }
    }
}
