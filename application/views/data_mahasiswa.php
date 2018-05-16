<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>Riska Novitasari</title>

    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/font-awesome.css" type="text/css">  

    </head>
  <body>
 
  <nav class="navbar navbar-fixed-top">
	<a class= "navbar-brand" href="#">WEB RISKA</a> 
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                     
				</button>
			</div>   
	<div class="single-page-nav sticky-wrapper" id="tmNavbar">
		<ul class="nav navbar-nav">
		<li><a class="page-scroll" href="<?php echo site_url()?>Home/">Home</a></li>
		<li><a class="page-scroll" href="<?php echo site_url()?>about/">About</a></li>
		<li><a class="page-scroll" href="<?php echo site_url()?>V_blog/">Blog</a></li>
					<li><a class="page-scroll" href="<?php echo site_url()?>Category/">Category</a></li>
					<li><a class="page-scroll" href="<?php echo site_url()?>Datatablesctr/">Artikel</a></li>
	
				</ul>
			</div>   
		</div>
	</nav>  
	<br><br><br><br>
<div class="container">
	<h1>List Mahasiwa</h1>

	<a href="<?php echo site_url()?>mahasiwa/add" class="btn btn-primary">Add Mahasiswa</a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Mahasiwa</th>
				<th>Alamat</th>
				<th>Email</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_mahasiswa as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[Nama]</td>
					<td>$row[Alamat]</td>
					<td>$row[Email]</td>
					<td>$row[gambar]</td>
					<td>
						<a href='edit/$row[id_mahasiswa]' class='btn btn-sm btn-info'>Update</a>
						<a href='delete/$row[id_mahasiswa]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
	
</body>
</html>