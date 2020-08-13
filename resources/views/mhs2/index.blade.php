@extends('layouts.app')
@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')
@section('content')

        <h1><center>Data Mahasiswa</center></h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</button>
        
        <button type="button" class="btn btn-secondary">HAPUS</a></button>
        <button type="button" class="btn btn-success">EDIT </button>
        
        <br>
        <br>
<table class="table table-striped" id="mhs-table" border="2">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Program Study</th>
            <th>Alamat</th>
        </tr>
    </thead>
    @foreach($data_mhs as $mhs)
        <tr>
            <th>{{$mhs->nim}}</th>
            <th>{{$mhs->nama_lengkap}}</th>
            <th>{{$mhs->prodi}}</th>
            <th>{{$mhs->alamat}}</th>
        </tr>
        @endforeach
    <script>
        
</table>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>        
@endsection