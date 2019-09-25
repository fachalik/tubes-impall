<!doctype html>
<html lang="en">
<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin/vendor/linearicons/style.css">
	<link rel="stylesheet" href="admin/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="admin/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="admin/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="admin/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="admin/img/favicon.png">
</head>
<body>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <form method="POST" action="/sparepart/{{$produk->id}}/update" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Produk :</label>
                            <input id="kodeproduk" name="kodeproduk" type="text" class="form-control" value="{{$produk->kodeproduk}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Barang</label>
                                <input id="namabarang" name="namabarang" type="text" class="form-control" value="{{$produk->namabarang}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Image</label>
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" >
                            </div>
                                <input id="golongan" type="hidden" class="form-control" name="golongan" value="Sparepart" >
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kategori</label>
                                <input id="kategori" type="text"  name="kategori" value="{{ $produk->kategori }}" required autocomplete="golongan" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">merek</label>
                                <input id="merek" type="text" class="form-control" name="merek"  value="{{ $produk->merek }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">tipe</label>
                                <input id="tipe" type="text" class="form-control" name="tipe" value="{{ $produk->tipe }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">jumlah</label>
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ $produk->jumlah }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga</label>
                                <input id="harga" type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                            </div>
                            <button type="submit" class="btn btn-primary col-12" id="btnSubmit" style="background-color:#52de97">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>