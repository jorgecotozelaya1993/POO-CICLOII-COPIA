<?php
    class Mi_perfil{
        //VARIABLE EMAIL PRIVADA
        private $email = "J@gmail.com";
        public $nombre;
        public $segundo_nombre;

        public function obtener_email(){
            return $this->email;
        }

        public function asignar_email($email){
            //Reglas para la asignacion de nuestro correo
            $this->email = $email;
        }
    }

    $instanciar_Mi_perfil = new Mi_perfil;
    //$instanciar_Mi_perfil->email("J@gmail.com");
    echo $instanciar_Mi_perfil->obtener_email();
?>