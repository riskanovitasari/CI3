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
			<div class="form-group">
				<label class="control-label col-sm-2">
					author_blog					
				</label>
				<div class="col-sm-10">
					<input type="text" required class="form-control" name="author_blog" value="<?=isset($default['author_blog'])? $default['author_blog'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					email_author			
				</label>
				<div class="col-sm-10">
					<input type="text" name="email_author" class="form-control" required><?=isset($default['email_author'])? $default['email_author'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					alamat_blog					
				</label>
				<div class="col-sm-10">
					<input type="text" required class="form-control" name="alamat_blog" value="<?=isset($default['alamat_blog'])? $default['alamat_blog'] : ""?>">
				</div>
			</div>
			<center>
			<input class="btn btn-primary" type="submit" name="simpan" value="simpan">
			</center>
		</form>
	</div>
</body>
</html>