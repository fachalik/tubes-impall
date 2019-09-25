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
                    <h2>{{Auth::user()->name}}</h2>
                </div>
            </div>
            
            <div class="row text-center border">
                <div class="col-4 border p-2">
                    <a href="/home">
                        <h4>Dashboard</h4>
                    </a>
                </div>
                <div class="col-4 border p-2">
                    <a href="/home/edit">
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
                <div class="row border">
                    <div class="col-3 d-flex justify-content-center p-3">
                        <img src="{{url('assets/foto/1.jpg')}}" alt="" style="width:250px;height:250px;">
                    </div>
                    <div class="col-6 border">
                        <div class="row">
                            <div class="col mt-2">
                                <h3>Oppo F11 Pro</h3>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Why do we use it?
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-left">
                                <p>20-09-2019, Kamis, 08.00</p>
                            </div>
                            <div class="col-6 text-right">
                                <p>21-09-2019, Jumat, 08.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="container">
                            <div class="row">
                                <h4>IDR. 45.000</h4>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Status</h5>
                                </div>
                                <div class="col">
                                    <small>On Progress</small>
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


