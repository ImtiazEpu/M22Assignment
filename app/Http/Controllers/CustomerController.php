<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }

    public function store(Request $request)
    {
        return Customer::create($request->all());
    }

    public function show($id)
    {
        return Customer::find($id);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return $customer;
    }

    public function destroy($id)
    {
        return Customer::destroy($id);
    }
}
