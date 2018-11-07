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
    <br />
        <center><h1>Form Data Diri</h1></center>
    <br />
    <div class="container">
    <form>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" id="inName" placeholder="Nama anda" required>
   </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" id="inEmail" placeholder="name@example.com" required>
  </div>

  <div class="form-group">
      <label>Date of birth</label>
      <input type="text" class="form-control" id="inDatepicker" placeholder="" required>
   </div>

  <div class="form-group">
    <label>Gender</label>
    <select class="form-control" id="inGender" required>
      <option value="">-- Pilih satu --</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" id="inAlamat" rows="3" required></textarea>
  </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <button onclick="reset_btn()" type="button" class="btn btn-secondary">Reset</button>
</form>
    </div>
</body>
</html>