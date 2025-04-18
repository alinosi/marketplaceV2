@extends('layouts.web.main')

@section('content')
<div class="container">
    <h2 class="text-center">Login</h2>
    <div class="col-6">
        {{-- <?php Flasher::flash()?> --}}
    </div>
    <form action="<?= BASEURL; ?>/Login/authenticate" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
        <p class="text-center mt-3">Don't have an account? <a href="<?= BASEURL; ?>/Register">Register here</a></p>
    </form>
</div>
@endsection
