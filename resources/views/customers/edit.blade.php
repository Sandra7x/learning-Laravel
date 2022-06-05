<h1>Edit Customer</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 

<form action={{ route('customers.update', ['customer' => $customer->id]) }} method="POST">
    @csrf
    
    <input type="hidden" name="id" value="{{ $customer->id }}">
    <div>
        Name: <input type="text" name="name" value="{{ $customer->name }}">
    </div>
    <div>
        Lastname: <input type="text" name="lastname" value="{{ $customer->lastname }}">
    </div>
    <div>
        City: <input type="text" name="city" value="{{ $customer->city }}">
    </div>

        <input type="submit">

</form>