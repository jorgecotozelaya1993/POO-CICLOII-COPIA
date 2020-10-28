<?php
session_start();

if(isset($_SESSION['usuario'])){
        header('Location: home.php');
    }

include 'DataBase/Db.php';
include 'UserModel.php';
include 'UserController.php';
?>


<?php include 'partials/header.php'?>


<div class="container">
        <div class="row mt-3 justify-content-md-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Nombre: </label>
                        <input class="form-control" name="username" placeholder="Nombre"  type="text">
                    </div>
                    <div class="form-group">
                        <label for="password">Clave: </label>
                        <input class="form-control" name="password" placeholder="Clave"  type="password">
                    </div>
                    <button type="submit" class="btn btn-sm btn-block btn-primary" name="submit">Iniciar Sesion</button>
                </form>
            </div>
        </div>

</div>


<?php include 'partials/footer.php'?>
    

