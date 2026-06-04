<?php 
require("./templates/header.php"); 
require("./admin/config/bd.php");

session_start();
if($_POST){
echo $_POST['usuario'];
echo $_POST['usuario'];
    if($_POST['usuario']=="Carlos Jose" && $_POST['contasenia']=="carlos1234"){
        
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "Develoteca";

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
                <input type="text" class="" name="usuario" placeholder="Nombre de usuario">
            </div>

            <div class="container_label">
                <label >Contraseña:</label>
                <input type="password" class="" name="contasenia" placeholder="Contraseña">
            </div>

            <button type="submit" class="btn_submit">
                Entrar
            </button>
        </form>
    </div>
</section>

<?php require("./templates/footer.php") ?>