<div class="container" style="margin-top:90px;">
	<div class="row">
		<div class="col-md-12">
		<h1 style="text-align:center;  margin-bottom:20px;"> My Cart </h1>
<?php
	echo "<div class='table-responsive'>";
	echo $front['cart_items'];
	echo "</div>";
?>
<div style="text-align:left; margin-top:30px;">
	<?php if($_SESSION['cart_count_items']>=1){?>
		<a href="<?= $this->va->site_url('home/clearcart');?>" class='btn btn-warning'><i class='fa fa-times'></i> Clear Cart</a>
	<?php } ?>
</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#neko_cart_table').addClass('table table-hover table-condensed');
</script>