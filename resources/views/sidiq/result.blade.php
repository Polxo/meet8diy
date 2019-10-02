<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">	
	<style type="text/css">
		body{
			background-color: {{$gender}}
		}
		.line {
			border-top: 1px dashed #8c8b8b;
			margin: 0 20px 0 0px;
		}
		.result{
			background-color: #f2f2f2;
			opacity: 0.9;
			height: 50vh;
			padding-top: 30px;
			border-radius: 10px;

		}
		.img-warp{
			background-color: #f2f2f2;
			opacity: 0.95;
			border-radius: 10px;
		}
		.img{
			height: 50vh;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row d-flex align-items-stretch mt-3">
				<div class="col-6 result">
					<h1>Data Diri</h1>
					<div class="row mt-3">
						<div class="col-4">
							Nama
						</div>
						<div class="col-8">
							{{$name}}
						<div class="line"></div>
						</div>
						
					</div>
					<div class="row mt-3">
						<div class="col-4">
							Jenis Kelamin
						</div>
						<div class="col-8">
							@if($gender=='red')
								Laki-Laki
							@elseif($gender=='green')
								Perempuan
							@endif
						<div class="line"></div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-4">
							Alamat
						</div>
						<div class="col-8">
							{{$address}}
						<div class="line"></div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-4">
							Nomer Telephone
						</div>
						<div class="col-8">
							{{$phone}}
						<div class="line"></div>
						</div>
					</div>
				</div>
			<div class="col-6">
				<div class="col-5 img-warp">
					@if($gender=='red')
						<img class="img" src="../img/patrick.png">
					@elseif($gender=='green')
						<img class="img" src="../img/Patrica.png">
					@endif		
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>