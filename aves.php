<?php 

// Cabecera
require("./templates/header.php"); 

// Conexion BBDD
require("./admin/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM reyes_plumiferos");
$sentenciaSQL->execute();
$reyesAereos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$cazadores = [];
$exoticos = [];
$autoctonos = [];

foreach($reyesAereos as $rey){
    if($rey['tipo'] == 'Depredador Aereo'){
        array_push($cazadores, $rey);
    };

    if($rey['tipo'] == 'Exotica'){
        array_push($exoticos, $rey);
    };

    if($rey['tipo'] == 'Autoctonas y Delicadas'){
        array_push($autoctonos, $rey);
    };
}

?>

<?php  ?>

<section id="container_exoticas" class="parallax primer_container_aves">
    <div class="content">
        <h2>
            Colores del firmamento
        </h2>

        <div class="container_aves_cars">
            <?php foreach($exoticos as $rey) { ?>
                <div class="card_reyes">
                    <img class="img_rey" src="<?php echo $rey['url_foto_rey']?>" width="200"  alt="Imagen">
                    <p>
                        Especie: <?php echo $rey['name'] ?>
                    </p>
                    <p>
                        Nombre: <?php echo $rey['nick_name'] ?>
                    </p>

                    <details>
                        <summary>Más Información:</summary>
                        <div>
                           <p>
                               <?php echo $rey['infologia'] ?>
                            </p>
                        </div>
                    </details>

                </div>
            <?php } ?>
        </div>

    </div>
</section>

<section id="container_autoctonos" class="parallax">
    <div class="content">

        <h2>
            Voces del cielo
        </h2>

        <div class="container_aves_cars">
            <?php foreach($autoctonos as $rey) { ?>
                <div class="card_reyes">
                    <img class="img_rey" src="<?php echo $rey['url_foto_rey']?>" width="200"  alt="Imagen">
                    <p>
                        Especie: <?php echo $rey['name'] ?>
                    </p>
                    <p>
                        Nombre: <?php echo $rey['nick_name'] ?>
                    </p>
                    <!-- <p>
                        <?php echo $rey['tipo'] ?>
                    </p> -->
                    <details>
                        <summary>Más Información:</summary>
                        <div>
                           <p>
                               <?php echo $rey['infologia'] ?>
                            </p>
                        </div>
                    </details>

                </div>
            <?php } ?>
        </div>

    </div>
</section>

<section id="container_depredadores" class="parallax">
    <div class="content">

        <h2>
            Depredadores Aereos
        </h2>

        <div class="container_aves_cars">
            <?php foreach($cazadores as $rey) { ?>
                <div class="card_reyes">
                    <img class="img_rey" src="<?php echo $rey['url_foto_rey']?>" width="200"  alt="Imagen">
                    <p>
                        Especie: <?php echo $rey['name'] ?>
                    </p>
                    <p>
                        Nombre: <?php echo $rey['nick_name'] ?>
                    </p>
                    <!-- <p>
                        <?php echo $rey['tipo'] ?>
                    </p> -->
                    <details>
                        <summary>Más Información:</summary>
                        <div>
                           <p>
                               <?php echo $rey['infologia'] ?>
                            </p>
                        </div>
                    </details>

                </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php require("./templates/footer.php") ?>