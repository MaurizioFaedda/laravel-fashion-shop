@extends('layouts.app')

@section('content')
    <div class="section-products">

        @foreach ($dresses as $dress)
            <div class="card">
                <div class="dress-img">

                </div>
                <div class="dress-info">
                    <h5>{{$dress->brand}}</h5>
                    <h6>{{$dress->model}}</h6>
                    <small>{{$dress->categories}} - {{$dress->color}}</small>
                    <h6>{{$dress->price}} €</h6>
                </div>
            </div>
        @endforeach

    </div>
@endsection
