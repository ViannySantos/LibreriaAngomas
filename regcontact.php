

    <!-- Page Content -->
    <section class="page-heading header-text">
      <section class="container">
        <section class="row">
          <section class="col-md-12">
            <h1>Contacto</h1>
            <span>Sientete libre de conctactarnos!!</span>
          </section>
        </section>
      </section>
    </section>

    <section class="contact-information">
      <section class="container">
        <section class="row">
          <section class="col-md-4">
            <section class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Telefono</h4>
              <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
              <a href="#">+1 333 4040 5566</a>
            </section>
          </section>
          <section class="col-md-4">
            <section class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Correo</h4>
              <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
              <a href="#">Tenisspicy@company.com</a>
            </section>
          </section>
          <section class="col-md-4">
            <section class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>ubicacion</h4>
              <p>Av independencia km 8 1/2  <br> Sto Dgo</p>
              <a href="#">Vista en Google Maps</a>
            </section>
          </section>
        </section>
      </section>
    </section>
    <?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener los datos del formulario
    $nombre= $_GET["Nombre"];
    $correo = $_GET["correo"];
    $Motivo = $_GET["Motivo"];
    $Mensaje = $_GET["Mensaje"];

    // Validar los datos (puedes agregar tus propias validaciones aquí)

    // Procesar los datos (puedes guardarlos en una base de datos, enviar un correo electrónico, etc.)
    // Aquí solo mostraremos los datos enviados
    echo "Nombre: " . $nombre. "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Motivo: " . $Motivo . "<br>";
    echo "Mensaje: " . $Mensaje . "<br>";
}
?>

<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Reemplaza con tu nombre de usuario de la base de datos
$password = ""; // Reemplaza con tu contraseña de la base de datos
$dbname = "tenisspicy_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener los datos del formulario
    $Nombre= $_GET["Nombre"];
    $Correo = $_GET["correo"];
    $Motivo = $_GET["Motivo"];
    $Mensaje = $_GET["Mensaje"];

    // Validar los datos (puedes agregar tus propias validaciones aquí)

    // Preparar la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO conctacto (Nombre, Correo, 	Motivo, Mensaje) VALUES ('$Nombre', '$correo', '$Motivo', '$Mensaje')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han registrado correctamente en la base de datos.";
    } else {
        echo "Error al registrar los datos en la base de datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>


    <section class="callback-form contact-us">
      <section class="container">
        <section class="row">
          <section class="col-md-12">
            <section class="section-heading">
              <h2>Mandanos un <em>mensaje</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </section>
          </section>
          <section class="col-md-12">
            <section class="contact-form">
              
            </section>
          </section>
        </section>
      </section>
    </section>

    <section id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892.529417628327!2d-69.96375274423575!3d18.435637595642284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea5618edfff5a4f%3A0x762494687f0f138a!2sRespaldo%20San%20Juan%2C%20Santo%20Domingo!5e0!3m2!1ses!2sdo!4v1684540452714!5m2!1ses!2sdo" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    