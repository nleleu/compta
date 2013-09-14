<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 <?php echo html::style('bootstrap/css/bootstrap.min.css'); ?>
 <?php echo html::style('style.css'); ?>
 <?php echo html::style('datatables/media/css/jquery.dataTables.css
'); ?>


    <?php echo html::script('flot/jquery.js'); ?>
    <?php echo html::script('flot/jquery.flot.js'); ?>
    <?php echo html::script('flot/jquery.flot.pie.js'); ?>
    <?php echo html::script('flot/jquery.flot.time.js'); ?>
    <?php echo html::script('uncompressed_tooltip.js'); ?>
    <?php echo html::script('datatables/media/js/jquery.dataTables.js'); ?>

<script>

function tableCommunityInvoices(ajaxData,container)
{

  var rawData = JSON.parse(ajaxData);
  var table = $('#example').dataTable();
  for (var i = 0; i < rawData.length; i++) {
    
    table.fnAddData( [rawData[i]['date'],rawData[i]['label'],rawData[i]['amount'],rawData[i]['payer'],rawData[i]['beneficiaries'],rawData[i]['description']],false);
  } 
  table.fnDraw();


}

function init()
{

  

  var table = $('#example').dataTable()
  table.fnClearTable();
  var t = [];
  t['communityId'] = $('#communitySelector').val();
  for(var name in breadcrumb)
  {
    t[name]=breadcrumb[name];
  }

  if(breadcrumb['categoryName']===undefined)
  {
    //6
    getAjaxData("pieChartCatPlot","http://localhost/compta/welcome/test6",t,makeMeAPie);
    $("#pieChartCat").show();
  }
    
  else
    $("#pieChartCat").hide();

  if(breadcrumb['day']===undefined)
  {
    getAjaxData("barsChartPlot","http://localhost/compta/welcome/test5",t,foo);
    $("#barsChart").show();
  }
    
  else
    $("#barsChart").hide();


    if(breadcrumb['username']===undefined)
  {

    getAjaxData("pieChartMembersPlot","http://localhost/compta/welcome/test7",t,makeMeAPie);
    $("#pieChartMembers").show();
  }
    
  else
    $("#pieChartMembers").hide();


  getAjaxData("example","http://localhost/compta/welcome/test4",t,tableCommunityInvoices);
  var pieChartMemberPlot = $("#pieChartMembersPlot");
  pieChartMemberPlot.unbind("plotclick");
  pieChartMemberPlot.bind("plotclick", function(event, pos, obj) {
    if (!obj) {
      return;
    }


    breadcrumb['username']= obj.series.label;
  
    setBreadcrumb();
    init();

    
  }); 

  var pieChartCatPlot = $("#pieChartCatPlot");
  pieChartCatPlot.unbind("plotclick");
  pieChartCatPlot.bind("plotclick", function(event, pos, obj) {
    if (!obj) {
      return;
    }


    breadcrumb['categoryName']= obj.series.label;
  
    setBreadcrumb();
    init();

    
  }); 

  var pieChartCatPlot = $("#barsChartPlot");
  pieChartCatPlot.unbind("plotclick");
  pieChartCatPlot.bind("plotclick", function(event, pos, obj) {
    if (!obj) {
      return;
    }


    breadcrumb[nextLevel]= obj.datapoint[0].toFixed(0);
  
    setBreadcrumb();
    init();

    
  }); 


}





$(window).load(function(){

  var table = $('#example').dataTable( {
            "oLanguage": {
              "sProcessing":     "Traitement en cours...",
    "sSearch":         "Rechercher&nbsp;:",
    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
    "sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
    "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
    "sInfoPostFix":    "",
    "sLoadingRecords": "Chargement en cours...",
    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
    "sEmptyTable":     "Aucune donnée disponible dans le tableau",
    "oPaginate": {
        "sFirst":      "Premier",
        "sPrevious":   "Pr&eacute;c&eacute;dent",
        "sNext":       "Suivant",
        "sLast":       "Dernier"
    },
    "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
    }

            }
        }
  );

  var pieChartCatPlot = $("#pieChartCatPlot");
  pieChartCatPlot.css("height", "250px");
  pieChartCatPlot.css("width", "500px");


  var pieChartCatPlot = $("#pieChartMembersPlot");
  pieChartCatPlot.css("height", "250px");
  pieChartCatPlot.css("width", "500px");

  var pieChartCatPlot = $("#barsChartPlot");
  pieChartCatPlot.css("height", "250px");
  pieChartCatPlot.css("width", "500px");
  var d= new Date();
  breadcrumb['year'] = d.getFullYear();
  breadcrumb['month']= d.getMonth()+1;
  setBreadcrumb();
  init();
  






  
});


</script>
  </head<>
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

</ol>
         </div>

         

       </div>

       <?php echo View::factory('menu')->set('current', 'communities/statistiques') ?>

<div class="col-md-9"> 

<div class="container">
  <div class="form-group form-horizontal">
    <label for="communitySelector" class="control-label col-lg-4">Séléction d'une communauté</label>
    <div class="col-lg-3">
<select class=" form-control " id="communitySelector" onchange="init()">
  <?php

    foreach ($communities as $value)
      echo '<option value="'.$value->id.'">'.$value->label.'</option>';
     


  ?>
</select>
</div>
</div>
</div>

  <div class="container">
    <div id="pieChartCat">
   <div class="page-header">
  <h1>Répartition par postes de dépenses</h1>
</div>

  <div class="ajaxcontent" id="pieChartCatPlot"></div>
</div>

<div id="pieChartMembers">
   <div class="page-header">
  <h1>Dépense par membres</h1>
</div>

  <div class="ajaxcontent" id="pieChartMembersPlot"></div>
</div>
</div>
<div class="container">
   <div id="barsChart">
 <div class="page-header">
  <h1>Histogramme</h1>
</div>

<div class="ajaxcontent" id="barsChartPlot"></div>
</div>
</div>

<div class="container">
  <div id="table">
 <div class="page-header">
  <h1>Détails</h1>
</div>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
  <thead>
    <tr>
      <th width="10%">Date</th>
      <th width="25%">Catégorie</th>
      <th width="5%">Montant</th>
      <th width="10%">Payeur</th>
      <th width="20%">Bénéficiaires</th>
      <th width="30%">Description</th>
    </tr>
  </thead>
  <tbody class="table-content">
</tbody>
</table>

</div>
</div>

</div>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo html::script('bootstrap/js/bootstrap.min.js'); ?>
    <?php echo html::script('compta.js'); ?>

    </div>
    

  </body>
</html>
