<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
</head>
<body>
<div class="content-wrapper">
	<hr>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10">
            <div class="card">
              <div class="card-header border-0">
                <div class="col-sm-8 col-sm-offset-2">
					</div>
              			</div>
							<center><h3>Edit Data</h3></center>
							<span class="pull-right"><a href="<?php echo base_url();?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
							<?php foreach($user as $org){ ?>
							<div class="card-body table-responsive p-20">
							<form method="POST" action="<?php echo base_url(); ?>index.php/organisasi/Dashboard/update">
								<table class="table table-striped table-valign-middle">
									<tr>
										<td>Nama</td>
										<td>
											<input type="hidden" name="id" value="<?php echo $org->id ?>">
											<input type="text" name="nama" value="<?php echo $org->nama ?>">
										</td>
									</tr>
									<tr>
										<td>Divisi</td>
										<td><input type="text" name="divisi" value="<?php echo $org->divisi ?>"></td>
									</tr>
									<tr>
										<td>E-mail</td>
										<td><input type="text" name="email" value="<?php echo $org->email ?>"></td>
									</tr>
									<tr>
										<td>Angkatan</td>
										<td><input type="text" name="angkatan" value="<?php echo $org->angkatan ?>"></td>
									</tr>
									<tr>
										<td></td>
										<td><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button></td>
									</tr>
								</table>
							</form>	
							<?php } ?>
						</div>
					</div>
				</div>	
			</div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</body>
</html>