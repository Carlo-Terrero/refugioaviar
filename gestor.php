<?php require('./templates/header.php');

// Conexion BBDD
require("./admin/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM profesional_cuidador");
$sentenciaSQL->execute();
$profecionales = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT * FROM reyes_plumiferos");
$sentenciaSQL->execute();
$reyesAereos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$accion = (isset($_POST['action'])) ? $_POST['action'] : "";
?>

<section id="gestor" class="parallax">
    <div class="content">
        <h1>
            Gestior
        </h1>

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
                    <div class="btn-group mt-3" role="group" aria-label="">
                        <button type="submit" name="action" value="Agregar" class="btn btn-success">
                            Agregar
                        </button>
                        
                        <button type="submit" name="action"  value="Modificar" class="btn btn-warning">
                            Modificar
                        </button>
                            
                        <button type="submit" name="action"  value="Cancelar" class="btn btn-info">
                            Cancelar
                        </button>
                    </div>

                </div>
            <?php }?>
        </div>
    </div>
</section>

<section id="container_exoticas" class="parallax container_section_aves">
    <div class="content">
        <h2>
            Reyes Aereos
        </h2>

        <div class="container_aves_cars">
            <?php foreach($reyesAereos as $rey) { ?>
                <div class="card_reyes">
                    <img class="img_rey" src="<?php echo $rey['url_foto_rey']?>" width="200"  alt="Imagen">
                    <p>
                        Especie: <?php echo $rey['name'] ?>
                    </p>
                    <p>
                        Nombre: <?php echo $rey['nick_name'] ?>
                    </p>

                    <div class="btn-group mt-3" role="group" aria-label="">
                        <button type="submit" name="action" value="Agregar" class="btn btn-success">
                            Agregar
                        </button>
                        
                        <button type="submit" name="action"  value="Modificar" class="btn btn-warning">
                            Modificar
                        </button>
                            
                        <button type="submit" name="action"  value="Cancelar" class="btn btn-info">
                            Cancelar
                        </button>
                    </div>

                </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php require('./templates/footer.php') ?>