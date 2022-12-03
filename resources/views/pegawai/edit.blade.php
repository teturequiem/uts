@extends('layouts.admin')

@section('content')
    
<div class="container mt-3">
  <h2>Edit Data</h2>
  <form action="{{ route('pegawai.update',$pegawai->id) }}"  method="POST">
    @csrf
    <div class="mb-1 mt-3">
      <label for="name">Nama</label>
      <input type="text" class="form-control" id="name" value="{{ $pegawai->name }}"  placeholder="Enter nama" name="name">
    </div>
    <div class="mb-1 mt-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" value="{{ $pegawai->email }}" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="alamat">alamat</label>
      <input type="text" class="form-control" id="alamat" value="{{ $pegawai->alamat }}" placeholder="Enter alamat" name="alamat">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button type="submit" class="btn btn-success" >Submit</button>
    </div>
    
  </form>
</div>

@endsection