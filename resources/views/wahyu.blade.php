<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wahyu Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Isikan Data Diri</h2>
  <form action="/wahyu" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Nama:</label>
      <input type="name" class="form-control" id="name" placeholder="Isikan Nama" name="nama_pendaftar">
    </div>
    <div class="form-group">
      <label for="name">Alamat:</label>
      <input type="name" class="form-control" id="name" placeholder="Isilkan Alamat" name="alamat_pendaftar">
    </div>
    <div class="form-group">
      <label for="tel">Nomor Telp</label>
      <input type="tel" class="form-control" id="tel" placeholder="Nomor Handphone" name="nomor_pendaftar">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
</body>
</html>
