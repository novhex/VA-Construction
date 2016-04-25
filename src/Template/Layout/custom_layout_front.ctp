<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="<?= $this->va->site_url('css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->va->site_url('css/font-awesome-4.6.1/css/font-awesome.min.css');?>">
	<script type="text/javascript" src="<?= $this->va->site_url('js/jquery.min.js'); ?>"></script>

	<title><?= h($front['front']); ?></title>
<body>
 		<?= $this->element('navbar_front');?>

		<?= $this->fetch('content'); ?>
	
	

	<script type="text/javascript" src="<?= $this->va->site_url('js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->va->site_url('js/bootbox.js'); ?>"></script>
	</body>
</html>