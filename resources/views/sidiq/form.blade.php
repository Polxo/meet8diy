<!DOCTYPE html>
<html>
<head>
	<title>From Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<style type="text/css">
		.input {
		  width: 100%;
		  padding: 10px;
		  margin: 10px 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-6 col-center mt-3">
				<form class="needs-validation" method="get" action="form/simpan" novalidate>
					@csrf
					<div>
						<label>Nama</label>
			          	<input class="input form-control form-control-lg" type="text" name="name" required>
			        </div>

			        <div>
			        	<label>Jenis kelamin</label>
			        	<select class="custom-select custom-select-lg mb-3 form-control" name="gender" required>
			        		<option disabled selected value> </option>
			        		<option value="red">Laki-laki</option>
			        		<option value="green">Perempuan</option>
			        	</select>
			        </div>
			        <div>
			        	<label>Alamat</label>
			        	<input class="input form-control form-control-lg" type="text" name="address" required>
			        </div>
			        <div>
			        	<label>Nomer Telephone</label>
			        	<input class="input form-control form-control-lg" type="text" name="phone" required>
			        </div>

			        <div class="mt-3">
			            <button class="btn btn-outline-primary btn-lg btn-block" type="submit">Submit</button>
			        </div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    // Fetch all the forms we want to apply custom Bootstrap validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();
	</script>
</body>
</html>