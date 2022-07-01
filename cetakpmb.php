<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
            #table_id {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table__id td, #table_id th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table_id tr:nth-child(even){background-color: #f2f2f2;}

            #table_id tr:hover {background-color: #ddd;}

            #table_id th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
         <?php $this->load->view('tampil/dom/head.php'); ?>
        </head>
        <body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
        <main>
    	<h2 class="text-center mt-2">Data Surat</h2>
    	<div class="container-fluid px-4">
		<div class="clearfixs">
        
		</div>
		<div class="text-center mt-2">
			<table class="table table-bordered shadow" border="1" id="table_id">
				<thead id="thead">
					<tr>
						<th>ID</th>
                        <th>Pengirim</th>
                        <th>Penerima</th>
                        <th>Tanggal Surat</th>
                        <th>Jenis Surat</th>
						
					</tr>
				</thead>
				<tbody id="tbody">
					<?php  
						
						$no = 1;
                         foreach ($pembukuan as $pembukuan){
                             ?>
                            <tr>
                                <td> <?php echo $no;  ?> </td>
                                <td> <?php echo $pembukuan->pengirim;  ?> </td>
                                <td> <?php echo $pembukuan->penerima;  ?> </td>
                                <td> <?php echo $pembukuan->tanggal_surat;  ?> </td>
                                <td> <?php echo $pembukuan->jenis_surat;  ?> </td>
                                
                            </tr> 
							
                           <?php 
						   $no++;    
                        }
                       
					?>
				</table>
		</div>
	</div>
	<div>
  </div>
  </main>
  

             
  <?php $this->load->view('tampil/dom/js.php'); ?>
         <script type="text/javascript">
             $(document).ready(function() {
                 $('#table_id').DataTable((
                     "order": []
                 )

                 );
             }
             );
         </script> 
</body>
</html>
