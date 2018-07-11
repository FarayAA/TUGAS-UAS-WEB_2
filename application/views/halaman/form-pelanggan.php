<?php

$pelanggan = array(
			"id_customer" => "",
			"nama_customer" => "",
			"nik" => "",
			"alamat" => "",
			"jenis_kelamin" => "",
			"nohp" => ""
	);
$url = base_url()."pelanggan/simpan";

if(isset($value) && $value!=null){
	$pelanggan 		= (array) $value;
	$url 		.= "/".$pelanggan['id_customer'];
}
?>
<div class="row">
	<div class="col-md-8">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<span class="panel-title">Form Pelanggan</span>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" action="<?php echo $url; ?>" method="POST">

				<div class="form-group">
					<label class="col-md-4">Nama Pelanggan</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $pelanggan['nama_customer'];?>" class="form-control" name="nama_customer" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">NIK</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $pelanggan['nik'];?>" class="form-control" name="nik" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Alamat</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $pelanggan['alamat'];?>" class="form-control" name="alamat" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Jenis Kelamin</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $pelanggan['jenis_kelamin'];?>" class="form-control" name="jenis_kelamin" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">No HP</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $pelanggan['nohp'];?>" class="form-control" name="nohp" required>
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