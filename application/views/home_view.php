<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>Riska Novitasari</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css" type="text/css">  

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
    	<div class="col-xs-12 col-sm-9 col-md-9">
      <a href="add" class="btn btn-primary">Add Artikel</a>
      <br><br>
      <?php foreach ($artikel as $key): ?>

        <div class="well well-sm">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <h3><?php echo $key->judul_blog ?></h3>
              <br>
              <img src="../gambar/<?php echo $key->gambar_blog;?>" alt="Image" width="300">
              <p>
                Tanggal : <?php echo $key->tggl_blog ?><br>
                <a href="<?php echo site_url()?>V_blog/detail/<?php echo $key->id_blog ?>">Read More ...</a>
              </p>
            </div>
          </div>
          <a href='edit/<?php echo $key->id_blog?>' class='btn btn-sm btn-info'>Update</a>
          <a href='delete/<?php echo $key->id_blog?>' class='btn btn-sm btn-danger'>Hapus</a>
        </div>
        <?php endforeach ?>

<?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

  <div class="form-group">
    <label for="cat_name">Nama Kategori</label>
    <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
    <div class="invalid-feedback">Isi judul terlebih dahulu</div>
</div>
<div class="form-group">
   <label for="text">Deskripsi</label>
   <input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
   <div class="invalid-feedback">Isi deskripsi terlebih dahulu</div>
</div>
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>

	
    <script src="assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>