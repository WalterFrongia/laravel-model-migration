@extends("layouts.main")

@section("content")
    @foreach($travels as $travel)
    <div id="content-container">
        <div id="ticket-content">
            <h3>Place:{{$travel->place}}</h3>
            <p>Price:{{$travel->price}}</p>
        </div>
    </div>
    @endforeach
@endsection