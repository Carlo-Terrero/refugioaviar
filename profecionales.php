<?php 
// Cabecera
require("./templates/header.php");

// Conexion BBDD
require("./admin/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM profesional_cuidador");
$sentenciaSQL->execute();
$profecionales = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="parallax primer_container_pro">
    <div class="content">
        <h1>
            Profecionales 
        </h1>

        <div class="content_carts">
            <?php foreach($profecionales as $pro) { ?>
                <div>
                    <img class="img-thumbnail rounded" src="<?php echo $pro['url_foto_profecional']?>" width="200"  alt="Imagen">
                    <p>
                        <?php echo $pro['name'] ?>
                    </p>
                    <p>
                        <?php echo $pro['mail'] ?>
                    </p>
                    <p>
                        <?php echo $pro['especialidad'] ?>
                    </p>

                </div>
            <?php }?>
        </div>
    </div>

    
</section>

<?php require("./templates/footer.php") ?>