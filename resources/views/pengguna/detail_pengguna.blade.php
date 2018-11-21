@extends('layout')

@section('judul')
Detail pengguna
@endsection

@section('konten')
<br />
    <div class="container col-md-6">
    <form>
      <div class="form-group row">
        <label class="col-sm-2">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control " name="inname" id="inname" value="{{ $data[0]['innameonly'] }}" readonly>
          </div>
     </div>

     <div class="form-group row">
      <label class="col-sm-2">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="inemail" id="inemail" value="{{ $data[0]['inemail'] }}" readonly>
        </div>
     </div>

     <div class="form-group row">
        <label class="col-sm-2">Date of birth</label>
          <div class="col-sm-10">
            <input type="text" class="form-control indatepicker" name="intgl_lahir" id="intgl_lahir" value="{{ $data[0]['intgl_lahir'] }}" readonly>
          </div>
     </div>

     <div class="form-group row">
        <label class="col-sm-2">Nomor</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="intelepon" id="intelepon" value="{{ $data[0]['intelepon'] }}" readonly>
          </div>
     </div>

    <div class="form-group row">
      <label class="col-sm-2">Gender</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="ingender" id="ingender" value="{{ $data[0]['ingender'] }}" readonly>
        </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="inalamat" id="inalamat" rows="3" readonly>{{ $data[0]['inalamat'] }}</textarea>
        </div>
    </div>
</form>
    </div>
@endsection