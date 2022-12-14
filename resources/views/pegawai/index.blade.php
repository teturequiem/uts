@extends('layouts.admin')

@section('content')
    
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data pegawai</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="container-lg">
            </div>
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                        <div class="col-sm-4">
                            <a href="{{ route('pegawai.create') }}" class="btn btn-primary" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i>tambah pegawai</a>
                            
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach ($pegawai as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->alamat }}</td>
                                 <td>
                                        <a href="{{ route('pegawai.edit',$p->id) }} class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a href="{{ route('pegawai.delete',$p->id) }}"class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>      
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>   
        </div>  
        @endsection