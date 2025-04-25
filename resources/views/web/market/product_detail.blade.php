{{-- <?php use app\core\Flasher as Flasher;?> --}}

@extends('layouts.web.main')

@section('container')
    <div class="container">
        <h2 class="text-center">{{ $data->product_name }}</h2>
        {{-- <?php Flasher::flash()?> --}}
        <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- <img src="{{ $data->image }}" class="card-img-top" alt="{{ $data->product_name }}"> -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->product_name }}</h5>
                            <p class="card-text">Price: {{ $data->product_price }}</p>
                            <p class="card-text">Status: {{ $data->status }}</p>
                            <p class="card-text">Category: {{ $data->category-> categories }}</p>
                            <p class="card-text">Description: {{ $data->description }}</p>
                            <p class="card-text">Seller: {{ $data->user->name }}</p>
                            <a href="market/{{ $data->product_id }}"><button class="btn btn-primary" data-toggle="modal">Orders</button></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
