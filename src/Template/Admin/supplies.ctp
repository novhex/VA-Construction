<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			 
			<h1 style="text-align: center;"> Add Item </h1>
			<?= $this->Flash->render(); ?>
				<form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<label><i class="fa fa-pencil"></i> Item Name: *</label>
				<input type="text" name="supply_name" class="form-control" id="supply_name" />

				<label><i class="fa fa-barcode"></i> Item Description: *</label>
				<input type="text" name="supply_description" class="form-control" id="supply_description" />	

				<label><i class="fa fa-money"></i> Item Price: *</label>
				<input type="text" name="supply_price" class="form-control" id="supply_price" />

				<label><i class="fa fa-file-image-o"></i> Item Image: *</label>
				<input type="file" name="supply_img" class="" id="supply_img" />
				<br>
				<button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-plus"></i> Add Item</button>

				</form>
		 
		</div>
	</div>
</div>