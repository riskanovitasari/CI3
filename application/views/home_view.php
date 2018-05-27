
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


	
    <script src="assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>