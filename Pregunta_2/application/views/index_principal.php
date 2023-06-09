<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Paguina web</title>

	<link rel="stylesheet" href="<?= base_url()?>css/style.php">
</head>
<body>
	<header>
		<section id="logoUmsa">
			<a href="index.php"><img src="img/umsa.logo.png"></a>
		</section>
		<section id="tituloPrincipal">
			<h3>Universidad Mayor de San Andres</h3>
			<h5>Facultad de Ciencias Puras y Naturales</h5>
		</section>
		<section id="logofcpn">
			<a href="index.php"><img src="img/fcpn.png" ></a>
		</section>
	</header>
	<hr>
	<section id="medio">
			<p id="bienvenida">Bienvenidos a la facultad de Ciencias Puras y Naturales</p>
			<section id="historia">
				<h3>La Facultad de Ciencias Puras Naturales tiene las siguientes modalidades de ingreso <br>
				de acuerdo a las normativas universitarias: Prueba de suficiencia académica (PSA), <br>
				Curso preuniversitario (CPU), Modalidad especial: olimpiadas (local, departamental,<br>
				nacional e internacional), mejores estudiantes de municipios, personas con capacidades<br>
				especiales. En sus 6 carreras: Biología, Estadística, Física, Informática, Matemática y Cs. Químicas.<h3>

			</section>
			
			<table border="1px">
				<thead>
					<tr>
						<th>CARRERA</th>
						<th>UBICACION</th>
						<th>ACCESO</th>
					</tr>
				</thead>
				<tr>
					<td>INFORMATICA</td>
					<td>Monoblock Central 2do Patio</td>
					<td><a href="http://localhost/inf/Pregunta_2/inf"><img src="img/inf.png" ></a></td>
				</tr>
				<tr>
					<td>QUIMICA</td>
					<td>Campus UMSA Cota Cota</td>
					<td><a href="http://localhost/inf/Pregunta_2/qmc"><img src="img/qmc.png" ></a></td>
				</tr>
				<tr>
					<td>FISICA</td>
					<td>Campus UMSA Cota Cota</td>
					<td><a href="http://localhost/inf/Pregunta_2/fis"><img src="img/fisica.jpg" ></a></td>
				</tr>
			</table>
    </section>

</body>
<hr>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-item footer-about">
        <h2>Nosotros</h2>
        <p>La plataforma presente es perteneciente a la UMSA la cual esta hecha para una mejor comunicacion entre docentes y estudiantes asi
           para lograr ver sus calificaciones y conocer acerca de nuestra Facultad.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      
      <div class="footer-item footer-contact">
        <h2>Contactenos</h2>
        <p><i class="fas fa-map-marker-alt"></i> Monoblock Central (Edificio Antiguo) </p>
        
      </div>
      
    </div>
  </div>
</footer>
</html>