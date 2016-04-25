
<style type="text/css">
	body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
<div class="container">
 
<div class="col-md-12">
<?= $this->Flash->render(); ?>
   <form class="form-signin" action="" method="POST" accept-charset="utf-8" id="frmAdminLogin">
        <h2 class="form-signin-heading">Please sign in</h2>
        
        <label for="inputEmail" class="">Username</label>
        <input type="text" id="inputUser" class="form-control" placeholder="Username" name="username"/>
        <label for="inputPassword" class="">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"/>
        <div class="checkbox">
        
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-lock"></i> Sign in</button>
        <a class="btn btn-lg btn-primary btn-block" href="<?= $this->va->site_url(NULL); ?>"><i class="fa fa-home"></i> Return Home</a>
      </form>
		</div>
</div>
