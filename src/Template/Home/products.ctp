<div class="container" style="margin-top: 70px;">

<div class="row">

    <div class="col-lg-12">

    <form action="<?php echo $this->va->site_url('home/addtocart'); ?>" method="POST" accept-charset="utf-8">
                <h1 class="page-header" style="text-align:center;">Products</h1>
            </div>

<?php foreach($front['products'] as $data){?>
    <input type="hidden" name="pr_price[]" value="<?= $data->supply_price; ?>" />
    <input type="hidden" name="pr_name[]" value="<?= $data->supply_name; ?>" />


            <div class="col-lg-3 col-md-4 col-xs-6 thumb" style="margin-top:30px;">
                <a data-description="" rel=""  data-img="<?= $this->va->site_url('uploads/').$data->supply_img; ?>" class="viewimg thumbnail">
                    <img title="<?= $data->supply_description; ?>" style="width:259px; height: 250px;" class="img-responsive"  alt="<?= $data->supply_description; ?>" src="<?= $this->va->site_url('uploads/').$data->supply_img; ?>">
                </a>
				<p style="text-align: center;"><?= $data->supply_name; ?></p>
                <p style="text-align: center;"><?= "PHP ".number_format($data->supply_price); ?></p>
                <p style="color:green;"> Quantity: </p>
                <select  name="qty[]" style="margin-bottom:15px;">
                    <option value="">0</option>
                    <?php for($i=1;$i<=$data->supply_stock; $i++){?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php }?>
                </select>
            
            </div>

<?php }?>

	</div>
    <div style="text-align:right; margin-top:30px;"><button class="btn btn-primary btn-lg"><i class='fa fa-shopping-cart'></i> Add to cart </button>

    </div>
</form>  
      
	<?php echo "<div align='center'><ul class='pagination pagination-lg'>".$this->Paginator->numbers()."</ul></div>"; ?> 
</div>


<script>
    $(document).ready(function() {
        // body...
        var imgmodal;

        $(document).on('click','.viewimg',function(){
            var img= this.dataset.img;

                imgmodal = bootbox.dialog({

                    title:'Product Image',
                    message: '<i class="fa fa-search"></i>',
                    size: 'medium',
                    onEscape:function(){

                    }
                });

                imgmodal.contents().find('.bootbox-body').html("<div align='center'>"+
                    "<img  style='height:400px; width:400px;' class='img-responsive' src='"+img+"'>"+
                    "</div>");

        });
    });    
</script>