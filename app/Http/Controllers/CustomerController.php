<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;

use App\Models\Customer;

class CustomerController extends Controller
{
     public function index()
     {
          $customers = Customer::get();
          return view('customers.index', [
               'customers' => $customers,
          ]);
     }

     public function create()
     {
          return view('customers.create');
     }

     public function store(CustomerCreateRequest $request)
     {
          // $validatedData = $request ->validate([
          //      'name' =>  'required',
          //      'lastname' => 'required|unique:customers|max:25',
          //      'city' => 'nullable'
          // ]);

          $validatedData = $request ->validated();

          $customer = Customer::create([
               'name' => $validatedData['name'],
               'lastname' => $validatedData['lastname'],
               'city' => $validatedData['city'],
          ]);

          $customer->save();

       return redirect()->route('customers.show', ['customer' => $customer]);
     }

     public function show(Customer $customer)
     {
          return view('customers.show', [
               'customer' => $customer,
          ]);
     }

     public function edit(Customer $customer)
     {
          return view('customers.edit', [
               'customer' => $customer,
          ]);
     }

     public function update(CustomerUpdateRequest $request, Customer $customer)
     {
          $validatedData = $request ->validated();
          // $validatedData = $request ->validate([
          //      'name' =>  'required',
          //      'lastname' => 'required',
          //      'city' => 'nullable'
          // ]);

          // $requestData = $request->all();

          $customer->name = $validatedData['name'];
          $customer->lastname = $validatedData['lastname'];
          $customer->city = $validatedData['city'];

          $customer->save();

          return redirect()->route('customers.show', ['customer' => $customer]);
     }

     public function destroy(Customer $customer)
     {
          $customer->delete();
          return redirect()->route('customers.index');
     }
}
