<div class="container" style="margin-top: 70px;">

<div class="row">

    <div class="col-lg-12">
                <h1 class="page-header">Construction Supplies</h1>
            </div>
<?php foreach($front['construction_supplies'] as $data){?>


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a  rel="" href="#" data-img="<?= $this->va->site_url('uploads/').$data->supply_img; ?>" class="viewimg thumbnail">
                    <img title="<?= $data->supply_description; ?>" style="width:259px; height: 250px;" class="img-responsive"  alt="<?= $data->supply_description; ?>" src="<?= $this->va->site_url('uploads/').$data->supply_img; ?>">
                </a>
				<p style="text-align: center;"><?= $data->supply_description; ?></p>
                <p style="text-align: center;"><?= "PHP ".number_format($data->supply_price); ?></p>
            </div>

<?php }?>


	</div>
	<?php echo "<div align='center'><ul class='pagination pagination-lg'>".$this->Paginator->numbers()."</ul></div>"; ?> 
</div>

<script>
    $(document).ready(function() {
        // body...
        var imgmodal;

        $(document).on('click','.viewimg',function(){
            var img= this.dataset.img;

                imgmodal = bootbox.dialog({

                    title:'Image Preview',
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