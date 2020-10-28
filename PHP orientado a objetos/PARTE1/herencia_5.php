<?php
// LA IDEA ES HACER MANEJAR LA HERENCIA EN ESTE EJEMPLO HACIENDO UNA CLASE PADRE:
class Animal{
    //DEFINO LA VARIABLE PARA OBTENER EL TIPO DE SONIDO DE CADA ANIMAL PERO SIEMPRE RELACIONADO A LA CLASE PADRE
    public $tipo_de_sonido = "hago un Sonido";

    public function correr(){
        echo 'Yo Corro ';
    }

    public function caminar(){
        echo "Yo Camino ";
    }

    public function __construct()
    {
        echo ' Ha nacido un Animal ';
    }

    //PARA OBTENER EL SONIDO Y MOSTRARLO
    public function obtener_sonido(){
        echo " yo ".$this->tipo_de_sonido;
    } 

}

class perro extends Animal{
    /*public function correr(){
        echo 'Yo Corro ';
    }
    public function caminar(){
        echo "Yo Camino ";
    }
    */

    public $tipo_de_sonido =" Ladro ";
    public function __construct()
    {
        parent::__construct();
        echo ' Ha nacido un Perro ';
    }  
}

class gato extends Animal{
    /*public function correr(){
        echo 'Yo Corro ';
    }
    public function caminar(){
        echo "Yo Camino ";
    }*/
    public $tipo_de_sonido =" Maullo ";
    public function __construct()
    {
            parent::__construct();
        echo ' Ha nacido un Gato ';
    }
}

$perro = new perro();
$perro->correr();
$perro->obtener_sonido();
echo "<br/>";
$gato = new gato();
$gato->correr();
$gato->obtener_sonido();
echo "<br/><br/>";
//OTRA COSA DIGAMOS QUE EN EL CONSTRUCTOR YO LO COMENTAREO Y SE DE QUE TENGO UN CONSTRUCTOR EN LA CLASE PADRE TENGO 
//Q HEREDAR EL CONTRUCTOR DE LA CLASE PADRE A LOS HIJO COMO LO GAGO CON LA PALABRA RESERVADA parent:: __construct

//POR ULTIMO HAGO UNA COMPROBACION DE DONDE OBTENGO LA HERENCIA
if ($perro instanceof perro){
    echo "Es un Perro";
}

if ($perro instanceof Animal){
    echo "Es un Animal";
}