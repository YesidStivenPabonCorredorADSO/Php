<?php 
     class Persona{
            protected $nombre;
            protected $apellido;
            protected $genero;
            protected $edad;
            public function __constructor( $nombre,$apellido,$genero,$edad   )
            {

            }
            public function getNombre()
            {
              // return $this->nombre;
            }
            public function getApellido()
            {
            //  return $this->apellido;  
            }
              public function getGenero()
            {
              //  return $this->genero;
            }
            public function getEdad()
            {
            //  return  $this->edad;
            }
            public function setNombre($nombre)
            {
              $this->nombre= strtolower($nombre) ;
              return $this;
            }
            public function setApellido($apellido)
            {
              $this->apellido=strtolower($apellido) ;
              return $this;
            }
            public function setGenero($genero)
            {
              $this->genero=strtolower($genero) ;
              return $this;
            }
                  public function setEdad($edad)
            {
              $this->edad= strtolower($edad) ;
              return $this;
            }
            public function guardar()
            {
             echo "Se almacenaron los datos"."<br>".$this->nombre."".$this->apellido."".$this->genero."".$this->edad;
            }
          }
          // Metodo


?>