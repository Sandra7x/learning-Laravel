<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

     public function store(Request $request)
     {
          $requestData = $request->all();

          $customer = Customer::create([
               'name' => $requestData['name'],
               'lastname' => $requestData['lastname'],
               'city' => $requestData['city'],
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

     public function update(Request $request, Customer $customer)
     {
          $requestData = $request->all();

          $customer->name = $requestData['name'];
          $customer->lastname = $requestData['lastname'];
          $customer->city = $requestData['city'];

          $customer->save();

          return redirect()->route('customers.show', ['customer' => $customer]);
     }

     public function destroy(Customer $customer)
     {
          $customer->delete();
          return redirect()->route('customers.index');
     }
}
