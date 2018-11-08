@extends('layout')

@section('judul')
Create pengguna
@endsection

@section('konten')
<br />
        <center><h1>Form Data Diri</h1></center>
    <br />
    <div class="container col-md-6">
    <form action="{{ url('pengguna') }}" method="post">
    {{ csrf_field() }}
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="inname" placeholder="Nama anda" required>
     </div>

     <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="inemail" placeholder="name@example.com" required>
     </div>

     <div class="form-group">
        <label>Date of birth</label>
        <input type="text" class="form-control indatepicker" name="intgl_lahir" placeholder="" required>
     </div>

     <div class="form-group">
        <label>Nomor</label>
        <input type="number" class="form-control" name="intelepon" placeholder="Nomor telepon" required>
     </div>

    <div class="form-group">
      <label>Gender</label>
      <select class="form-control" name="ingender" required>
        <option value="">-- Pilih satu --</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" name="inalamat" rows="3" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <button onclick="reset_btn()" type="button" class="btn btn-secondary">Reset</button>
</form>
    </div>
@endsection