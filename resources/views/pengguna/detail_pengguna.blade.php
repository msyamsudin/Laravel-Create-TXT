@extends('layout')

@section('judul')
Detail pengguna
@endsection

@section('konten')
<br />
        <center><h1>Data Pengguna</h1></center>
    <br />
    <div class="container col-md-6">
    <form>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="inname" id="inname" value="{{ $data[0]['innameonly'] }}" readonly>
     </div>

     <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="inemail" id="inemail" value="{{ $data[0]['inemail'] }}" readonly>
     </div>

     <div class="form-group">
        <label>Date of birth</label>
        <input type="text" class="form-control indatepicker" name="intgl_lahir" id="intgl_lahir" value="{{ $data[0]['intgl_lahir'] }}" readonly>
     </div>

     <div class="form-group">
        <label>Nomor</label>
        <input type="number" class="form-control" name="intelepon" id="intelepon" value="{{ $data[0]['intelepon'] }}" readonly>
     </div>

    <div class="form-group">
      <label>Gender</label>
      <input type="text" class="form-control" name="ingender" id="ingender" value="{{ $data[0]['ingender'] }}" readonly>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" name="inalamat" id="inalamat" rows="3" readonly>{{ $data[0]['inalamat'] }}</textarea>
    </div>
</form>
    </div>
@endsection