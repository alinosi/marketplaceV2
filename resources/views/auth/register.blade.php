{{-- <?php use app\core\Flasher as Flasher;?> --}}
@extends('layouts.web.main')

@section('container')
    <div class="container">
        <h2 class="text-center">Registration</h2>
        <div class="col-6">
            {{-- <?php Flasher::flash()?> --}}
        </div>
        <form action="/register/store" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
               <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
           </div>
           <div class="form-group">
               <label for="address">Address</label>
               <input type="text" class="form-control" id="address" name="address" required>
           </div>
           <div class="form-group">
               <label for="phone">Phone Number</label>
               <input type="text" class="form-control" id="phone" name="phone" required>
           </div>
           <button type="submit" class="btn btn-primary" name="submit">Register</button>
           <p class="text-center mt-3">Alread have account? <a href="/login">Login</a></p>
    </form>
</div>
@endsection