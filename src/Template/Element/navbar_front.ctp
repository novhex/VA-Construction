  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=  $this->va->site_url(''); ?>">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="<?=  $this->va->site_url(''); ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=  $this->va->site_url('home/inquries'); ?>"><i class="fa fa-phone"></i> Inquiries</a></li>
            <li><a href="<?=  $this->va->site_url('home/constructionsupplies'); ?>"><i class="fa fa-building"></i> Construction Supplies</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>