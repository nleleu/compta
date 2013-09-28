<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 <?php echo HTML::style('bootstrap/css/bootstrap.min.css'); ?>
 <?php echo HTML::style('style.css'); ?>



    <?php echo HTML::script('flot/jquery.js'); ?>
     <?php echo HTML::script('jquery.validate.min.js'); ?>
    <?php echo HTML::script('bootstrap/js/bootstrap.js'); ?>

  </head>
  <body>


 <script type="text/javascript">
$(document).ready(function(){

$("#signup").validate({
rules:{
username:"required",
email:{
required:true,
email: true
},
password:{
required:true,
minlength: 4
},
confirmPassword:{
required:true,
equalTo: "#confirmPassword"
}
},

errorClass: "help-inline"

});
});
</script>

 
<!-- Main Container -->
<section>
<div class="container">
   <div class="center well col-md-6">
         <form id="signup" class="form-horizontal" method="post" action="">
           <legend>Sign Up</legend>
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
              <label class="control-label">Email</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input type="text" class="input-lg form-control form-spaced" id="email" name="email" placeholder="Email">
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
          <div class="control-group form-spaced">
              <label class="control-label">Confirm Password</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="Password" id="confirmPassword" class="input-lg form-control form-spaced" name="confirmPassword" placeholder="Re-enter Password">
                  </div>
              </div>
          </div>
   
          <div class="control-group">
          <label class="control-label"></label>
            <div class="controls">
             <button type="submit" class="btn btn-success" >Create My Account</button>
   
           </div>
   
      </div>
      <span class="col-md-offset-9"><?php echo HTML::anchor('Welcome/auth','Déjà membre ?'); ?></span>
   
        </form>
   
     </div>
  </div>
 


</body>
</html>