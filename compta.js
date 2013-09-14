

var months = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Novembre','Décembre'];
var days = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];


var breadcrumb = [];


var nextLevel = null;


function loader(div_id,state)
{
	if(div_id!='')
	{
		if(state)
		{
			// Ajout d'un élement <img> d'id #ajaxBox_loader
			var ajaxBox = document.getElementById(div_id);
			if(ajaxBox)
			{
				var img = ajaxBox.appendChild(document.createElement('img'));
				img.id = div_id+'_loader';
				img.className = 'loader';
				img.src = '/compta/loader.gif';

			}
			else
				console.log(div_id+" n'existe pas");
			


		}
		// Suppression de l'image de loading
		else
		{
			// Suppression de l'élement #ajaxBox_loader
			var ajaxBox_loader = document.getElementById(div_id+'_loader');
			if (ajaxBox_loader)
				ajaxBox_loader.parentNode.removeChild(ajaxBox_loader);
		}
	}
	
}

function getAjaxData(container,url,vars,calback)
{

	loader(container,true);
	var xhr=null;
	if (window.XMLHttpRequest)    //  Objet standard
		xhr = new XMLHttpRequest();   //  Firefox, Safari, ...
	else
		if (window.ActiveXObject)      //  Internet Explorer
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
	var tr = "";//format : Nom_variable_POST=contenu
	for(var val in vars)
	{

		tr +=val+"="+vars[val]+"&";
	}
		


	xhr.open("POST", url, true); //Last param : false pour sync
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(tr); 
	xhr.onreadystatechange = function(){ // instructions de traitement de la réponse
		if (xhr.readyState==4 )
		{
			if(xhr.status==200)
			{
				loader(container,false);
				calback(xhr.responseText,container);
				




			}

			else
			{
				loader(container,false);
				$('#plotarea').append('failure')
			}
		}
	}

}


function setBreadcrumb()
{

	$("#breadcrumb").html('<li id="fullData" onclick="handleClickBreadcrumb(this)"><a href="#">Ensemble des données</a></li>');
	nextLevel = 'year';
	var name;
	var last;
	for(name in breadcrumb)
	{
		last = breadcrumb[name];
		if(name=='year')
		{
			$("#breadcrumb").append('<li id="'+name+'" onclick="handleClickBreadcrumb(this)"><a href="#">'+breadcrumb[name]+'</a></li>');

			nextLevel = 'month';
		}
		else if(name=='month')
		{
			$("#breadcrumb").append('<li id="'+name+'" onclick="handleClickBreadcrumb(this)"><a href="#">'+months[breadcrumb['month']-1]+'</a></li>');
			last = months[breadcrumb['month']-1];
			nextLevel = 'day';
		}
			
		else if(name=='day')
		{
			$("#breadcrumb").append('<li id="'+name+'"" onclick="handleClickBreadcrumb(this)"><a href="#">'+getDayOfWeek(breadcrumb['year'],breadcrumb['month'],breadcrumb['day'])+'</a></li>');
			nextLevel = null;
			last = getDayOfWeek(breadcrumb['year'],breadcrumb['month'],breadcrumb['day']);
		}
			
		else
			$("#breadcrumb").append('<li id="'+name+'" onclick="handleClickBreadcrumb(this)"><a href="#">'+breadcrumb[name]+'</a></li>');

	}
	$("#"+name).removeAttr('onclick');
	$("#"+name).html(last);
	$("#"+name).addClass("active");
	
		
		

}


function tickFormatterMonth(v, a) {return months[v-1]}

function handleClickBreadcrumb(item)
{

	var found = item.id=='fullData' ? true :false;

		


	for(var name in breadcrumb)
	{
		if(found)
			delete breadcrumb[name];

			
		if(name==item.id)
			found = true;
			
		
			

	}
	setBreadcrumb();
	init();

	
}



function makeMeAPie(ajaxData,container)
{
	var rawData = JSON.parse(ajaxData);
	var data =[];
	for (var i = 0; i < rawData.length; i++) {
		data[i] = {
			label: rawData[i]['label'],
			data: parseInt(rawData[i]['amount'],10)
		}
	} 


	$.plot('#'+container, data, {
		series: {
			pie: {
				show: true
			}
		},
		grid: {
			hoverable: true,
			clickable: true,

		},
		tooltip: true,
		tooltipOpts: {
			content: "%s : %vp.2 € (%p.2 %)"
		}

	});
	$("#flotTip").hide();

}




function foo(ajaxData,container,tooltipFormat,xaxisTickFormatetr)
{
	var rawData = JSON.parse(ajaxData);
	var data =[];
	

	for (var i = 0; i < rawData.length; i++) {

		data[i] =  [
parseInt(rawData[i]['label'],10),parseInt(rawData[i]['amount'],10)
		]
	} 

	var tf=null;
	var tooltipMessage = null;	
	if(nextLevel=='year')
		tooltipMessage = "Année %x.0 : %y.2 € ";
	if(nextLevel=='month')
	{
		tf=tickFormatterMonth;
		tooltipMessage = "Mois %x.0 : %y.2 € ";
	}
	if(nextLevel=='day')
		tooltipMessage = "Jour %x.0 : %y.2 € ";
		






	$.plot('#'+container, [data], {
		series: {
        bars:{ show: true,align:"center" }
    },
    xaxis:
    {
    	tickSize : 1,
    	tickFormatter: tf,
    	tickDecimals: 0

    },
		
		grid: {
			hoverable: true,
			clickable: true,

		},
		tooltip: true,
		tooltipOpts: {
			content: tooltipMessage
		}

	});
	$("#flotTip").hide();

}

function foo2(ajaxData,container)
{

	var rawData = JSON.parse(ajaxData);
	var table = $('#example').dataTable();
	for (var i = 0; i < rawData.length; i++) {
		
		table.fnAddData( [rawData[i]['date'],rawData[i]['label'],rawData[i]['amount'],rawData[i]['description']],false);
	} 
	table.fnDraw();


}

function getDayOfWeek(year,month,dayNumber)
{
	var d = new Date();
	if(year!==null && month!==null && dayNumber !==null)
	{
		d.setFullYear(year);
		d.setMonth(month-1);
		d.setDate(dayNumber);
		return days[d.getDay()]+" "+dayNumber;

	}
	return dayNumber;
	

}




