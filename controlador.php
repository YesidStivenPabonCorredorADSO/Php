<?php 
if ($_SERVER["REQUEST_METHOD"]=== "GET") {
  $nombre=$_GET['nombre'];
  $apellido=$_GET['apellido'];
  $genero=$_GET['genero'];
  $edad=$_GET['edad'];
  require_once('aprendiz.php');
  if(strlen($nombre)>0 && strlen($apellido)>0 && strlen($genero)>0 && strlen($edad)>0)
  $aprendiz= new aprendiz();
  $aprendiz->setNombre($nombre);
  $aprendiz->setApellido($apellido);
  $aprendiz->setGenero($genero);
  $aprendiz->setEdad($edad);
  $aprendiz->guardar();
}
if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
      $genero=$_GET['genero'];
        $edad=$_GET['edad'];
        require_once('aprendiz.php');
        $aprendiz= new aprendiz();
        $aprendiz->setNombre($nombre);
         $aprendiz->setApellido($apellido);
          $aprendiz->setGenero($genero);
           $aprendiz->setEdad($edad);
           $aprendiz->setguardar();
}



?>