<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 <?php echo html::style('bootstrap/css/bootstrap.min.css'); ?>
 <?php echo html::style('style.css'); ?>
 <?php echo html::style('datatables/media/css/jquery.dataTables.css'); ?>


<?php echo html::style('ui/css/smoothness/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo html::style('datepicker/css/datepicker.css'); ?>

    <?php echo html::script('flot/jquery.js'); ?>
    <?php echo html::script('flot/jquery.flot.js'); ?>
    <?php echo html::script('flot/jquery.flot.pie.js'); ?>
    <?php echo html::script('flot/jquery.flot.time.js'); ?>
    <?php echo html::script('uncompressed_tooltip.js'); ?>
    <?php echo html::script('datatables/media/js/jquery.dataTables.js'); ?>
    <?php echo html::script('ui/js/jquery-ui-1.10.3.custom.min.js'); ?>
    <?php echo html::script('datepicker/js/bootstrap-datepicker.js'); ?>
    


  </head>
  <body>
    <div class="container">
       <div class="container">
        <h1>MaCompta.fr</h1>

       </div>

       <div class="container">
         <div class="col-md-3">
         </div>

         <div class="col-md-9">
          <ol class="breadcrumb" id="breadcrumb">
              <li class="active">Création de catégorie</li>
          </ol>
         </div>

         

       </div>

      <?php echo View::factory('menu')->set('current', 'categories/create') ?>


<div class="col-md-9"> 
  <div class="container">


   <form id="signup" class="form-horizontal" method="post" action="">
  
           <div class="control-group form-spaced">
               <label class="control-label col-lg-3">Label</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input type="text" class="input-lg form-control form-spaced " id="label" name="label" placeholder="Label">
                  </div>
              </div>
          </div>

          
          
   
          <div class="control-group">
          <label class="control-label col-lg-3"></label>
            <div class="controls">
             <button type="submit" class="btn btn-success" >Submit</button>
   
           </div>
   
      </div>

</div>
</div>

</div>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo html::script('bootstrap/js/bootstrap.min.js'); ?>
    <?php echo html::script('compta.js'); ?>


    

  </body>
</html>
