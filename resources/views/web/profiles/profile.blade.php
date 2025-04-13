@extends('layouts.web.main')

@section('container')
    <div class="container profile-container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">{{ $tittle }}</h1>
                <div class="col-6">
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $profile['name'] }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Email</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $profile['email'] }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" required>{{ $profile['addres'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
