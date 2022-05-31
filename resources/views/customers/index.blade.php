<a href="{{ route('customers.create') }}">Create</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>City</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
             <tr>
             <td>{{ $customer->id }}</td>
             <td>{{ $customer->name }}</td>
             <td>{{ $customer->lastname }}</td>
             <td>{{ $customer->city }}</td>
             <td>
             <a href="{{ route('customers.show', ['customer'=> $customer->id]) }}">Show</a>
             <a href="{{ route('customers.edit', ['customer'=> $customer->id]) }}">Edit</a>
             <a href="{{ route('customers.destroy', ['customer'=> $customer->id]) }}">Delete</a>
             </td>
             </tr>
        @endforeach
    </tbody>
</table>