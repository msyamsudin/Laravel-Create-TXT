<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('judul')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css jquery-ui and bootstrap -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('jquery-ui/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />

    <!-- css fontawesome 5.5.0 -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <!-- jqeury firts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('pengguna') }}">MSN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('pengguna') }}">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('pengguna/create') }}">Tambah Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lain-lain</a>
      </li>
    </ul>
   
  </div>
</nav>

    <div class="container">
      @yield('konten')
    </div>
    
</body>
</html>