@extends('layouts.web.main')

@section('container')
<div class="container">
    <h2 class="text-center">Admin</h2>
    <div class="col-6">
        {{-- <?php Flasher::flash()?> --}}
    </div>
    
    <form action="/Admin/authenticate" method="POST">

    <div class="form-group">
        <label for="email">username</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
    </form>
</div>
@endsection