<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Add Blog</title>
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 	<script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>
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
					<li><a class="page-scroll" href="<?php echo site_url()?>V_Blog/">Blog</a></li>
          			<li><a class="page-scroll" href="<?php echo site_url()?>Mahasiwa/">Mahasiswa</a></li>
        
				</ul>
			</div>   
		</div>
	</nav>  
    <br><br><br>

	<div class="container">
		<h1><?=$tipe?> Articel</h1>
		<form method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Judul
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="judul_blog" value="<?=isset($default['judul_blog'])? $default['judul_blog'] : ""?>" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Content					
				</label>
				<div class="col-sm-10">
					<textarea name="isi_blog" class="form-control" required><?=isset($default['isi_blog'])? $default['isi_blog'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
		      <label class="control-label col-sm-2">Gambar :</label>
		     
		      <div class="col-sm-10">
		        <span class="input-group-addon"><input type="file" required name="gambar_blog" class="file"></span>
		      </div><br>
		    </div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Date					
				</label>
				<div class="col-sm-10">
					<input type="date" required class="form-control" name="tggl_blog" value="<?=isset($default['tggl_blog'])? $default['tggl_blog'] : ""?>">
				</div>
			</div>
			<center>
			<input class="btn btn-primary" type="submit" name="simpan" value="simpan">
			</center>
		</form>
	</div>
</body>
</html>