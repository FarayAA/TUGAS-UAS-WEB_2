<div class="row">
	<div class="col-md-8">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<span class="panel-title">Form Pengembalian</span>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" action="<?php echo base_url(); ?>peminjaman/simpan" method="POST">

				<div class="form-group">
					<label class="col-md-4">Mobil</label>
					<div class="col-md-8">
						<select name="mobil" class="form-control">
							<option value=""></option>
							<?php $listmobil = $this->db->where('status','Tersedia')->get('tb_mobil')->result();
								foreach ($listmobil as $mobil) {
									echo '<option value="'.$mobil->id_mobil.'">'.$mobil->merek.'</option>';
								}
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Pelanggan</label>
					<div class="col-md-8">
						<select name="pelanggan" class="form-control">
							<option value=""></option>
							<?php $listpelanggan = $this->db->get('tb_customer')->result();
								foreach ($listpelanggan as $pelanggan) {
									echo '<option value="'.$pelanggan->id_customer.'">'.$pelanggan->nama_customer.'</option>';
								}
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Tgl Pinjam</label>
					<div class="col-md-8">
						<input type="date" value="<?php //echo $peminjaman['tgl_pinjam'];?>" class="form-control" name="tgl_pinjam" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Lama Sewa</label>
					<div class="col-md-8">
						<input type="text" value="<?php //echo $peminjaman['lama_sewa'];?>" class="form-control" name="lama_sewa" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Biaya</label>
					<div class="col-md-8">
						<input type="text" value="<?php //echo $peminjaman['biaya'];?>" class="form-control" name="biaya" required>
					</div>
				</div>

				<div class="col-md-12 clearfix">
					<input type="submit" class="btn btn-primary pull-right" value="Simpan">
					<input type="reset" class="btn btn-default pull-left" value="Batal">
				</div>

			</form>
		</div>
	</div>

	</div>
</div>