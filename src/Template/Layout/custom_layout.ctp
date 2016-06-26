<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="<?= $this->va->site_url('css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->va->site_url('css/dataTable.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->va->site_url('css/font-awesome-4.6.1/css/font-awesome.min.css');?>">
	<script type="text/javascript" src="<?= $this->va->site_url('js/jquery.min.js'); ?>"></script>

	<title><?= h($dashboard['page_title']); ?></title>
<body>
	<?php
		if(isset($_SESSION['admin_account'])!=''){
			echo $this->element('navbar');
		}else{

		}
	?>


		<?= $this->fetch('content'); ?>
	
	<script type="text/javascript" src="<?= $this->va->site_url('js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->va->site_url('js/bootbox.js'); ?>"></script>

	</body>
</html>