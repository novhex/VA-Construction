<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			 
				<h1 style="text-align: center;"> Products </h1>
				<?= $this->Flash->render();?>

				<div class="table-responsive">
					<table class="table table-condensed table-hover" id="tbl_supplies">
						<thead>
						<tr>
							<th> # </th>
							<th> Product Name </th>
							<th> Description </th>
							<th> Product Price </th>
							<th> Stock on hand </th>
							<th> Photo </th>
							<th> Option </th>
						</tr>
						</thead>
						<tbody>
						<?php $i=1; foreach($dashboard['supplies'] as $index): ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $index['supply_name']; ?></td>
								<td><?= $index['supply_description']; ?></td>
								<td><?= $index['supply_price']; ?></td>
								<td><?= $index['supply_stock'];?></td>
								<td><?= "<img class='img-responsive img-thumbnail' style='width:50px; height:50px;' src='".$this->va->site_url('/uploads/').$index['supply_img']."'>";?></td>
								<td>
									<a  data-id="<?= $index['supply_id'];?>" class="edit_supply btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
									<a data-id="<?= $index['supply_id'];?>" href="#" class="delete_supply btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			 
		</div>
	</div>
</div>
<script type="text/javascript" src="<?= $this->va->site_url('js/dataTables.js'); ?>"></script>
<script>
	$(document).ready(function(){
		//initialize data table

		var bbox; 

		$("#tbl_supplies").DataTable();

		$(document).on('click','.edit_supply',function(){

			window.location = "<?= $this->va->site_url('admin/editsupply/');?>"+this.dataset.id;
			
		});

		$(document).on('click','.delete_supply',function(){
			
			var id = this.dataset.id;

				bootbox.confirm('Are you sure you want to delete this supply',function(x){
						if(x==true){
						$.ajax({ 
								url: "<?= $this->va->site_url('admin/deletesupply');?>",
								data: 'item_id='+id,
								type: "POST",
								success:function(response){
									if(response==1){
										window.location="<?= $this->va->site_url('admin/viewsupplies'); ?>"
									}
								}
							});
						}
				});


			
		});
	});
</script>