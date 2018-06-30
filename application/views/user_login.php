<?php echo form_open('user/login'); ?>
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Login User</h1> <br>
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
		</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>