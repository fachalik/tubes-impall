@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>--}}
            @if (Auth::user()->role == 2)
                {{-- alert --}}
                <p>User</p>
            @endif
            <div class="row">
                <div class="col">
                    <h2>Avatar</h2>
                </div>
            </div>
            
            <div class="row text-center border">
                <div class="col-4 border p-2">
                    <a href="/home">
                        <h4>Dashboard</h4>
                    </a>
                </div>
                <div class="col-4 border p-2">
                    <a href="/biodata">
                            <h4>Biodata Diri</h4>
                    </a>
                </div>
                <div class="col-4 border p-2">
                    <a href="/home/lihatservice">
                            <h4>Service</h4>
                    </a>
                </div>
            </div>
            
            <div class="row border p-5">
                <div class="container" style="padding:10px">
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap :</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{Auth::user()->alamat}}" required autocomplete="alamat" autofocus>
                                        @error('alamat')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                                        <input id="jeniskelamin" type="text" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{Auth::user()->jeniskelamin}}" required autocomplete="jeniskelamin" autofocus>
                                        @error('jenisKelamin')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Umur</label>
                                        <input id="umur" type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{Auth::user()->umur}}" required autocomplete="umur" autofocus>
                                        @error('umur')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Ulangi Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        @error('password-confirm')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary col-12" id="btnSubmit" style="background-color:#52de97">Edit Biodata</button>
                                </form>
                                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                                <script type="text/javascript">
                                    $(function () {
                                        $("#btnSubmit").click(function () {
                                            var password = $("#password").val();
                                            var password2 = $("#password-confirm").val();
                                            if (password != password2) {
                                                alert("password tidak sesuai");
                                                return false;
                                            }
                                            return true;
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection


