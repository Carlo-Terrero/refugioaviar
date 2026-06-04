<?php 
// Cabecera
require("./templates/header.php");

// Conexion BBDD
require("./admin/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM profesional_cuidador");
$sentenciaSQL->execute();
$profecionales = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="parallax container_pros">
    <div class="content">
        <h2>
            Equipo 
        </h2>

        <div class="content_carts_pro">
            <?php foreach($profecionales as $pro) { ?>
                <div class="card_pros">
                    <img class="img_pro" src="<?php echo $pro['url_foto_profecional']?>" width="200"  alt="Imagen">
                    <p>
                        Nombre: <?php echo $pro['name'] ?>
                    </p>
                    <p>
                        Mail: <?php echo $pro['mail'] ?>
                    </p>
                    <p>
                        Encargado: <?php echo $pro['especialidad'] ?>
                    </p>

                </div>
            <?php }?>
        </div>
    </div>
</section>

<?php require("./templates/footer.php") ?>