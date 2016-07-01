  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=  $this->va->site_url(''); ?>"><i class="fa fa-paw"></i> Neko SHOP!</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class=""><a href="<?=  $this->va->site_url(''); ?>"><i class="fa fa-home"></i> Home</a></li>
            
            <li><a href="<?=  $this->va->site_url('home/products'); ?>"><i class="fa fa-list"></i> Products</a></li>

            <li><a href="<?=  $this->va->site_url('home/cart'); ?>"><i class="fa fa-shopping-cart"></i> My Cart <label class="label label-success" style="border-radius:20px;"><?= $_SESSION['cart_count_items']; ?></label> </a></li>

            <li><a href="<?=  $this->va->site_url('home/inquries'); ?>"><i class="fa fa-phone"></i> Inquiries</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>