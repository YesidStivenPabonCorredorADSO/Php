<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario</title>
</head>

<body>
  <form action="controlador.php" method="GET">
    <div>
      <label for="">Nombre</label>
      <input type="text" id="nombre" name="nombre" pattern="\w{3,16}">
    </div>
    <br>
    <div>
      <label for="">Apellido</label>
      <input type=" text" id="Apelliod" name="apellido" pattern="">
    </div>
    <br>
    <div>
      <label for="">masculino</label>
      <input type="radio" id="Genero" name="genero" value="masculino">
      <label for="">Femenino</label>
      <input type="radio" id="Genero" name="genero" value="femenino">
      <label for="">Otro</label>
      <input type="radio" id="Genero" name="genero" value="otro">
    </div>
    <br>
    <div>
      <label for="">Edad</label>
      <input type=" number" id="edad" name="edad" pattern="">
    </div>
    <button type="submit">Enviar</button>
  </form>

  <!-- <?php 

  
  // include_once('clases.php');
  // include_once('aprendiz.php');
  // $Yesid= new aprendiz();
  // $Yesid->setNombre=("Yesid Stiven");
  // var_dump($Yesid);
  
  // $persona_Yesid=new  Persona("Yesid","Pabon","Masculino",19);
  // var_dump($persona_Yesid);
  // $persona_Yesid->setNombre("YESID");
  // echo "<br>";
  // $persona_Yesid->setApellido("PABON");
  // $persona_Yesid->setGenero("MASCULINO");
  // $persona_Yesid->setEdad(19);
  // var_dump($persona_Yesid);
  // $persona_Yesid__datos__guardados=new Persona(guardar);
  ?> -->
</body>

</html>