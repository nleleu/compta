<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 <?php echo HTML::style('bootstrap/css/bootstrap.min.css'); ?>
 <?php echo HTML::style('style.css'); ?>
 <?php echo HTML::style('datatables/media/css/jquery.dataTables.css'); ?>


<?php echo HTML::style('ui/css/smoothness/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('datepicker/css/datepicker.css'); ?>

    <?php echo HTML::script('flot/jquery.js'); ?>
    <?php echo HTML::script('flot/jquery.flot.js'); ?>
    <?php echo HTML::script('flot/jquery.flot.pie.js'); ?>
    <?php echo HTML::script('flot/jquery.flot.time.js'); ?>
    <?php echo HTML::script('uncompressed_tooltip.js'); ?>
    <?php echo HTML::script('datatables/media/js/jquery.dataTables.js'); ?>
    <?php echo HTML::script('ui/js/jquery-ui-1.10.3.custom.min.js'); ?>
    <?php echo HTML::script('datepicker/js/bootstrap-datepicker.js'); ?>
    

<script type="text/javascript">
<?php
echo 'var membersList=JSON.parse(\''.$members.'\');';

echo 'var availableTags=JSON.parse(\''.$users.'\');';

?>
function updateMembersList()
{
    $("#membersList").html('');
    for(var i=0;i<membersList.length;i++)
    {

      $("#membersList").append('<li>'+membersList[i]+'<a class="close close-custom"  href="#" id="'+membersList[i]+'" onclick="deleteAMember(this.id)">  ×</a> </li>');
       
    }
   

}

function addAMember()
{
  if($.inArray($("#user").val(), membersList)==-1 && $.inArray($("#user").val(), availableTags)!=-1)
  {
     membersList.push($("#user").val());
     $("#user").val('');
     updateMembersList();
  }
   

}

function deleteAMember(name)
{

  if($.inArray(name, membersList)!=-1)
  {

    membersList.splice( $.inArray(name, membersList), 1 );
    updateMembersList();
  }
  

}

function updateHiddenField()
{
  $('#members').val(JSON.stringify(membersList));

}



$(function() {



$( "#user" ).autocomplete({
source: availableTags
});


});
</script>
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
              <li class="active">Création de communauté</li>
          </ol>
         </div>

         

       </div>

      <?php echo View::factory('menu')->set('current', 'communities/create') ?>


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

          
          <div class="control-group form-spaced">
              <label class="control-label col-lg-3">Ajouter un membre</label>
              <div class="controls">
                  <div class="input-group">
                  
                      <input type="text" class="input-lg form-control form-spaced" id="user" name="user" placeholder="User">
                      <span class="input-group-btn">
                  <button class="btn btn-default btn-lg" type="button" onclick="addAMember()">Ajouter</button>
                </span>
                  </div>
              </div>
          </div>


          <div class="container">
            <ul id="membersList">
            </ul>
          </div>

          <input type="hidden" id="members" name="members">
          
          
   
          <div class="control-group">
          <label class="control-label col-lg-3"></label>
            <div class="controls">
             <button type="submit" class="btn btn-success" onclick="updateHiddenField()">Submit</button>
   
           </div>
   
      </div>

</div>
</div>

</div>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo HTML::script('bootstrap/js/bootstrap.min.js'); ?>
    <?php echo HTML::script('compta.js'); ?>


    

  </body>
</html>
