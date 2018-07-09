<div class="container-fluid">
  	<div class="navbar mynavbar" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target">
					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="target">
				<ul class="nav navbar-nav">
					<li><a href=""><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" >Devisi-Devisi <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Al-Bayan</a></li>
							<li><a href="#">Al-Lughah</a></li>
							<li><a href="#">Muamalah</a></li>
							<li><a href="#">Ar-Rahmah</a></li>
							<li><a href="#">Digital</a></li>
							<li><a href="#">EO</a></li>
							<li><a href="#">Al-Liwa'</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li><a href=""><span class="glyphicon glyphicon-user"></span> Kontak</a></li>
				</ul>
				<div role="search" class="navbar-right">
				<?php if (!empty($username)) { ?>
					<img src="<?php echo base_url() . 'assets/images/' . $profile[0]['photo_name'] ?>" class="icon-user img-circle">
					<a href="<?php echo base_url('home/welcome/logout') ?>" class="btn btn-danger btn-88">LOGOUT</a>
				<?php }else{ ?>
					<button type="button" class="btn btn-danger btn-modal btn-signup" data-modal=".signup-modal">SIGN UP</button>
					<button type="button" class="btn btn-success btn-modal btn-login" data-modal=".login-modal">LOGIN</button>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="welcome">
		<div class="row text-secondary">
			<div class="col-md-7 thecontent1">
				<h1 class="display-4">...السلام عليكم ورحمت الله وبركاته</h1>
				<h4>Welcome to Rumah Qur'an Darul Falah Website, in this website you can know <strong>Who We Are</strong>, <strong>What We Do</strong>, <strong>ETC.</strong></h4><br>
				<p><a class="btn btn-info btn-lg" href="#" role="button">SEE THE PROFILE</a> OR 
				<a class="btn btn-outline-danger btn-lg" href="#" role="button">LET'S JOIN THE CLASS!!</a></p>
			</div>
		</div>
	</div>
</div>      

<div class="mymodal login-modal <?php if(!empty($Logerr)) echo "open" ?>">
	<div class="container">
	  <div class="form-login modal-content">
  	  	<button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">×</button>
	    <img src="<?php echo base_url('assets/images/0.png') ?>" class="icon-user-null img-circle">
	    <form action="<?php echo base_url('home/welcome/do_login') ?>" method="post">
	      <h3 class="text-center display-1"><strong><span class="f-gray">S</span>TU<span class="f-gray">DEN</span>T</strong></h3>
	      <hr>
			<?php if (!empty($Logerr)) { ?>
			<div class="alert alert-danger mark-error-login" role="alert">
			  <?php echo $Logerr ?>
			</div>
			<?php } ?>
	      <div class="form-group form-group-lg">
	        <label class="control-label" for="username">Username</label>
	        <input name="username" type="text" class="form-control" placeholder="Enter Username">
	      </div>
	      <div class="form-group form-group-lg">
	        <label class="control-label" for="password">Password</label>
	        <input name="password" type="password" class="form-control" placeholder="Password">
	      </div><br>
	      <button type="submit" class="btn btn-success btn-block btn-lg">LOGIN</button>
	    </form>
	  </div>
	</div>
</div>