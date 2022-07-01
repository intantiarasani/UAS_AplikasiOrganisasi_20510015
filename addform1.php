<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter uniga</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
	
</head>
<center>
<body>	
<div class="container">
	<div class="row">
		<div class="col-lg-10">
		<div class="col-sm-4 col-sm-offset-20">
			<h1 class="page-header text-center">TAMBAH DATA 
				<hr><span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Back</a></span>
			</h1>
			<br>
			<form method="POST" action="<?php echo base_url(); ?>index.php/organisasi/Pembukuan/insert">
				<div class="form-group">
					<label>Pengirim:</label>
					<input type="text" class="form-control" name="pengirim">
				</div>
				<div class="form-group">
					<label>Penerima:</label>
					<input type="text" class="form-control" name="penerima">
				</div>
				<div class="form-group">
					<label>Tanggal Surat Masuk:</label>
					<input type="date" class="form-control" name="tanggal_surat">
				</div>
				<div class="form-group">
					<label>Jenis Surat:</label>
					<input type="jenis_surat" class="form-control" name="jenis_surat">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floopy-disk"></span>Save</button>
			</form>
		</div>
	</div>	
	</div>
</div>	
</body>
</center>
</html>