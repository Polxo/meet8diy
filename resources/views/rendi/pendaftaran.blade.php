<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Form Registrasi</h3>
	<form method="post" action="/rendi/pendaftaran">
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