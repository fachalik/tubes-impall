@extends('layouts.app')
@section('content')
    <div class="container " >
        <div class="row">
            <div class="col-8  pd-5" style="background-color:white">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <img src="{{url('assets/foto/1.jpg')}}" alt="" style="width:230px">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-5 text-left">
                                <h4>Oppo F1 Pro</h4>
                            </div>
                            <div class="col text-right">
                                <h4>IDR 2.500.000</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <h5>Jumlah</h5>
                            </div>
                            <div class="col">
                                <select name="jumlah" id="jumlah">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-right">
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3" style="background-color:grey;color:white;">
                <div class="row pd-3">
                    <div class="col border-bottom" style="color:white">
                        <h5>Ringkasan</h5>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-5 text-right">
                        <small>Subtotal</small>
                    </div>
                    <div class="col-5 text-left">
                        <small>IDR 2.500.000</small>
                    </div>
                </div>
                <div class="row mx-auto">
                        <button class="btn btn-primary col-5 mr-1"><small>BAYAR</small></button>
                        <button class="btn btn-dark col-5 ml-1"><small>ORDER</small></button>
                </div>
            </div>
        </div>
    </div>
@endsection