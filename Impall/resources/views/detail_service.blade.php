@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-0.5">
                    <a href="{{url('service/service-handphone/kendala')}}">
                        <img src="{{url('assets/back.png')}}" alt="" style="width: 20px; height: 20px;">
                    </a>
                </div>
                <div class="col">
                    <a href="{{url('service/service-handphone/kendala')}}">
                        <h3>Masalah</h3>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col text-left">
                            <h1>Oppo F11 Pro</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{url('assets/foto/1.jpg')}}" alt="" style="width:350px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col text-left invisible">
                            <h1>Oppo F11 Pro</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in 
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                and more recently with desktop publishing software like Aldus PageMaker including 
                                versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col text-left invisible">
                            <h1>Oppo F11 Pro</h1>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <div class="card">
                                <h5 class="card-header">Total Harga</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Handphone-merek-masalah</h5>
                                    <p class="card-text">IDR. 45.000</p>
                                    <button type="submit" class="btn btn-primary btn-block" style="background-color:#52de97">BUAT JANJI</button>
                                    <small class="card-text">Silahkan Tekan Tombol Janji jika sudah sesuai. Datang ke toko kami untuk melakukan perbaikan handphone. Terima Kasih Banyak</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection