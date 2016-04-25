<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= $this->va->site_url('admin'); ?>">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="<?= $this->va->site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-building"></i> Supply <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= $this->va->site_url('admin/supplies'); ?>"><i class="fa fa-plus"></i> Add Supply</a></li>
                  <li><a href="<?= $this->va->site_url('admin/viewsupplies'); ?>"><i class="fa fa-search"></i> View Supplies</a></li>
                </ul>
              </li>
            <li><a href="<?= $this->va->site_url('admin/inqueries'); ?>"><i class="fa fa-phone"></i> Inqueries</a></li>
            <li><a href="#" id="logout"><i class="fa fa-unlock"></i> Logout <?= $this->va->get_admin_session(); ?></a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<script>
  $(document).ready(function(){
      $("#logout").click(function(){
        bootbox.confirm("Are you sure ?",function(x){
          if(x==true){
            window.location = "<?= $this->va->site_url('admin/logout'); ?>"
          }
        });
      });
  });
</script>