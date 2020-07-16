<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Address;
use App\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('addresses')
                    ->join('customers', 'customers.address_id', '=', 'addresses.id')
                    ->get();
        // $customers = Address::orderBy('created_at','desc')->customers;
        return view('customer.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()-> validate([
            'address_name' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required'
        ]);
        $lastid = Address::create($data)->id;

        $data2 = array(
            'address_id' => $lastid,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email
        );
        Customer::insert($data2);

        return redirect('/customer')->with('success','customer Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
