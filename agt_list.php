<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA ANGGOTA</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-30">
            <div class="card">
              <div class="card-header border-0">
                <div class="col-sm-8 col-sm-offset-2">
					<a href="<?php echo base_url(); ?>index.php/anggota/Dashboard/addanggota" class="btn btn-primary"><span class="glyphicon glyphicon-plus"> Add New</span></a>
					<a href="<?= site_url() ?>/anggota/Anggota/cetak_agt" id="_blank" class="btn btn-primary shadow">Cetak</a> 
					<a href="<?= site_url() ?>/organisasi/Dashboard/index" id="kembali" class="btn btn-primary shadow">Kembali</a><br><br>
					</div>
              			</div>
							<div class="card-body table-responsive p-10">
				                <table class="table table-striped table-valign-middle">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Jenis Anggota</th>
										<th>E-mail</th>
										<th>Angkatan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($anggota as $agt) {
										?>
										<tr>
											<td><?php echo $agt->id; ?></td>
											<td><?php echo $agt->nama; ?></td>
											<td><?php echo $agt->jenis_anggota; ?></td>
											<td><?php echo $agt->email; ?></td>
											<td><?php echo $agt->angkatan; ?></td>
											<td><a href="<?php echo base_url(); ?>index.php/anggota/Dashboard/edit/<?php echo $agt->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/anggota/Dashboard/delete/<?php echo $agt->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table>
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