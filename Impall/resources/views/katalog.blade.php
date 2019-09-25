@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 ml-5">
            <h4>FILTERS</h4>
        </div>
        <div class="col">
            <p>Produk <?php echo "1 - 9" ?> dari <?php echo "9"; ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <div class="row">
                <div class="col ">
                    <h5>KATEGORI</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   {{--  <div class="row">
                        <div class="col-1">
                            <input type="checkbox" name="men" value="men">
                        </div>
                        <div class="col">
                            <h6>MEN</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <input type="checkbox" name="women" value="women">
                        </div>
                        <div class="col">
                            <h6>WOMEN</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <input type="checkbox" name="junior" value="junior">
                        </div>
                        <div class="col">
                            <h6>JUNIOR</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <input type="checkbox" name="tool&equipment" value="tool&equipment">
                        </div>
                        <div class="col">
                            <h6>TOOL & EQUIPMENT</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <input type="checkbox" name="climbing" value="climbing">
                        </div>
                        <div class="col">
                            <h6>CLIMBING EQUIPMENT</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <input type="checkbox" name="accessories" value="accessories">
                        </div>
                        <div class="col">
                            <h6>ACCESSORIES</h6>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row text-center">
                
                <div class="col-4">
                    <a href="/katalog/detail_katalog">
                    <img src="#" style="width: 200px; height: 200px;">
                    </a>    
                    <p>lorem ipsum</p>
                    <p>lorem ipsum</p>
                    <div class="row"></div>
                </div>        	
                
            </div>
        </div>
    </div>
</div>
@endsection