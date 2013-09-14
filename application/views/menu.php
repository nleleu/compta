
<div class="col-md-3"><ul class="nav nav-pills nav-stacked">
	<li <?php if($current=='home') echo 'class="active"'; ?> ><a href="/compta">Home</a></li>
	<li <?php if($current=='createInvoice') echo 'class="active"'; ?> ><a href="/compta/Welcome/invoice">Nouvelle facture</a></li>

	<li class="dropdown <?php if(strpos($current,'categories')!==false) echo 'active';?>">
		<a href="#"  class="dropdown-toggle" data-toggle="dropdown">Catégories <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li <?php if($current=='categories/my') echo 'class="active"'; ?> ><a href="#">Mes catégories</a></li>
			<li <?php if($current=='categories/create') echo 'class="active"'; ?> ><a href="/compta/Welcome/category">Ajout</a></li>
		</ul>
	</li>


	<li class="dropdown <?php if(strpos($current,'communities')!==false) echo 'active';?>">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Communautés <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li <?php if($current=='communities/statistiques') echo 'class="active"'; ?> ><a href="/compta/Welcome/com">Statistiques</a></li>
			<li <?php if($current=='communities/my') echo 'class="active"'; ?> ><a href="#">Mes communautés</a></li>
			<li <?php if($current=='communities/create') echo 'class="active"'; ?> ><a href="/compta/Welcome/community">Ajout</a></li>
		</ul>
	</li>


	
</ul></div>