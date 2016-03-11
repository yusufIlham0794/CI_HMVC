<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judulform ?></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/bootstrap.css')?>">
<body>
	<div class="container">
	<div class="row">
	<div class="col-xs-8 col-sm-6 col-md-5 col-lg-4">
	<h4><?php echo $judul ?></h4>
	<?php echo form_open('login/proseslogin');?>
		<div class="well">
		<!--jalankan validasi pesan-->
		<?php if($this->session->flashdata('pesan1')) {?>
			<div class="alert alert-warning" role="alert">
				<button type="button" class="close" data-dismis="alert">x</button>
				<h4>Peringatan</h4>
				<?php echo $this->session->flashdata('pesan1'); ?>
			</div>
		<?php }else if ($this->session->flashdata('pesan2')) {?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismis="alert">x</button>
				<h4>Kesalahan</h4>
				<?php echo $this->session->flashdata('pesan2'); ?>
			</div>
		<?php };?>
		<!--end validasi-->

			<div class="form-group">
				<label class="control-label">USERNAME</label>
				<input class="form-control" name="username" type="text" placeholder="username...">			
			</div>
			<div class="form-group">
				<label class="control-label">PASSWORD</label>
				<input class="form-control" name="password" type="password" placeholder="password...">
				<span id="pesan"></span>
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit">
					<span class="glyphicon glyphicon-log-in"></span> LOGIN</button>
				<button class="btn btn-default" type="reset">BATAL</button>
			</div>
		</div>
	</div>	
	</div>	
	</div>
</body>
</html>