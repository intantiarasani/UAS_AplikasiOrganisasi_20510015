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
            <h1 class="m-0">PEMBUKUAN</h1>
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
					<a href="<?php echo base_url(); ?>index.php/organisasi/Pembukuan/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"> Add New</span></a>
					<a href="<?= site_url() ?>/organisasi/Surat/cetak_surat" id="_blank" class="btn btn-primary shadow">Cetak</a> 
					<a href="<?= site_url() ?>/organisasi/Dashboard/index" id="kembali" class="btn btn-primary shadow">Kembali</a><br><br>
					</div>
              			</div>
							<div class="card-body table-responsive p-10">
				                <table class="table table-striped table-valign-middle">
								<thead>
									<tr>
										<th>ID</th>
										<th>Pengirim</th>
										<th>Penerima</th>
										<th>tanggal_surat</th>
										<th>jenis_surat</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($pembukuan as $pmb) {
										?>
										<tr>
											<td><?php echo $pmb->id; ?></td>
											<td><?php echo $pmb->pengirim; ?></td>
											<td><?php echo $pmb->penerima; ?></td>
											<td><?php echo $pmb->tanggal_surat; ?></td>
											<td><?php echo $pmb->jenis_surat; ?></td>
											<td><a href="<?php echo base_url(); ?>index.php/organisasi/Pembukuan/edit/<?php echo $pmb->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/organisasi/Pembukuan/delete/<?php echo $pmb->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
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