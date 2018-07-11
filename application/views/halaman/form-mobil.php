<?php

$mobil = array(
			"id_mobil" => "",
			"merek" => "",
			"no_polisi" => "",
			"warna" => "",
			"tahun" => "",
			"status" => ""
	);
$url = base_url()."mobil/simpan";

if(isset($value) && $value!=null){
	$mobil 		= (array) $value;
	$url 		.= "/".$mobil['id_mobil'];
}
?>
<div class="row">
	<div class="col-md-8">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<span class="panel-title">Form Mobil</span>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" action="<?php echo $url; ?>" method="POST">

				<div class="form-group">
					<label class="col-md-4">Merek Mobil</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $mobil['merek'];?>" class="form-control" name="merek" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Nomor Polisi</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $mobil['no_polisi'];?>" class="form-control" name="no_polisi" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Warna Mobil</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $mobil['warna'];?>" class="form-control" name="warna" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Tahun</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $mobil['tahun'];?>" class="form-control" name="tahun" required>
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