<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Codeigniter</h1>
	<table border="1">
		<tr>
			<th>id</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Alamat</th>
		</tr>
		<?php foreach($biodata as $u){ ?>
		<tr>
			<td><?php echo $u->id_bio?></td>
			<td><?php echo $u->Nama?></td>
			<td><?php echo $u->Nim ?></td>
			<td><?php echo $u->Alamat ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>