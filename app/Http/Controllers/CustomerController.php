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
 
        $name = $validated['name'];
        $dui = $validated['dui'];
        $nit = $validated['nit'];
        return $name;
    }
}
