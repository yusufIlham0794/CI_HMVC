<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul ?></title>
</head>
<body>
<p>Ini halaman dashboard admin</p>

<div class="well">
	<?php echo form_open('login/logout');?>
	<button class="btn btn-default" type="submit">Logout</button>
</div>
</body>
</html>