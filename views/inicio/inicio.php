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
    <div class="mot-item">
        <a href="#">
            <img src="assets/img/fetiche/feti.jpg" />
            <h2 class="first-txt">Fetiche</h2>                     
        </a>
    </div>

    <div class="mot-item">
        <a href="#">
            <img src="assets/img/venus/ve.png" />
            <h2 class="first-txt">Venus</h2>  
        </a>
    </div>

    <div class="mot-item">
        <a href="#">
            <img src="assets/img/fontana/fonta.jpg" />
            <h2 class="first-txt">Fontana</h2> 
        </a>
    </div>
</div>