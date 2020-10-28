<?php
require_once("../modelos/Conexion.clase.php");
require_once("../modelos/Rol.clase.php");


class RolesDAO{

    public static function listarDatos(){
        $con = new Conexion();
        $cont = $con->ejecutarConsulta("SELECT * FROM rol");
        $con->cerrarConexion();
        return $cont;
    }

    public static function ingresarDato ($rol){
        $con = new Conexion();
        $cont = $con->ejecutarActualizacion("INSERT INTO rol(nombre) VALUES ('".$rol->nombre."') ");
        $con->cerrarConexion();
    }

    //FUNCION PARA SAR MI ID
    public static function buscarPorId($id){
        $con = new Conexion();
        $cont = $con->ejecutarConsulta("SELECT * FROM rol WHERE Id =  '$id' ");
        $con->cerrarConexion();
        return $cont['0'];
    }

    //FUNCION PARA ACTUALIZAR MIS DATOS DE MI BASE DE DATOS
    public static function editarDato ($rol){
        $con = new Conexion();
        $con->ejecutarActualizacion("UPDATE rol SET nombre = '". $rol->nombre."' WHERE Id =". $rol->id);
        $con->cerrarConexion(); 
    }


    //FUNCION PARA ELIMINAR MIS DATOS DE MI BASE DE DATO POR MEDIO DE MI ID
        public static function eliminarPorId ($id){
            $con = new Conexion();
            $con->ejecutarActualizacion("DELETE FROM rol WHERE Id = $id");
            $con->cerrarConexion(); 
        }
}

?>