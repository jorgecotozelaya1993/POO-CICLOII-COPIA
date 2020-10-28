<?php
class mascota{
        public $name= 'Firulais';
}

class Persona{

    public $edad;
    public $nombre_persona;

    public function correr(){
        echo ' Estoy Corriendo ';
    }
    public function caminando(){
        echo ' Estoy Caminando ';
    }
    public function saludando( Persona $otra_persona)
    {
        echo 'Hola, '.$otra_persona->nombre_persona;
    }

    //CREAR UN CONSTRUCTOR
    public function __construct($nombre_persona)
    {
        $this->nombre_persona = $nombre_persona;
    }

    public function adoptar(mascota $instanciar_mascota){
            echo "Hey, adopte a ".$instanciar_mascota->name;
    }
}

//HAGO LA INSTANCIA DE LA CLASE
$persona1 = new Persona('Luis');
$persona2 = new Persona('Carlos');
//echo $persona1->nombre_persona;


//LO QUE QUEREMOS ES QUE SEA UNA INSTANCIA DE OTRO METODO PARA ELLO UTILIZAMOS EL TYPE
$persona1->saludando($persona2);
echo '</br></br>';
//VAMOS A REALIZAR OTRA INSTANCIA DE LA CLASE MASCOTA PERO REALIZAREMOS UN METODO(FUNCION)
$mascota = new mascota();
$persona1->adoptar($mascota);

//AUNQUE TODO ESTO PARECE ABSTRACTO ESTA PERSONA NO SABE QUE TIPO DE DATOS ES DE IMPLEMENTAR
?>