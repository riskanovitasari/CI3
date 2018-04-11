<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>Riska Novitasari</title>

    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url()?>mahasiwa/assets/css/font-awesome.css" type="text/css">  

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
					<li><a class="page-scroll" href="<?php echo site_url()?>Blog/">Blog</a></li>
          <li><a class="page-scroll" href="<?php echo site_url()?>Mahasiwa/">Mahasiswa</a></li>
				</ul>
			</div>   
		</div>
	</nav>  
	<br><br><br><br>

<div class="container">
    <h1><?=$tipe?> Mahasiswa</h1>
    
    <form method="post" class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-2">
          Nama
        </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" value="<?=isset($default['Nama'])? $default['Nama'] : ""?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">
          Alamat          
        </label>
        <div class="col-sm-10">
          <textarea name="alamat" class="form-control"><?=isset($default['Alamat'])? $default['Alamat'] : ""?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">
          Email         
        </label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" value="<?=isset($default['Email'])? $default['Email'] : ""?>">
        </div>
      </div>
      <center>
        <button name="tombol_simpan" class="btn btn-primary">
          Simpan
        </button>
      </center>
    </form>
  </div>
</body>
</html>
	
   