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

function getMembers()
{
  var t = [];
  t['communityId']=$("#communityId").val();
  getAjaxData('',"/compta/welcome/getCommunityMembers",t,refreshMembers)

}

function refreshMembers(ajaxData)
{
  $('#beneficiaries').html('');
  <?php
    echo '$("#payer").html(\'<option value="'.$user->id.'">'.$user->username.'</option>\')';
  ?>
  
  var rawData = JSON.parse(ajaxData);
  for (var i = 0; i < rawData.length; i++) {

    $('#beneficiaries').append('<label class="checkbox-inline"><input type="checkbox" id="'+rawData[i]['username']+'" name="'+rawData[i]['username']+'" value="'+rawData[i]['id']+'"> '+rawData[i]['username']+'</label>');
    if(rawData[i]['id']!= <?php echo $user->id; ?>)
      $('#payer').append('<option value="'+rawData[i]['username']+'">'+rawData[i]['username']+'</option>');

  }

}

function handleCommunityInvoice()
{
  if($('#communityInvoice').is(':checked'))
  {
    $('#communityInvoiceGroup').show();
  }
    
  else
    $('#communityInvoiceGroup').hide();

}

$(window).load(function(){
$('#date').datepicker({
  format: 'dd/mm/yyyy'
}
  
  );
handleCommunityInvoice();
getMembers();

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
              <li class="active">Ajout de facture</li>
          </ol>
         </div>

         

       </div>

       <?php echo View::factory('menu')->set('current', 'createInvoice') ?>


<div class="col-md-9"> 
  <div class="container">


   <form id="signup" class="form-horizontal" method="post" action="">
  
           <div class="control-group form-spaced">
               <label class="control-label col-lg-3">Date</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input type="text" class="input-lg form-control form-spaced " id="date" name="date" placeholder="Date">
                  </div>
              </div>
          </div>

          <div class="control-group form-spaced">
              <label class="control-label col-lg-3">Montant</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                      <input type="text" class="input-lg form-control form-spaced" id="amount" name="amount" placeholder="Montant">
                  </div>
              </div>
          </div>

          <div class="control-group form-spaced">
              <label class="control-label col-lg-3">Categorie</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <select class=" form-control " id="categoryId" name="categoryId">
                      <?php

                        foreach ($categories as $value)
                          echo '<option value="'.$value->id.'">'.$value->label.'</option>';
                         


                      ?>
                    </select>
                  </div>
              </div>
          </div>


          <div class="control-group form-spaced">
              <label class="control-label col-lg-3">Description</label>
              <div class="controls">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <textarea  class="input-lg form-control form-spaced " id="description" name="description" placeholder="Date">
                     </textarea>
                  </div>
              </div>
          </div>



          <div class="control-group form-spaced ">
              <label class="control-label col-lg-3 " for="communityInvoice">Communautaire ?</label>
              <div class="controls">
                  <div class="input-group">
                  
              <input type="checkbox" id="communityInvoice" name="communityInvoice" class="form-control" onchange="handleCommunityInvoice()"> 
                  </div>
              </div>
          </div>   

          


    
       <div id="communityInvoiceGroup">  
       <div class="control-group form-spaced ">
              <label class="control-label col-lg-3">Communauté</label>
              <div class="controls">
                  <div class="input-group">
                  
              <select class=" form-control " name ="communityId" id="communityId"  onchange="getMembers()">
                <?php

                  foreach ($communities as $value)
                    echo '<option value="'.$value->id.'">'.$value->label.'</option>';
                   


                ?>
              </select>
                  </div>
              </div>
          </div>         
           

           <div class="control-group form-spaced ">
              <label class="control-label col-lg-3">Payeur</label>
              <div class="controls">
                  <div class="input-group">
                  
              <select class=" form-control " name ="payer" id="payer">
                
              </select>
                  </div>
              </div>
          </div> 
                 
 

          <div class="container">
          <div class="control-group form-spaced ">
              <label class="control-label col-lg-3">Bénéficiaires</label>
              <div class="controls">
                  <div class="input-group"  id="beneficiaries">
                    

                   
               


                  </div>
              </div>
          </div>
        </div>


          <div class="control-group form-spaced">
              <label class="control-label col-lg-3 ">Réduction</label>
              <div class="controls">
                  <div class="input-group">
                  
                      <input type="text" class="input-lg form-control form-spaced" id="reduction" name="reduction" placeholder="Réduction">
                      <span class="input-group-addon">
                      <label>
                        <input type="radio" name="reductionUnit" id="reductionUnit" value="euros" checked>
                        €
                      </label>
                    </span>
                      <span class="input-group-addon">
                      <label>
                        <input type="radio" name="reductionUnit" id="reductionUnit" value="percent" >
                        %
                      </label>
                    </span>
                  </div>
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
    <?php echo HTML::script('bootstrap/js/bootstrap.min.js'); ?>
    <?php echo HTML::script('compta.js'); ?>


    

  </body>
</html>
