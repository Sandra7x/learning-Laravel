<h1>Edit Customer</h1>
 

 

<form action={{ route('customers.update', ['customer' => $customer->id]) }} method="POST">
    @csrf
    
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