

<?php 
  
  if($_POST){
    echo '<h1 style="background:black; color:white; padding:10px; text-align:center;">
             TUS DATOS FUERON ENVIADOS Y  RECIBIDOS A TRAVES DEL METODO POST
          </h1>';
    $nombre_p = $_POST['nombre_p'];
    $apellidos_p = $_POST['apellido_p'];
    echo '<strong>Nombre:</strong> ' . $nombre_p . '<br/> <strong>Apellidos:</strong> ' . $apellidos_p;
    echo '<br/><a href="./index.html">Regresar</a>';
  }

  if($_GET){
    echo '<h1 style="background:black; color:white; padding:10px; text-align:center;">
             TUS DATOS FUERON ENVIADOS Y  RECIBIDOS A TRAVES DEL METODO GET
          </h1>';
    $nombre_g = $_GET['nombre_g'];
    $apellidos_g = $_GET['apellido_g'];
    echo '<strong>Nombre:</strong> ' . $nombre_g . '<br/> <strong>Apellidos:</strong> ' . $apellidos_g;
    echo '<br/><a href="./index.html">Regresar</a>';
  }

?>