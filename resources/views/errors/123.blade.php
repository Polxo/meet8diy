<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Terjadi kesalahan</h3>
@if(!$errors->isEmpty())
	<h4>Terjadi Kesalahan</h4>
	<p>Berikut adalah kesalahan yang terjadi</p>
	<p>
	@foreach ($errors->all() as $error)
		- {{ $error }} <br/>
	@endforeach 
	</p>
@endif
</body>
</html>