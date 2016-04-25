<div class="container" style="margin-top: 70px;">
	<div class="row">
	<div class="col-md-4"></div>

			<div class="col-md-4">
			
				<div class="well">
				<h1 style="text-align: center"> Inquiry Form </h1>
							<?= $this->Flash->render(); ?>

				<form accept-charset="utf-8" action="" method="POST">
				<label>Name *</label>
				<input style="" type="text" name="name" id="name"  class="form-control"/>
				
				<label>Address *</label>
				<input style="" type="text" name="address" id="address"  class="form-control"/>
				
				<label>Contact No. *</label>
				<input style="" type="text" name="contact_no" id="contact_no"  class="form-control"/>
				
				<label>Inquiry Subject *</label>
				<input style="" type="text" name="inquiry_subject" id="inquiry_subject"  class="form-control"/>
				
				<label>Details *</label>
				<textarea name="details" class="form-control"></textarea>
				<br>
				<button class="btn btn-success"> Submit Inquiry</button>
				</form>
				</div>
			</div>
			<div class="col-md-4"></div>
	</div>
</div>