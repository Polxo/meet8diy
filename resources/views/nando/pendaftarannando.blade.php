<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.pendaftaran {
	        margin: 50px auto;
	        width: 500px;
	        padding: 10px;
	        border: 1px solid #ccc;
	        background: lightblue;
	     }
        input , h1 {
	        margin: 5px auto;
	        width: 95%;
	        padding: 10px;
		}
	    button { 
	        float: right;
	        padding: 5px;
	        width: 90px;
	        border: none;
	        color: #fff;
	        background: red;
	        cursor: pointer;
	    }
	    
	</style>
</head>
<body>
	<div class="pendaftaran">
		<h1 align="center">Input Data Anda</h1>
		@if(!$errors->isEmpty())
		<h4>Terjadi Kesalahan</h4>
		<p>Berikut adalah kesalahan yang terjadi</p>
		<p>
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach	
		</p>
		@endif
		<form action="/pendaftarannando" method="post">
			@csrf
			<label>Nama</label>
		    	<input type="text" name="nama" placeholder="Masukan Nama Lengkap Anda"><br>
		    <label>Alamat</label>
		    	<input type="text" name="alamat" placeholder="Masukan Alamat Anda"><br>
		    <label>No HP</label>
		    	<input type="number" name="notelp" placeholder="Masukan No HP Anda"><br>
		    <label>Tgl Lahir</label>
		    	<input type="date" name="tgllahir" ><br>
		    <button type="submit">KIRIM</button><br><br>
		</form>
	</div>
	
</body>
</html>