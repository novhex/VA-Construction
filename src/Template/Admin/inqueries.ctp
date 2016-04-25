<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
		
		 
			<h1> Inquiry List</h1>
			<hr>
				<div class="table-responsive">
				<table class="table table-condensed table-hover" id="tbl_inq">
				<thead>
					<tr>
						<td> # </td>
						<td> From </td>
						<td> Subject </td>
						<td> Options </td>
					</tr>
				</thead>
					<tbody>
						<?php $i=1; foreach($dashboard['inqueries'] as $index ):?>
							<tr>
							<td><?= $index['inqury_id']; ?></td>
							<td><?= $index['name']; ?></td>
							<td><?= $index['inquiry_subject']; ?></td>
							<td>
							<a  data-id="<?= $index['inqury_id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i> View </a>
							<a  data-id="<?= $index['inqury_id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>
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
		$("#tbl_inq").DataTable();
		
	});
</script>