<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 <?php echo HTML::style('bootstrap/css/bootstrap.min.css'); ?>
 <?php echo HTML::style('style.css'); ?>



    <?php echo HTML::script('flot/jquery.js'); ?>
    <?php echo HTML::script('bootstrap/js/bootstrap.js'); ?>

  </head>
  <body>

 
<!-- Main Container -->
<section>
<div class="container login">
    <div class="row ">
        <div class="center col-md-4 well">
            <legend>Please Sign In</legend>
            <div class="alert alert-danger"  <?php if($error) echo 'style="display:block"'; else echo 'style="display:none"'; ?> >
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
            <form method="POST" action=""  accept-charset="UTF-8">
            <div class="control-group form-spaced">
               <label class="control-label">Username</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" class="input-lg form-control form-spaced" id="username" name="username" placeholder="Username">
                  </div>
              </div>
          </div>
            <div class="control-group form-spaced">
              <label class="control-label">Password</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="Password" id="password" class="input-lg form-control form-spaced" name="password" placeholder="Password">
                  </div>
              </div>
          </div>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <span class="col-md-offset-8"><?php echo HTML::anchor('Welcome/createAccount','Créer un compte'); ?></span>
            </form>
        </div>
    </div>
</div>

</section>
<!-- Main Container Ends -->




</body>
</html>