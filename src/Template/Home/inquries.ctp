<div class="container" style="margin-top: 90px;">
	<div class="row">
	

			<div class="col-md-12">
			
				<div class="well">
				<h1 style="text-align: center"> Inquiry Form </h1>
				<?= $this->Flash->render(); ?>
				



				<form accept-charset="utf-8" action="" method="POST">

				<?php
				if(isset($front['form_errors']['name'])){

				foreach($front['form_errors']['name'] as $err):
					echo "<label style=\"color:red;\">* ".$err."</label>";
				endforeach;
				}else{
					echo "<label></label>";
				}


				?>
				<input style="" type="text" name="name" id="name"  class="form-control" placeholder="Your Name" />
				
				
				<?php
				if(isset($front['form_errors']['address'])){

				foreach($front['form_errors']['address'] as $err):
					echo "<label style=\"color:red;\">* ".$err."</label>";
				endforeach;
				}else{
					echo "<label></label>";
				}


				?>
				<input style="" type="text" name="address" id="address"  class="form-control" placeholder="Your Address" />

				
				<?php
				if(isset($front['form_errors']['email_add'])){

				foreach($front['form_errors']['email_add'] as $err):
					echo "<label style=\"color:red;\">* ".$err."</label>";
				endforeach;
				}else{
					echo "<label></label>";
				}


				?>
				<input type="text" name="email_add" class="form-control" placeholder="Your Email Address" />

				
				<?php
				if(isset($front['form_errors']['contact_no'])){

				foreach($front['form_errors']['contact_no'] as $err):
					echo "<label style=\"color:red;\">* ".$err."</label>";
				endforeach;
				}else{
					echo "<label></label>";
				}


				?>
				<input style="" type="text" name="contact_no" id="contact_no"  class="form-control" placeholder="Your Contact No." />
				
			
				<?php
				if(isset($front['form_errors']['inquiry_subject'])){

				foreach($front['form_errors']['inquiry_subject'] as $err):
					echo "<label style=\"color:red;\">* ".$err."</label>";
				endforeach;
				}else{
					echo "<label></label>";
				}

				?>
				<input style="" type="text" name="inquiry_subject" id="inquiry_subject"  class="form-control" placeholder="Your Inquiry Subject" />


				<?php
				if(isset($front['form_errors']['details'])){

				foreach($front['form_errors']['details'] as $err):
					echo "<label style=\"color:red;\">* ".$err."</label>";
				endforeach;
				}
				else{
					echo "<label></label>";
				}

				?>
				<textarea name="details" class="form-control" placeholder="Details Here"></textarea>
				<br>
				<button class="btn btn-success"><i class='fa fa-envelope'></i> Submit Inquiry</button>
				</form>
				</div>
			</div>
			
	</div>
</div>