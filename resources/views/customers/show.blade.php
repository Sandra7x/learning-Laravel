<h2>Customer: {{ $customer->comments()->count()  . ' ' . 'comments' }}</h2>

{{ $customer->name }};
<br>
{{ $customer->lastname }};
<br>
{{ $customer->city }};

<h3>Comments:</h3>

<ul>
    @foreach ($customer->comments as $comment)
        <li>{{ $comment->author_name . ': ' . $comment->body}}</li>
    @endforeach
</ul>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('comments.store') }}" method="POST">
    @csrf

    <div>
    Author : <input type="text" name="author_name" value="{{old('author_name')}}">
    </div>
    <div>
    Body : <input type="text" name="body" value="{{old('body')}}">
    </div>
    
    <input type="hidden" name="commentable_id" value="{{ $customer->id }}">
    <input type="hidden" name="commentable_type" value="{{ get_class($customer); }}">

    <input type="submit">
</form>