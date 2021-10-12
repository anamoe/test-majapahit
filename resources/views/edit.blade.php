@extends('template.master')
@section('content')

<div class="container">
<div class="card">
<div class="card-header">
Edit
</div>
<div class="card-body">

<form action="{{url('edit/'.$users->User->id)}}" method="post">
@csrf
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{$users->User->name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="staticEmail" name="email"  value="{{$users->User->email}}" >
    </div>
  </div>
  

  
    <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat KTP</label>
    <div class="col-sm-10">
      <textarea class="form-control @error('alamat_ktp') is-invalid @enderror" name="alamat_ktp" >{{$users->alamat_ktp}}</textarea>
    </div>
  </div>
  
    <div class="form-group row">
    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan"  value="{{$users->pekerjaan}}">
    </div>
  </div>
  
    <div class="form-group row">
    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="namalengkap" name="nama_lengkap"  value="{{$users->nama_lengkap}}">
    </div>
  </div>
  
    <div class="form-group row">
    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan" name="pendidikan_terakhir" value="{{$users->pendidikan_terakhir}}" >
    </div>
  </div>
  
    <div class="form-group row">
    <label for="notelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" id="notelp" name="nomor_telepon" value="{{$users->nomor_telepon}}" >
    </div>
  </div>
  
  <button class="btn btn-primary float-right" type="submit">Update Data</button>
  
</form>

</div>
</div>
</div>

@endsection
