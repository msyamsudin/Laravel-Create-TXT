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

    <!-- jqeury firts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</head>
<body>
    <div class="container">
      <a href="{{ url('pengguna/create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    @yield('konten')
</body>
</html>