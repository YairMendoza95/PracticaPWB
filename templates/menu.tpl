<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#opciones1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand"><span id="mrj">xD</span></span>
    </div>
    <div class="collapse navbar-collapse" id="opciones1">
      <ul class="nav navbar-nav">
        <li {if $menu eq "inicio"}class="active"{/if}><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li {if $menu eq "html"}class="active"{/if}><a href="index.php?pagina=html"><span class="glyphicon glyphicon-list"></span> Etiquetas HTML</a></li>
        <li {if $menu eq "instituciones"}class="active"{/if}><a href="index.php?pagina=instituciones"><span class="glyphicon glyphicon-education"></span> Instituciones</a></li>
        <li {if $menu eq "registro"}class="active"{/if}><a href="index.php?pagina=registro"><span class="glyphicon glyphicon-edit"></span> Registro</a></li>
        <li {if $menu eq "busqueda"}class="active"{/if}><a href="index.php?pagina=busqueda"><span class="glyphicon glyphicon-search"></span> Búsqueda</a></li>
        <li {if $menu eq "script"}class="active"{/if}><a href="index.php?pagina=script">[<span class="glyphicon glyphicon-console"></span>] Javascript</a></li>
        <li {if $menu eq "jquery"}class="active"{/if}><a href="index.php?pagina=jquery"><span class="glyphicon glyphicon-save"></span> JQuery</a></li>
        <li {if $menu eq "rbd"}class="active"{/if}><a href="index.php?pagina=rbd"><span class="glyphicon glyphicon-plus"></span> MySQL</a></li>
      </ul>
	</div>
</nav>
