<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Form Registrasi</h3>
	@if(!$errors->isEmpty())
		<h4>Terjadi Kesalahan</h4>
		<p>Berikut adalah kesalahan yang terjadi</p>
		<p>
		@foreach ($errors->all() as $error)
			<p>- {{ $error }}</p>
		@endforeach 
		</p>
	@endif
	<form method="post" action="/form">
		@csrf
		<p>
			<label>Nama Lengkap</label>
			<input type="text" name="nama_lengkap" required="required">
		</p>
		<p>
			<label>Alamat</label>
			<input type="text" name="alamat" required="required">
		</p>
		<p>
			<label>Jenis Kelamin</label>
			<input type="text" name="jk" required="required">
		</p>
		<p>
			<label>Nomor Hp</label>
			<input type="number" name="nohp">
		</p>
		<p>
			<label>Email</label>
			<input type="email" name="email" required="">
		</p>
		<p>
			<button type="submit">SIMPAN</button>
		</p>
	</form>
</body>
</html>