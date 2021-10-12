@extends('template.master')
@section('content')

<div class="container">
<div class="card">
<div class="card-header">
<a href="{{url('tambah')}}" class="btn btn-primary">Tambah</a>
</div>
<div class="card-body">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat Ktp</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Pendidikan Terakhir</th>
      <th scope="col">Nomor Telepon</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $profile)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$profile->User->name}}</td>
      <td>{{$profile->User->email}}</td>
      <td>{{$profile->alamat_ktp}}</td>
      <td>{{$profile->pekerjaan}}</td>
      <td>{{$profile->nama_lengkap}}</td>
      <td>{{$profile->pendidikan_terakhir}}</td>
      <td>{{$profile->nomor_telepon}}</td>

    </tr>
    
    @endforeach
    
  </tbody>
</table>


</div>
</div>
</div>

@endsection
