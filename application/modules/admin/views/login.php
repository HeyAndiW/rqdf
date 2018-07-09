<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styleadmin.css">
</head>
<body class="bg-quran">


<div class="container"><br><br><br>
  <div class="form-login">
    <img src="<?php echo base_url('assets/images/0.png') ?>" class="icon-user-null img-circle">
    <form action="<?php echo base_url('admin/welcome/do_login') ?>" method="post">
      <h3 class="text-center display-1">Login For <strong class="f-gray">ADMIN</strong></h3>
      <hr>
    <?php if (!empty($Logerr)) { ?>
      <div class="alert alert-danger mark-error-login" role="alert">
        <?php echo $Logerr ?>
      </div>
    <?php } ?>
      <div class="form-group form-group-lg">
        <label class="control-label" for="username">Username</label>
        <input name="username" type="text" class="form-control" id="username" placeholder="Enter Username">
      </div>
      <div class="form-group form-group-lg">
        <label class="control-label" for="password">Password</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <br>
      <button type="submit" class="btn btn-success btn-block btn-lg">LOGIN</button>
    </form>
  </div>
</div>