@extends('layouts.web.main')

@section('container')
<div class="container text-center" id="home">
    <img src="{{ asset('assets/img/logo.png') }}" alt="Barber Image" class="img-fluid rounded mb-4" width="300px">
    <h1 class="display-4" style="color: #333;">Selamat datang di BARBER</h1>
    <p class="lead" style="color: #666;">
        <!-- Isi penjelasan mengenai barber di sini -->
        Ini adalah tempat di mana Anda dapat menemukan dan menjual barang-barang bekas dengan mudah, cepat, dan efesien.
    </p>
    
    <!-- Tombol -->
    <div class="mt-4">
        <a href="/Market" class="btn btn-custom mr-2">Beli Barang</a>
        <a href="/Sell" class="btn btn-custom">Jual Barang</a>
    </div>
</div>
@endsection