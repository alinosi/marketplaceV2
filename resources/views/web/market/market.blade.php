{{-- <?php use app\core\Flasher as Flasher;?> --}}

@extends('layouts.web.main')

@section('container')
    <div class="container">
        <h2 class="text-center">Marketplace</h2>
        <div class="filter">
            <h5>Filter</h5>
            <select class="form-control" id="categoryFilter">
                <option value="" disabled selected>Select Category</option>
                <option value="elektronik">Electronics</option>
                <option value="olahraga">Sports</option>
            </select>
        </div>
        {{-- <?php Flasher::flash()?> --}}
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->product_name }}"> -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->product_name }}</h5>
                            <p class="card-text">Price: {{ $item->product_price }}</p>
                            <p class="card-text">Status: {{ $item->status }}</p>
                            <a href="market/{{ $item->product_id }}"><button class="btn btn-primary" data-toggle="modal">Details</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
