@extends('layout')

@section('judul')
Beranda
@endsection

@section('konten')
<br />
<center><h1>Data Pengguna</h1></center>
<br />
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Lahir</th>
      <th scope="col">Telepon</th>
      <th scope="col">Gender</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $dt)
        <tr>
            <td> {{ $dt->innameonly }} </td>
            <td> {{ $dt->inemail }} </td>
            <td> {{ $dt->intgl_lahir }} </td>
            <td> {{ $dt->intelepon }} </td>
            <td> {{ $dt->ingender }} </td>
            <td> {{ $dt->inalamat }} </td>
            <td>
              <div class="btn-group">
                <a href="{{ url('pengguna/'.$dt->innameid) }}" class='btn btn-secondary'>Detail</a>
                <a href="{{ url('pengguna/'.$dt->innameid.'/edit') }}" class='btn btn-secondary'>Edit</a>
                <form action="{{ url('pengguna/'.$dt->id) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              </div>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection