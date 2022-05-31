<h1>Create Customer</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 

<form action={{ route('customers.store') }} method="POST">
    @csrf
    
    <div>
        Name: <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div>
        Lastname: <input type="text" name="lastname" value="{{ old('lastname') }}">
    </div>
    <div>
        City: <input type="text" name="city" value="{{ old('city') }}">
    </div>

        <input type="submit">

</form>