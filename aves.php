<?php 

// Cabecera
require("./templates/header.php"); 

// Conexion BBDD
require("./admin/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM reyes_plumiferos");
$sentenciaSQL->execute();
$reyesAereos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php  ?>



<section class="parallax primer_container_aves">
    <div class="content">
        <h1>
            REYES 
        </h1>
        <?php foreach($reyesAereos as $rey) { ?>
        <div>
            <img class="img-thumbnail rounded" src="<?php echo $rey['url_foto_rey']?>" width="200"  alt="Imagen">
            <p>
                <?php echo $rey['name'] ?>
            </p>
            <p>
                <?php echo $rey['nick_name'] ?>
            </p>
            <p>
                <?php echo $rey['tipo'] ?>
            </p>
            <p>
                <?php echo $rey['infologia'] ?>
            </p>

        </div>
        <?php } ?>
    </div>
</section>

<?php require("./templates/footer.php") ?>