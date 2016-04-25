<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			 
			<h1 style="text-align: center;"> Edit Item </h1>
				<form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div>
				<?php foreach($dashboard['supply_info'] as $index): ?>
				<input type="text" name="photo" id="photo" value="<?= $index['supply_img']; ?>" style="display:none;">
				<label><i class="fa fa-pencil"></i> Item Name: *</label>
				<input value="<?= $index['supply_name']; ?>" type="text" name="supply_name" class="form-control" id="supply_name" />

				<label><i class="fa fa-barcode"></i> Item Description: *</label>
				<input  value="<?= $index['supply_description']; ?>" type="text" name="supply_description" class="form-control" id="supply_description" />	

				<label><i class="fa fa-money"></i> Item Price: *</label>
				<input value="<?= $index['supply_price']; ?>" type="text" name="supply_price" class="form-control" id="supply_price" />

				<label><i class="fa fa-file-image-o"></i> Item Image: *</label>
				<input type="file" name="supply_img" class="" id="supply_img" />
			<?php endforeach;?>
				<br>
				<button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-pencil"></i> Update Item</button>

				</form>
			 
		</div>
	</div>
</div>