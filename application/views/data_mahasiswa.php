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