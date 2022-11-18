<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Store Customer
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     **/
    public function store(StoreCustomerRequest $request)
    {
        //Validate and store data
        $validated = $request->safe();

        return $validated;
    }
}
