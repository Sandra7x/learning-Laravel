@extends('dashboard')

@section('content')
    <div class="mx-12 border-solid border-2 rounded-md border-red-700 w-max">
    

        <table class="border-separate border border-slate-500 text-xl">
            <thead>
                <tr>
                    <th class="border border-slate-600">ID</th>
                    <th class="border border-slate-600 ">Name</th>
                    <th class="border border-slate-600">Lastname</th>
                    <th class="border border-slate-600">City</th>
                    <th class="border border-slate-600">Actions</th>
                    <th class="border border-slate-600">Comment count</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                    <td class="border border-slate-700 px-3">{{ $customer->id }}</td>
                    <td class="border border-slate-700 w-40 px-3">{{ $customer->name }}</td>
                    <td class="border border-slate-700 w-40 px-3">{{ $customer->lastname }}</td>
                    <td class="border border-slate-700 w-40 px-3">{{ $customer->city }}</td>
                    <td>
                        <button class="text-lg bg-lime-700 rounded-md shadow-stone-500 leading-snug font-black w-36">
                            <a href="{{ route('customers.show', ['customer'=> $customer->id]) }}">Show</a>
                        </button>
                      
                        <button class="text-lg bg-lime-700 rounded-md shadow-stone-500 text-white leading-snug w-28">
                            <a href="{{ route('customers.edit', ['customer'=> $customer->id]) }}">Edit</a>
                        </button>
                         
                        <button class="text-lg bg-lime-500 outline outline-offset-2 outline-black rounded-md text-red-500 leading-snug w-24">
                            <a href="{{ route('customers.destroy', ['customer'=> $customer->id]) }}">Delete</a>
                        </button>
                    <td class="border border-slate-700 w-40 px-3">{{ $customer->comments->count() }}</td>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="h-12">
        <button class="text-lg bg-lime-700 rounded-md shadow-stone-500 leading-snug text-white h-12 w-32">
            <a href="{{ route('customers.create') }}">Create</a>
        </button>
    </div>   

    </div>
@endsection