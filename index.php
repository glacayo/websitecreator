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
				    <option value="stability">Stability</option>
				  </select>
				  </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		        	<!-- OPCIONES QUE LE CORRESPONDEN HA NELSON -->
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
				    <!-- END OPCIONES QUE LE CORRESPONDEN HA NELSON -->
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="nameCompany" id="nameCompany" type="text" class="validate">
		          <label for="nameCompany">Nombre de la empresa</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="address" id="address" type="text" class="validate">
		          <label for="address">Direccion de la empresa</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="email" id="email" type="text" class="validate">
		          <label for="email">Correo de la Empresa</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="email2" id="email2" type="text" class="validate">
		          <label for="email2">Correo de la Empresa 2</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="phone" id="phone" type="text" class="validate">
		          <label for="phone">Telefono</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="phone2" id="phone2" type="text" class="validate">
		          <label for="phone2">Telefono 2</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="domain" id="domain" type="text" class="validate">
		          <label for="domain">Dominio</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="phraseServices" id="phraseServices" type="text" class="validate">
		          <label for="phraseServices">Services Phrase</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="payment" id="payment" type="text" class="validate">
		          <label for="payment">Payment Method</label>
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
		          <input name="estimates" id="estimates" type="text" class="validate">
		          <label for="estimates">Estimate</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="coverArea" id="coverArea" type="text" class="validate">
		          <label for="coverArea">Cover</label>
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
		          <input name="whyChooseUse" id="whyChooseUse" type="text" class="validate">
		          <label for="whyChooseUse">Why Choose Us</label>
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
				  <select class="browser-default numeroServicio" name="cantidadServicios">
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
		        <div class="input-field col s4">
		          <input name="color1" id="color1" type="text" class="validate">
		          <label for="color1">Color 1</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="color2" id="color2" type="text" class="validate">
		          <label for="color2">Color 2</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="color3" id="color3" type="text" class="validate">
		          <label for="color3">Color 3</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input name="facebook" id="facebook" type="text" class="validate">
		          <label for="facebook">Facebook</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="twitter" id="twitter" type="text" class="validate">
		          <label for="twitter">Twitter</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="gplus" id="gplus" type="text" class="validate">
		          <label for="gplus">Google Plus</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input name="bbb" id="bbb" type="text" class="validate">
		          <label for="bbb">BBB</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="homeAdvisor" id="homeAdvisor" type="text" class="validate">
		          <label for="homeAdvisor">Home Advisor</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="manta" id="manta" type="text" class="validate">
		          <label for="manta">Manta</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input name="yelp" id="yelp" type="text" class="validate">
		          <label for="yelp">Yelp</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="buildZooom" id="buildZooom" type="text" class="validate">
		          <label for="buildZooom">Build Zoom</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="houzz" id="houzz" type="text" class="validate">
		          <label for="houzz">Houzz</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s4">
		          <input name="yellowPages" id="yellowPages" type="text" class="validate">
		          <label for="yellowPages">Yellow Pages</label>
		        </div>
		        <div class="input-field col s4">
		          <input name="youtube" id="youtube" type="text" class="validate">
		          <label for="youtube">Youtube Chanel</label>
		        </div>
		        <div class="input-field col s4">
		        <textarea id="googleMap" name="googleMap" class="materialize-textarea"></textarea>
		          <label for="googleMap">Google Map</label>
		        </div>
		      </div>
		      <!-- OPCIONES QUE CORRESPONDEN A YASSER -->
			  <div class="row">
			      <div class="file-field input-field col s4">
				      <div class="btn">
				        <span>Upload Logo</span>
				        <input type="file">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				      </div>
			  	 </div>
			      <div class="file-field input-field col s4">
				      <div class="btn">
				        <span>Upload Logo footer</span>
				        <input type="file">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				      </div>
			  	 </div>
			      <div class="file-field input-field col s4">
				      <div class="btn">
				        <span>Favicon</span>
				        <input type="file">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				      </div>
			  	 </div>
			  </div>
			  <!-- END OPCIONES QUE CORRESPONDEN A YASSER -->
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