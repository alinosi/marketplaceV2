<?php use app\core\Flasher as Flasher;?>

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
            @foreach ($data as $index => $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- <img src="{{ $item->image }}$item['image'] }}" class="card-img-top" alt="{{ $item['name'] }}"> -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['Product_Name'] }}</h5>
                            <p class="card-text">Price: {{ $item['Price'] }}</p>
                            <p class="card-text">Status: {{ $item['Status'] }}</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#productDetails{{ $index }}">Details</button>
                        </div>
                    </div>
                </div>
            @endforeach
    
            @foreach ($data as $index => $item)
                <div class="modal fade" id="productDetails{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="productDetailsLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productDetailsLabel{{ $index }}">Detail Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Name:</strong> {{ $item['Product_Name'] }}</p>
                                <p><strong>Price:</strong> {{ $item['Price'] }}</p>
                                <p><strong>Store Address:</strong> {{ $item['Owner_Address'] }}</p>
                                <p><strong>Status:</strong> {{ $item['Status'] }}</p>
                                <p><strong>Descriptions:</strong> {{ $item['Description'] }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary nonorderButton" 
                                         onclick="window.location.href=
                                        '/Market/productOrder/{{ $item['Product_id'] }}/{{ $item['Price'] }}'>
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
