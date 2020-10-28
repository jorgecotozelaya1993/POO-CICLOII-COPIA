<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    class Persona{
    private $nombre;

    public function inicializar($nom){
    $this->nombre=$nom;
    }

    public function imprimir(){
        echo $this->nombre;
        echo '<br>';
    }

    }


    $persona1 = new Persona();
    $persona1->inicializar('Juan');
    $persona1->imprimir();

    $persona2 = new Persona();
    $persona2->inicializar('Carlos');
    $persona2->imprimir();

    ?>
</body>
</html>