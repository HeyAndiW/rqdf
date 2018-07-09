<div class="container"><br><br><br>
  <?php if (!empty($Logerr)) { ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $Logerr ?>
    </div>
  <?php } ?>
  <div class="form-login">
    <img src="<?php echo base_url('assets/images/0.png') ?>" class="icon-user-null img-circle">
    <form action="<?php echo base_url('home/welcome/do_login') ?>" method="post">
      <h3 class="text-center display-1"><strong><span class="f-gray">S</span>TU<span class="f-gray">DEN</span>T</strong></h3>
      <hr>
      <div class="form-group form-group-lg">
        <label class="control-label" for="username">Username</label>
        <input name="username" type="text" class="form-control" id="username" placeholder="Enter Username">
      </div>
      <div class="form-group form-group-lg">
        <label class="control-label" for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
      </div><br>
      <button type="submit" class="btn btn-success btn-block btn-lg">LOGIN</button>
    </form>
  </div>
</div>