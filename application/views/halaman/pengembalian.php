<div class="row">
	<div class="col-md-12">
		<div class="panel panel-danger">
			<div class="panel-heading clearfix">
				<span class="panel-title"> Daftar Pengembalian </span>
				
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Mobil</th>
							<th>Pelanggan</th>
							<th>Tgl Pinjam</th>
							<th>Tgl Kembali</th>
							<th>Biaya<th>
							<th>Denda</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$i=0;
						foreach($pengembalian as $row){
							$i++;
							echo'
								<tr>
									<td>'.$i.'</td>
									<td>'.$row->merek.'</td>
									<td>'.$row->nama_customer.'</td>
									<td>'.$row->tgl_pinjam.'</td>
									<td>'.$row->tgl_kembali.'</td>
									<td>'.$row->biaya.'</td>
									<td>'.$row->denda.'</td>
									
								</tr>
							';
						}
					?>
						
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
		</div>
	</div>
</div>

<script>
	function confirmHapus(id){
		var yakin = confirm("Anda yakin menghapus pengembalian dengan id "+id);

		if(yakin){
			window.location = "<?php echo base_url(); ?>index.php/pengembalian/hapus/"+id;
		}
	}
</script>