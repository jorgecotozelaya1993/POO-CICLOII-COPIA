<?php
class Conexion{
    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost','root','','db_ejemplo');
    }

    public function getUsuarios(){
        $query = $this->con->query('SELECT * FROM usuarios');
        $retorno = [];

        $i = 0;
        while($fila =  $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }
}
?>