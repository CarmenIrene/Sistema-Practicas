<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>
    <style>
		.container{
			width: 50%;
		}
		.texto-modal{
			color: red;
			text-align: center;
			font-size: 15px;
		}
		.encabezado{
			text-align: center;
		}
		.menu{
			width: 78%;
			height: 39px;
			background-image: url('/fondoMenu.png');
			background-position: center;
			position: relative;
			left: 122px;
		}
		.menuitem{
			list-style: none;
			padding-top: 5px;
		}
		.menuitem a{
			color: white;
			font-size: 13px;
		}
		.menuitem a:hover{
			color: white;
			text-decoration: underline;
		}
		.submenu
		{
			overflow:hidden;
			position:absolute;
			top: 37px;
			height: 210px;
			width: 190px;
			background-image: url('/fondoMenu.png');
			visibility:visible;
		}
		.submenu li{
			list-style: none;
			padding-left:5px;
			padding-right:5px;
			padding-top:17px;
			padding-bottom:5px;
		}
		.submenu li a{
			display:block;
			color:white;
			font-family:Tahoma;
			font-size:12px;
			text-align:left;
			text-decoration:none;
		}
		.menu .submenu:hover{
			visibility: visible;
		}

		.secretaria{
			background-color: rgb(0,0,102);
			position: relative;
			top: 276px;
			width: 78%;
			text-align: center;
			color: white;
			left: 122px;
		}
		.piePagina{
			text-align: center;
			font-size: 11px;
			position: relative;
			top: 280px;
		}
	</style>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
    	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
	        <div class="modal-dialog">
    	    	<div class="modal-content">
    	    	   <div class="modal-header">
                      <h3>Requisitos para Realizar Prácticas Profesionales</h3>
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    	       </div>
    		       <div class="modal-body">
	        	      <p class="texto-modal">"Se te recuerda que debes consultar la vigencia de tu Seguro Facultativo. Esto se realiza en el Área de Afiliación de las oficinas del IMSS ubicadas en Carranza 1080, a un costado del Hospital de la Beneficencia Española o bien, directamente en la clínica que se te asignó al obtenerlo por primera vez, al inicio de tu carrera. En caso de que no tenga vigencia, debes llenar la Solicitud de Incorporación de Estudiantes al Seguro Facultativo, que se te proporciona en la Secretaría General de la Facultad de Ingeniería." <br><br>

"Es indispensable que cuando subas tu reporte final de΅Prácticas Profesioneles subas una copia de tu recibo de pago del año escolar o tus Prácticas Profesionales no se acreditaran".</p>
		    	   </div>
        		   <div class="modal-footer">
			          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
	        	   </div>
      			</div>
   			</div>
		</div><!--DIV MODAL-->

		<div class="encabezado">
			<img src="/logoUniversidad.jpg" alt="">
		</div><!--DIV ENCABEZADO-->

		<div class="menu">
			<ul>
				<li class="menuitem">
					<a href="#">Practicas Profesionales</a>
					<ul class="submenu">
						<li><a href="/inicioSesionSecretaria">Secretaria Academica</a></li>
						<li><a href="/inicioSesionEncargado">Encargado de Practicas</a></li>
						<li><a href="/inicioSesionAsesor">Asesor de Empresa</a></li>
						<li><a href="/inicioSesionTutor">Tutor Academico</a></li>
						<li><a href="/inicioSesionAlumnos">Alumnos</a></li>
					</ul>
				</li>
			</ul>
		</div><!--DIV MENU-->

	    <div id="mi_carousel" class="carousel slider" data-ride="carousel" data-interval="500" style="position: absolute; left: 400px; top: 200px;">
	        <div class="carousel-inner">
	            <div class="carousel-item active">
	                <img class="w-100" src="/ingenieria.jpg" alt="">
	            </div><!--div carousel-item-->
	        </div><!--div carousel-inner-->
	    </div><!--div carousel-->

		<div class="secretaria">
			<p>SECRETARÍA ACADEMICA</p>
		</div>
		<div class="piePagina">
			<p>Bienvenidos a la página de la Secretaría Académica de la Facultad de Ingeniería. La misión de esta Secretaría es auxiliar al Director en sus funciones; organizar y coordinar <br> las actividades académicas de licenciatura y posgrado, así como supervisar los eventos académicos de la Facultad. 
			</p>
		</div>
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</div>
</body>
</html>