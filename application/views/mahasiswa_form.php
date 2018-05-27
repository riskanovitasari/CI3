
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
	
   