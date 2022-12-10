<?php if (isset($_SESSION['error']) && $_SESSION['error'] == 'identificacion fallida !!'): ?>

    <?php echo "<script> swal.fire({
        title: '¡Algo salio mal!',
        text: 'logueo fallido, introduce bien los datos',
        icon: 'error',
        });</script>";
    ?>

<?php endif; ?>

<?php Utils::deleteSession('error'); ?>

<h1>Lo más buscado</h1>

<div class="grid-container">

    <div class="grid-item">
        <a href="#">
            <img src="assets/img/Columpio_Sexual.png" />
            <h2 class="second-txt">Columpio Sexual</h2>
        </a>
    </div>

    <div class="grid-item">
        <a href="#">
            <img src="assets/img/Jacuzzi.jpg" />
            <h2 class="second-txt">Jacuzzi</h2>
        </a>
    </div>

    <div class="grid-item">
        <a href="#">
            <img src="assets/img/Parquadero.jpeg" />
            <h2 class="second-txt">Parqueadero</h2>
        </a>
    </div>

    <div class="grid-item">
        <a href="#">
            <img src="assets/img/pole-fitness.jpg" />
            <h2 class="second-txt">Pole Dance</h2>
        </a>
    </div>
</div>


<h1>Nuevos Moteles</h1>

<div class="mot">
    <?php while ($mote = $moteles->fetch_object()) : ?>
        <div class="mot-item">
            <a href="<?= base_url ?>motel/ver&id=<?= $mote->id ?>">
                <?php if ($mote->image != null): ?>
                    <center><img src="<?= base_url ?>uploads/images/motel/<?= $mote->image ?>" ></center>
                <?php else: ?>
                    <center><img src="<?= base_url ?>assets/img/dummy.png"></center>
                <?php endif; ?>
                <h2 class="first-txt"><?= $mote->nombre ?></h2>                     
            </a>
        </div>
    <?php endwhile; ?>
</div>