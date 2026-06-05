<?php 
require("./templates/header.php"); 
require("./admin/config/bd.php");

session_start();

// $mailUser = $_POST['mail'];
// $passUser = $_POST['contasenia'];
// $sentenciaSQL = $conexion->prepare("SELECT * FROM profesional_cuidador WHERE mail = $mailUser and password_pro = $passUser");
// $sentenciaSQL->execute();
// $profecional = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



if($_POST){

    $mailUser = (isset($_POST['mail'])) ? $_POST['mail'] : "";
    $passUser = (isset($_POST['contasenia'])) ? $_POST['contasenia']: "";

    $sentenciaSQL = $conexion->prepare("SELECT * FROM profesional_cuidador WHERE mail = :mail AND password_pro = :pass");
    $sentenciaSQL->bindParam(':mail', $mailUser);
    $sentenciaSQL->bindParam(':pass', $passUser);
    $sentenciaSQL->execute();
    $profecional = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

    if($profecional){
        
        // print_r($profecional);
        $_SESSION['usuario'] = $profecional;
        print_r($_SESSION['usuario']->name);
        // $_SESSION['nombreUsuario'] = "Develoteca";

        header('Location:gestor.php');
    }else{
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }

}

?>

<section class="parallax login">
    <div class="content">
        <h2>Acceso a gestiones</h2>

        <?php if(isset($mensaje)) { ?>
            <div class="aler alert-danger p-3 mb-3" role="alert">
                <?php echo $mensaje; ?>
            </div>
        <?php } ?>

        <form method="POST">
            <div class="container_label">
                <label >Usuario</label>
                <input type="text" class="" name="mail" placeholder="ejemplo@extencion.com" value="carlosjose@gmail.com">
            </div>

            <div class="container_label">
                <label >Contraseña:</label>
                <input type="password" class="" name="contasenia" placeholder="Contraseña" value="carlos1234">
            </div>

            <button type="submit" class="btn_submit">
                Entrar
            </button>
        </form>
    </div>
</section>

<?php require("./templates/footer.php") ?>