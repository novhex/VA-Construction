<div class="container" style="margin-top:70px;">
	<div class="row">
		<h1 style="text-align:center;"> Customer Orders </h1>
		<div class="table-responsive">
			<table id="tbl_orders">
			<thead>
				<th> # </th>
				<th> Item Ordered </th>
				<th> No. of items </th>
			</thead>
			<tbody>
				

			</tbody>
				
			</table>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?= $this->va->site_url('js/dataTables.js'); ?>"></script>
<script type="text/javascript">$('#tbl_orders').DataTable()</script>


