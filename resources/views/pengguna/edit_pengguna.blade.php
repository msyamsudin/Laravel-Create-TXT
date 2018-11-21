@extends('layout')

@section('judul')
Edit Data pengguna
@endsection

@section('konten')
<br />
    <div class="container col-md-6">
    <form action="{{ url('pengguna/'.$data[0]['innameid']) }}" method="post">
    <input type="hidden" name="_method" value="put">
    {{CSRF_FIELD()}}
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="inname" id="inname" value="{{ $data[0]['innameonly'] }}">
     </div>

     <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="inemail" id="inemail" value="{{ $data[0]['inemail'] }}">
     </div>

     <div class="form-group">
        <label>Date of birth</label>
        <input type="text" class="form-control indatepicker" name="intgl_lahir" id="intgl_lahir" value="{{ $data[0]['intgl_lahir'] }}">
     </div>

     <div class="form-group">
        <label>Nomor</label>
        <input type="number" class="form-control" name="intelepon" id="intelepon" value="{{ $data[0]['intelepon'] }}">
     </div>

    <div class="form-group">
      <label>Gender : <b>{{ $data[0]['ingender'] }}</b></label>
        <div class="col-xs-2">
          <input class="btn btn-dark btn-sm btn-gender" value="Ubah ?" readonly>
        </div>
      <select class="form-control ingender" name="ingender" id="ingender" style="display:none;">
        <option value="{{ $data[0]['ingender'] }}">-- Pilih satu --</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" name="inalamat" id="inalamat" rows="3" >{{ $data[0]['inalamat'] }}</textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>
    </div>
@endsection