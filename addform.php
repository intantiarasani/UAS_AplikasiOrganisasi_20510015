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
			<h1 class="page-header text-center">TAMBAH DATA PENGURUS
				<hr><span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Back</a></span>
			</h1>
			<br>
			<form method="POST" action="<?php echo base_url(); ?>index.php/organisasi/Dashboard/insert">
				<div class="form-group">
					<label>Nama:</label>
					<input type="text" class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label>Divisi:</label>
					<input type="text" class="form-control" name="divisi">
				</div>
				<div class="form-group">
					<label>E-mail:</label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Angkatan:</label>
					<input type="angkatan" class="form-control" name="angkatan">
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