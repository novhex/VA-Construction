<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			 
			<h1 style="text-align: center;"> Add Product </h1>
			<?= $this->Flash->render(); ?>
				<form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<label><i class="fa fa-pencil"></i> Product Name: *</label>
				<input type="text" name="supply_name" class="form-control" id="supply_name" />

				<label><i class="fa fa-barcode"></i> Product Description: *</label>
				<input type="text" name="supply_description" class="form-control" id="supply_description" />	

				<label><i class="fa fa-money"></i> Product Price: *</label>
				<input type="text" name="supply_price" class="form-control" id="supply_price" />

				<label><i class="fa fa-list"></i> Stock on hand: *</label>
				<input type="number" name="supply_stock" class="form-control" />

				<label><i class="fa fa-file-image-o"></i> Product Image: *</label>
				<input type="file" name="supply_img" class="" id="supply_img" />
				<br>
				<button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-plus"></i> Add Product</button>

				</form>
		 
		</div>
	</div>
</div>