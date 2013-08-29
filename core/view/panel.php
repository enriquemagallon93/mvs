<script type="text/javascript">
$(document).ready(function(){
		$('textarea').ckeditor();

});
</script>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
      <!--Sidebar content-->
      <ul class="nav nav-list ">
      	<li class="nav-header">Menú Principal</li>
      	<li class="active" id="tabs"><a href="#inicio" data-toggle="tab" class="tabs_inicio"><img src="img/iconMenuHome.png">Inicio</a></li>
      	<li id="tabs"><a href="#Tnoticias" data-toggle="tab" class="tab_tiponoticia" id="tab_select"><img src="img/iconMenuTipoNoticia.png">Tipos de noticias</a></li>
      	<li id="tabs"><a href="#fuentes" data-toggle="tab" class="tab_fuentes" id="tab_select"><img src="img/iconMenuFuentes.png">Fuentes/Reporteros</a></li>
      	<li id="tabs"><a href="#noticias" data-toggle="tab" class="tab_noticias" id="tab_select"><img src="img/iconMenuNoticias.png">Noticias</a></li>
      	<li id="tabs"><a href="#programas" data-toggle="tab" class="tab_programas" id="tab_select"><img src="img/iconMenuProgramas.png">Progamas</a></li>
      	<li id="tabs"><a href="#locutores" data-toggle="tab" class="tab_locutores" id="tab_select"><img src="img/iconMenuLocutores.png">Locutores</a></li>
      	<li id="tabs"><a href="#entrevistas" data-toggle="tab" class="tab_entrevistas" id="tab_select"><img src="img/iconMenuEntrevistas.png">Entrevistas</a></li>
      	<li id="tabs"><a href="#podscast" data-toggle="tab" class="tab_podscast" id="tab_select"><img src="img/iconMenuPodcasts.png">Podcasts</a></li>
      	<li id="tabs"><a href="#resumen" data-toggle="tab" class="tab_resumen" id="tab_select"><img src="img/corteInformativoMenu.png">Resúmenes Informativos</a></li>
      	<li id="tabs"><a href="#blogs" data-toggle="tab" class="tab_blogs" id="tab_select"><img src="img/iconMenuBlogs.png">Blogs</a></li>
      	<li id="tabs"><a href="#posts" data-toggle="tab" class="tab_post" id="tab_select"><img src="img/iconMenuPosts.png">Posts</a></li>
      	<li id="tabs"><a href="#galeria" data-toggle="tab" class="tab_galeria" id="tab_select"><img src="img/iconMenuGalerias.png">Galerías</a></li>
      	<li id="tabs"><a href="#videos" data-toggle="tab" class="tab_videos" id="tab_select"><img src="img/iconMenuVideos.png">Videos</a></li>
      	<li id="tabs"><a href="#usuarios" data-toggle="tab" class="tab_usuarios" id="tab_select"><img src="img/iconMenuUsuarios.png">Usuarios</a></li>
      	<li id="tabs"><a href="#roles" data-toggle="tab" class="tab_roles" id="tab_select"><img src="img/iconMenuRoles.png">Roles</a></li>
      	<li id="tabs"><a href="#bitacora" data-toggle="tab" class="tab_bitacora" id="tab_select"><img src="img/bitacoraSmall.png">Bitácora</a></li>
      	<li id="tabs"><a href="#micrositio" data-toggle="tab" class="tab_micrositio" id="tab_select"><img src="img/micrositioChica.png">Micrositios</a></li>
      	<li class="nav-header">Opciones</li>
      	<li id="tabs"><a href="#Rinicio" data-toggle="tab"><img src="img/advertenciaChica.png">Redefinir Inicio</a></li>
      	<li id="tabs"><a href="#salir" data-toggle="tab"><img src="img/iconMenuSalir.png">Salir</a></li>
      	<li id="tabs"><a href="#salir" data-toggle="tab"><img src="img/panelLeftPowered.gif" style="float:right;"></a></li>
	  </ul>
    </div>
    <div class="span9">
      <!--Body content-->
		<div class="tab-content">
			<!--Seccion de inicio-->
			<div class="tab-pane active" id="inicio">
				<!--<p>Bienvenido al administrador de Noticias MVS </p>-->

				<a href="#Tnoticias" data-toggle="tab">
					<div class="span2">
						<img src="img/iconBlockTipoNoticia.png">
						<p>Tipos de Noticias</p>
					</div>
				</a>
				<a href="#fuentes" data-toggle="tab">
					<div class="span2">
						<img src="img/iconBlockFuentes.png">
						<p>Fuentes/Reporteros</p>
					</div>
				</a>
				<a href="#noticias" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockNoticias.png">
					<p>Noticias</p>
				</div>
				</a>
				<a href="#programas" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockProgramas.png">
					<p>Progamas</p>
				</div>
				</a>
				<a href="#locutores" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockLocutores.png">
					<p>Locutores</p>
				</div>
				</a>
				<a href="#entrevistas" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockEntrevistas.png">
					<p>Entrevistas</p>
				</div>
				</a>
				<a href="#podscast" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockPodcasts.png">
					<p>Podcasts</p>
				</div>
				</a>
				<a href="#resumen" data-toggle="tab">
				<div class="span2">
					<img src="img/corteInformativo.png">
					<p>Resúmenes Informativos</p>
				</div>
				</a>
				<a href="#blogs" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockBlogs.png">
					<p>Blogs</p>
				</div>
				</a>
				<a href="#posts" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockPosts.png">
					<p>Posts</p>
				</div>
				</a>
				<a href="#galerias" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockGalerias.png">
					<p>Galeria</p>					
				</div>
				</a>
				<a href="#videos" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockVideos.png">
					<p>Videos</p>
				</div>
				</a>
				<a href="#usuarios" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockUsuarios.png">
					<p>Usuarios</p>
				</div>
				</a>
				<a href="#roles" data-toggle="tab">
				<div class="span2">
					<img src="img/iconGenSeguridadClose.png">
					<p>Roles</p>
				</div>
				</a>
				<a href="#bitacora" data-toggle="tab">
				<div class="span2">
					<img src="img/bitacoraBig.png">
					<p>Bitácora</p>
				</div>
				</a>
				<a href="#micrositio" data-toggle="tab">
				<div class="span2">
					<img src="img/micrositio.png">
					<p>Micrositios</p>
				</div>
				</a>
				<a href="#Rinicio" data-toggle="tab">
				<div class="span2">
					<img src="img/advertencia.png">
					<p>Redefinir Inicio</p>
				</div>
				</a>
				<a href="#salir" data-toggle="tab">
				<div class="span2">
					<img src="img/iconBlockSalir.png">
					<p>Salir</p>
				</div>
				</a>
			</div>




			<!--Seccion de Tipo Noticias-->
			<div class="tab-pane" id="Tnoticias">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<!--<tr>
							<td>Actualidad</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>-->
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_Tnoticias"  style="float:right;" id="agregar">Agregar Tipo de Noticia</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>
				<!--fin-->
			</div>
			<!-- funtes/reporteros-->
			<div class="tab-pane" id="fuentes">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Fuente/Reportero</td>
							<td>Foto</td>
							<td>Reportero de MVS</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_fuentes"  style="float:right;" id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>
	
			</div>
			<!-- Noticias-->
			<div class="tab-pane" id="noticias">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Titulo</td>
							<td>Resumen</td>
							<td>Foto</td>
							<td>Nota Publicada</td>
							<td>Tipo de Noticia</td>
							<td>Recomendada</td>
							<td>Prioridad</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>
			</div>
			<!-- Programas-->
			<div class="tab-pane" id="programas">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>Descripción</td>
							<td>Foto</td>
							<td>Tipo de Audio</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_programa"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_programa"  style="float:right;">Enviar</a>
			</div>
			<!-- Locutores-->
			<div class="tab-pane" id="locutores">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>Descripción</td>
							<td>Foto</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_locutor"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>
			</div>
			<!-- Entrevistas-->
			<div class="tab-pane" id="entrevistas">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Programa</td>
							<td>Titulo</td>
							<td>Descripción</td>
							<td>Foto</td>
							<td>Entrevista publicada</td>
							<td>Recomendada</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_entrevista"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>
			</div>
			<!-- Poscasts-->
			<div class="tab-pane" id="podscast">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Programa</td>
							<td>Titulo</td>
							<td>Descripción</td>
							<td>Foto</td>
							<td>Podscast publicada</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_podcast"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>

			</div>
			<!-- Resumen informativo-->
			<div class="tab-pane" id="resumen">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Programa</td>
							<td>Titulo</td>
							<td>Descripción</td>
							<td>Corte publicado</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_resumen"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>

			</div>
			<!-- Blogs-->
			<div class="tab-pane" id="blogs">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Blogs</td>
							<td>Bloguer</td>
							<td>Alias</td>
							<td>Imagen</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_blog"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>

			</div>
			<!-- Post-->
			<div class="tab-pane" id="posts">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Blogs</td>
							<td>Bloguer</td>
							<td>Post</td>
							<td>Imagen</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_post"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>

			</div>
			<!-- Galeria-->
			<div class="tab-pane" id="galeria">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Galería</td>
							<td>Fotos</td>
							<td>Palabra clave</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_galeria"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>

			</div>
			<!-- Videos-->
			<div class="tab-pane" id="videos">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Video</td>
							<td>Link</td>
							<td>Palabra clave</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_video"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>

			</div>
			<!-- Usuarios-->
			<div class="tab-pane" id="usuarios">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>e-mail</td>
							<td>Login</td>
							<td>Rol</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_usuario"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>

			</div>
			<!-- Roles-->
			<div class="tab-pane" id="roles">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>e-mail</td>
							<td>Login</td>
							<td>Rol</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Rol</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Bitacora-->
			<div class="tab-pane" id="bitacora">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Usuario</td>
							<td>Movimiento</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Micrositio-->
			<div class="tab-pane" id="micrositio">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Titulo</td>
							<td>Alias</td>
							<td>Activo en inicio</td>
							<td>Eliminar</td>
							<td>Modificar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Agencia AFP</td>
							<td><img src="img_pruebas_datos/75a32058f891d027b7b459c8353487e4.jpg"></td>
							<td>no</td>
							<td><input type="checkbox"></td>
							<td><input type="radio"></td>
						</tr>
					</tbody>
				</table>
				<button type="button" data-toggle="modal" data-target="#form_microsite"  style="float:right;"
				id="agregar">Agregar Fuentes/Reporteros</button>
				<button type="button" data-toggle="modal" data-target="#form_noticias"  style="float:right;">Enviar</a>
			</div>
			<!--<h1>hola mundo</h1>-->
					<!--<script id="test_tpl" type="text/x-jsmart-tmpl">
   						 {$titulo}
					</script>-->

		</div>
    </div>
  </div>
</div>


<!--formularios-->
	<!--form noticias-->
<div id="form_Tnoticias" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar tipo de noticia</h3>
	  </div>
	  <div class="modal-body">
	    
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Tipo Noticia:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary" id="btn_form" method="insert_Tnoticias">Save changes</button>
	  </div>
</div>
<!--form fuentes/reporteros-->
<div id="form_fuentes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Fuente o Resportero</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td><p>Fuente o Reportero</p></td>
	    			<td><input type="text"></td>
	    		</tr>
	    		<tr>
	    			<td><p>Foto:</p></td>
	    			<td></td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>¿Reportero de MVS?</p>
	    			</td>
	    			<td>
	    				<select class="span1">
				    		<option>Si</option> 
				    		<option>No</option>
				    	</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form noticias-->
<div id="form_noticias" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Noticia</h3>
	  </div>
	  <div class="modal-body">
	  	<table class="table">
	  		<tbody>
	  			<tr>
	  				<td>
	  					<p>Tipo Noticia</p>
	  				</td>
	  				<td>
	  					<select class="span2">
				    		<option>Si</option> 
				    		<option>No</option>
				    	</select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Fuente</p>
	  				</td>
	  				<td>
	  					<select class="span3">
					    		<option>Si</option> 
					    		<option>No</option>
					    </select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Titulo</p>
	  				</td>
	  				<td>
	  					<input type="text">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Resmune</p>
	  				</td>
	  				<td></td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Nota</p>
	  				</td>
	  				<td></td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Palabras Clave</p>
	  				</td>
	  				<td>
	  					<input type="text">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>URL de Youtube</p>
	  				</td>
	  				<td>
	  					<input type="text">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Leyenda del video</p>
	  				</td>
	  				<td>
	  					<input type="text">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Foto</p>
	  				</td>
	  				<td>
	  					<input type="file">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Audios</p>
	  				</td>
	  				<td>
	  					<input type="file">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Infografia</p>
	  				</td>
	  				<td>
	  					<input type="file">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Top</p>
	  				</td>
	  				<td>
	  					<select class="span2">
				    		<option>Si</option> 
				    		<option>No</option>
				    	</select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Recomendar</p>
	  				</td>
	  				<td>
	  					<select class="span2">
				    		<option>Si</option> 
				    		<option>No</option>
				    	</select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Prioridad de la Recomendación</p>
	  				</td>
	  				<td>
	  					<select class="span2">
				    		<option>Si</option> 
				    		<option>No</option>
				    	</select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Publicar</p>
	  				</td>
	  				<td>
	  					<select class="span2">
				    		<option>Si</option> 
				    		<option>No</option>
				    	</select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Micrositio</p>
	  				</td>
	  				<td>
	  					<select class="span3">
				    		<option>Si</option> 
				    		<option>No</option>
				    	</select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td >
	  					<legend>Opcional</legend>
	  				</td>
	  				<td>
	  					<!--<legend>&nbsp;</legend>-->	
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>Fecha de publicacion:</td>
	  				<td><input type="text"></td>
	  			</tr>
	  		</tbody>
	  	</table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form programas-->
<div id="form_programa" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Programa</h3>
	  </div>
	  <div class="modal-body">
	  	<table class="table">
	  		<tbody>
	  			<tr>
	  				<td>
	  					<p>Nombre</p>
	  				</td>
	  				<td>
	  					<input type="text">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Tipo de audio</p>	
	  				</td>
	  				<td>
	  					<section class="span2">
	  						<option>Otro</option>
	  					</section>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Descripción</p>	
	  				</td>
	  				
	  				<td>
						editor de textos
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Foto</p>	
	  				</td>
	  				<td>
	  					<input type="file">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Banner</p>	
	  				</td>
	  				<td>
	  					<input type="file">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Horario</p>
	  				</td>
	  				<td>
	  						<table class="table">
				  				<tbody>
				  					<tr>
						  				<td>
						  					<input type="checkbox"><p>Lunes</p>
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="button" class="span1">
						  				</td>
						  			</tr>
						  			<tr>
						  				<td>
						  					<input type="checkbox"><p>Martes</p>
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  			</tr>
						  			<tr>
						  				<td>
						  					<input type="checkbox"><p>Miercoles</p>
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  			</tr>
						  			<tr>
						  				<td>
						  					<input type="checkbox"><p>Jueves</p>
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  			</tr>
						  			<tr>
						  				<td>
						  					<input type="checkbox"><p>Viernes</p>
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  			</tr>
						  			<tr>
						  				<td>
						  					<input type="checkbox"><p>Sabado</p>
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  			</tr>
						  			<tr>
						  				<td>
						  					<input type="checkbox"><p>Domingo</p>
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  				<td>
						  					<input type="text" class="span2">
						  				</td>
						  			</tr>
						  			tabla de locutores
				  				</tbody>
				  			</table>
	  				</td>
	  			</tr>
				<tr>
	  				<td>
	  					<p>Twitter</p>
	  				</td>
	  				<td>
	  					<input class="span5">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Facebook</p>
	  				</td>
	  				<td>
	  					<input class="span5">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>E-Mail</p>
	  				</td>
	  				<td>
	  					<input class="span5">
	  				</td>
	  			</tr>
	  			<tr>
	  				<td>
	  					<p>Telefono</p>
	  				</td>
	  				<td>
	  					<input class="span5">
	  				</td>
	  			</tr>
			</tbody>
		</table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form locutores-->
<div id="form_locutor" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Locutor</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td><p>Nombre</p></td>
	    			<td><input type="text"></td>
	    		</tr>
	    		<tr>
	    			<td><p>Descripcion:</p></td>
	    			<td></td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Foto:</p>
	    			</td>
	    			<td>	 
	    			</td>	    			
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Twitter:</p>
	    			</td>
	    			<td>
	    				<input type="text">	 
	    			</td>	    			
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Facebook:</p>
	    			</td>
	    			<td>
	    				<input type="text">	 
	    			</td>	    			
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>E-Mail:</p>
	    			</td>
	    			<td>
	    				<input type="text">	 
	    			</td>	    			
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form entrevistas-->
<div id="form_entrevista" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Entrevista</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Elige Programa:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Titulo:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Descripcion:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Palabras clave:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Foto:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Audios:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Recomendar:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Publicar:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Micrositio:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form podscast-->
<div id="form_podcast" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Podcast</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Elige Programa:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Titulo:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Descripcion:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Palabras clave:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Foto:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Audios:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Publicar:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form resumenes-->
<div id="form_resumen" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Resúmenes Informativos</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Elige Programa:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Titulo:</p>
	    			</td>
	    			<td>
	    				<select>
	    					<input type="text">
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Descripción:</p>
	    			</td>
	    			<td>
	    				
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Palabras Clave:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Audios:</p>
	    			</td>
	    			<td>
	    		
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Publicar:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form blogs-->
<div id="form_blog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar un Blog</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Nombre:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Descripción del blog</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Foto del blog:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Titular</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form posts-->
<div id="form_post" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar un Post</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Blog:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Titulo:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Foto del post:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Cuerpo del post:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Fecha de publicación</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form galeria-->
<div id="form_galeria" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar una galeria</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Titulo:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Fotos:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Descripcion</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Micrositio:</p>
	    			</td>
	    			<td>
	    				<select class="span3">
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form videos-->
<div id="form_video" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar un Video</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Titulo:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>URL del video:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Descripción:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Palabras claves:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Micrositio:</p>
	    			</td>
	    			<td>
	    				<select>
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form usuarios-->
<div id="form_usuario" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar un Usuario</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Nombre:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Login:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>e-mail:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Contraseña:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Repetir contraseña:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Rol:</p>
	    			</td>
	    			<td>
	    				<select>
	    					<option></option>
	    				</select>
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form roles-->
<div id="form_rol" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar un Rol</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Nombre:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>
<!--form micrositios-->
<div id="form_microsite" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Agregar Micrositio</h3>
	  </div>
	  <div class="modal-body">
	    <table class="table">
	    	<tbody>
	    		<tr>
	    			<td>
	    				<p>Titulo:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Alias del micrositio:</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Descripción:</p>
	    			</td>
	    			<td>
	    				<textarea id="editor1" name="editor1"></textarea>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Background:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Activo en la página de inicio:</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Noticias</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Noticias</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Noticias</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Noticias</p>
	    			</td>
	    			<td>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Video</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Fecha de inicio</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<p>Fecha de terminación</p>
	    			</td>
	    			<td>
	    				<input type="text">
	    			</td>
	    		</tr>
	    	</tbody>
	    </table>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
</div>