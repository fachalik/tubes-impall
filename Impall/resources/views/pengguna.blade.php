@extends('layouts.master')
@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class="panel">
                                @if (session('sukses'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('sukses')}}
                                    </div>
                                @endif
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Produk Handphone</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>name</th>
                                                    <th>email</th>
                                                    <th>alamat</th>
                                                    <th>jenis Kelamin</th>
                                                    <th>umur</th>
                                                    <th>created</th>
                                                    <th>updated</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_users as $users)
                                                @if ($users->role == 2)        
                                                    <tr>
                                                        <td>{{$users->id}}</td>
                                                        <td>{{$users->name}}</td>
                                                        <td>{{$users->email}}</td>
                                                        <td>{{$users->alamat}}</td>
                                                        <td>{{$users->jeniskelamin}}</td>
                                                        <td>{{$users->umur}}</td>
                                                        <td>{{$users->created_at}}</td>
                                                        <td>{{$users->updated_at}}</td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary btn-sm "><small>EDIT</small></a>
                                                            <a href="#" class="btn btn-danger btn-sm"><small>HAPUS</small></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection