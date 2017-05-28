<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Website Creator</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 class="center">Crear pagina! <small> <br> Creador de paginas[ Beta ]</h2>
			</div>
		    <form action="websiteCreator.php" method="POST" class="col s12">
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="fileName" id="fileName" type="text" class="validate">
		          <label for="fileName">Nombre del Webiste (El nombre de la carpeta que pegaran en site)</label>
		        </div>
		        <div class="input-field col s6">
				  <select class="browser-default" name="template">
				    <option value="" disabled selected>Elige un tema</option>
				    <option value="1">Stability</option>
				  </select>
				  </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		        	<h6>Imagenes que contiene la pagina?</h6>
				    <p>
				      <input type="checkbox" name="landscaping" id="landscaping" />
				      <label for="landscaping">Landscaping</label>
				    </p>
				    <p>
				      <input type="checkbox" name="painting" id="painting" />
				      <label for="painting">Painting</label>
				    </p>
				    <p>
				      <input type="checkbox" name="roofing" id="roofing" />
				      <label for="roofing">Roofing</label>
				    </p>
		        </div>
		        <div class="input-field col s6">
		        	<h6>Tipo de imagen principal</h6>
				    <p>
				      <input name="radioGroup" type="radio" id="radioLandscaping" />
				      <label for="radioLandscaping">Landscaping</label>
				    </p>
				    <p>
				      <input name="radioGroup" type="radio" id="radioPainting" />
				      <label for="radioPainting">Painiting</label>
				    </p>
				    <p>
				      <input name="radioGroup" type="radio" id="radioRoofing" />
				      <label for="radioRoofing">Roofing</label>
				    </p>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="companyName" id="companyName" type="text" class="validate">
		          <label for="companyName">Nombre de la empresa</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="direccionEmpresa" id="direccionEmpresa" type="text" class="validate">
		          <label for="direccionEmpresa">Direccion de la empresa</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="companyEmail" id="companyEmail" type="text" class="validate">
		          <label for="companyEmail">Correo de la Empresa</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="companyEmail2" id="companyEmail2" type="text" class="validate">
		          <label for="companyEmail2">Correo de la Empresa 2</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="companyPhone" id="companyPhone" type="text" class="validate">
		          <label for="companyPhone">Telefono</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="companyPhone2" id="companyPhone2" type="text" class="validate">
		          <label for="companyPhone2">Telefono 2</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="domain" id="domain" type="text" class="validate">
		          <label for="domain">Dominio</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="servicesPhrease" id="servicesPhrease" type="text" class="validate">
		          <label for="servicesPhrease">Services Phrase</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="paymentMethod" id="paymentMethod" type="text" class="validate">
		          <label for="paymentMethod">Payment Method</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="experience" id="experience" type="text" class="validate">
		          <label for="experience">Experience</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="schedule" id="schedule" type="text" class="validate">
		          <label for="schedule">Schedule</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="bilingual" id="bilingual" type="text" class="validate">
		          <label for="bilingual">Bilingual</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="estimate" id="estimate" type="text" class="validate">
		          <label for="estimate">Estimate</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="cover" id="cover" type="text" class="validate">
		          <label for="cover">Cover</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input name="phrase1" id="phrase1" type="text" class="validate">
		          <label for="phrase1">Phrase 1</label>
		        </div>
		        <div class="input-field col s12">
		          <input name="phrase2" id="phrase2" type="text" class="validate">
		          <label for="phrase2">Phrase 2</label>
		        </div>
		        <div class="input-field col s12">
		          <input name="phrase3" id="phrase3" type="text" class="validate">
		          <label for="phrase3">Phrase 3</label>
		        </div>
		        <div class="input-field col s12">
		          <input name="phrase4" id="phrase4" type="text" class="validate">
		          <label for="phrase4">Phrase 4</label>
		        </div>
		        <div class="input-field col s12">
		          <input name="phrase5" id="phrase5" type="text" class="validate">
		          <label for="phrase5">Phrase 5</label>
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col s4">
		          <input name="mission" id="mission" type="text" class="validate">
		          <label for="mission">Mission</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="vision" id="vision" type="text" class="validate">
		          <label for="vision">Vision</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="whychooseus" id="whychooseus" type="text" class="validate">
		          <label for="whychooseus">Why Choose Us</label>
		        </div>
		      </div>
		      <div class="row">
		          <div class="input-field col s12">
		            <textarea id="home" name="home" class="materialize-textarea"></textarea>
		            <label for="home">Home</label>
		          </div>
		      </div>
		      <div class="row">
		          <div class="input-field col s12">
		            <textarea id="about" name="about" class="materialize-textarea"></textarea>
		            <label for="about">about</label>
		          </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
				  <select class="browser-default numeroServicio">
				    <option value="" disabled selected>Cuantos servicios hay?</option>
				    <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5</option>
				    <option value="6">6</option>
				    <option value="7">7</option>
				    <option value="8">8</option>
				  </select>
				  </div>
			  </div>
		      <div class="row">
				  <div class="input-field col s4" id="mostrarNombreServicios">
				  </div>
				  <div class="input-field col s8" id="mostrarTextoServicios">
				  </div>
		      </div>
			  <div class="row">
			      <div class="file-field input-field">
				      <div class="btn">
				        <span>Upload Logo</span>
				        <input type="file">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				      </div>
			  </div>
			  <div class="row">
				<div class="input-field col s12">
					<input type="submit" value="Crear Pagina" class="waves-effect waves-light btn">
				</div>
			  </div>

		    </form>
		</div>
	</div>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function($) {
	$( ".numeroServicio" ).change(function() {
	  	var str = "";
	  	str = $( ".numeroServicio option:selected" ).text();
	  	for (var i = 1; i <= str ; i++) {
	  		$( "#mostrarNombreServicios" ).append( '<div class="input-field col s12"><input name="nameServices-'+i+'" id="nameServices-'+i+'" type="text" class="validate"><label for="nameServices-'+i+'">Nombre del Sevicio '+i+'</label></div>' );

	  		$( "#mostrarTextoServicios" ).append( '<div class="input-field col s12"><input name="services-'+i+'" id="services-'+i+'" type="text" class="validate"><label for="services-'+i+'">Texto del Servicio '+i+'</label></div>' );
	  	};
	});
});

</script>
         

</body>
</html>