<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{ $judul }}</title>
      <link href=" {{ asset('assets/css/custom/main.css') }}" rel="stylesheet">
      <link href=" {{ asset('assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/Icon.png') }}">

      {{-- conditional style --}}
      <link href=" {{ asset('assets/css/custom/button-mandiri.css') }}" rel="stylesheet">
  </head>
  <body class="main-body">

      {{-- navbar --}}
      @include('layouts.web.navbar')
      
      {{-- content --}}
      @yield('container')
      
      {{-- footer --}}
      @include('layouts.web.footer')

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}" crossorigin="anonymous"></script>
  </body>
</html>