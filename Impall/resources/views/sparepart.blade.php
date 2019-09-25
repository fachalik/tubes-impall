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
                                        <h3 class="panel-title">Data Produk Sparepart</h3>
                                        <div class="right">
                                            <button type="button" class="btn p-2 " data-toggle="modal" data-target="#exampleModal">
                                            <h5 class="dark p-2">Tambah data</h4>
                                            </button>                            
                                                <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <form method="POST" action="/sparepart/create" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Kode Produk :</label>
                                                                    <input id="kodeproduk" type="text" class="form-control @error('kodeproduk') is-invalid @enderror" name="kodeproduk" value="{{ old('kodeproduk') }}" required autocomplete="kodeproduk" autofocus>
                                                                    @error('kodeproduk')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Nama Barang</label>
                                                                    <input id="namabarang" type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" value="{{ old('namabarang') }}" required autocomplete="namabarang" autofocus>
                                                                    @error('namabarang')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Image</label>
                                                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                                                                    @error('image')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                    <input id="golongan" type="hidden" name="golongan" class="form-control name="golongan" value="Sparepart" >
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Kategori</label>
                                                                    <input id="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" required autocomplete="golongan" autofocus>
                                                                    @error('kategori')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">merek</label>
                                                                    <input id="merek" type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" required autocomplete="merek">
                                                                    @error('password')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">tipe</label>
                                                                    <input id="tipe" type="text" class="form-control" name="tipe" required autocomplete="tipe">
                                                                    @error('tipe')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">jumlah</label>
                                                                    <input id="jumlah" type="text" class="form-control" name="jumlah" required autocomplete="jumlah">
                                                                    @error('jumlah')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Harga</label>
                                                                    <input id="harga" type="text" class="form-control" name="harga" required autocomplete="harga">
                                                                    @error('harga')
                                                                    <div class="invalid-feedback">{{$message}}</div>
                                                                    @enderror
                                                                </div>
                                                                <button type="submit" class="btn btn-primary col-12" id="btnSubmit" style="background-color:#52de97">Tambah Data</button>
                                                            </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Kode Produk</th>
                                                    <th>Nama Barang</th>
                                                    <th>image</th>
                                                    <th>golongan</th>
                                                    <th>kategori</th>
                                                    <th>merek</th>
                                                    <th>tipe</th>
                                                    <th>jumlah</th>
                                                    <th>harga</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_product as $product)
                                                @if ($product->golongan == 'Sparepart')        
                                                    <tr>
                                                        <td>{{$product->id}}</td>
                                                        <td>{{$product->kodeproduk}}</td>
                                                        <td>{{$product->namabarang}}</td>
                                                        <td>{{$product->image}}</td>
                                                        <td>{{$product->golongan}}</td>
                                                        <td>{{$product->kategori}}</td>
                                                        <td>{{$product->merek}}</td>
                                                        <td>{{$product->tipe}}</td>
                                                        <td>{{$product->jumlah}}</td>
                                                        <td>{{$product->harga}}</td>
                                                        <td>
                                                        <a href="/sparepart/{{$product->id}}/edit" class="btn btn-primary btn-sm"><small>EDIT</small></a>
                                                        <a href="/sparepart/{{$product->id}}/delete" class="btn btn-danger btn-sm"><small>HAPUS</small></a>
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