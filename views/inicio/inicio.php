<?php if (isset($_SESSION['error']) && $_SESSION['error'] == 'identificacion fallida !!') : ?>

  <?php echo "<script> swal.fire({
        title: '¡Algo salio mal!',
        text: 'Introduce bien los datos',
        icon: 'error',
        });</script>";
  ?>

<?php endif; ?>

<?php Utils::deleteSession('error'); ?>

<h1>Nuevos Moteles</h1>

<div class="mot">
  <?php while ($mote = $moteles->fetch_object()) : ?>
    <div class="mot-item">
      <a href="<?= base_url ?>motel/ver&id=<?= $mote->id ?>">
        <?php if ($mote->image != null) : ?>
          <center><img src="<?= base_url ?>uploads/images/motel/<?= $mote->image ?>"></center>
        <?php else : ?>
          <center><img src="<?= base_url ?>assets/img/dummy.png"></center>
        <?php endif; ?>
        <h2 class="first-txt"><?= $mote->nombre ?></h2>
      </a>
    </div>
  <?php endwhile; ?>
</div>

<h1>Nuevas Habitaciones</h1>

<div class="mot">
  <?php while ($mote = $habitaciones->fetch_object()) : ?>
    <div class="mot-item">
      <a href="<?= base_url ?>habitacion/ver&id=<?= $mote->id ?>">
        <?php if ($mote->image != null) : ?>
          <center><img src="<?= base_url ?>uploads/images/habitaciones/<?= $mote->image ?>"></center>
        <?php else : ?>
          <center><img src="<?= base_url ?>assets/img/dummy.png"></center>
        <?php endif; ?>
        <h2 class="first-txt"><?= $mote->nombre ?></h2>
      </a>
    </div>
  <?php endwhile; ?>
</div>

<section class="py-sm-2">
  <div class="container-fluid my-2">
    <aside class="bg-primary bg-gradient rounded-3 p-4 mt-2">
      <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
        <div class="mb-4 mb-xl-0">
          <div class="fs-3 fw-bold text-white">Nuevos Moteles, entregados a usted.</div>
          <div class="text-white-50">Suscríbete a nuestro boletín de noticias para las últimas actualizaciones.</div>
        </div>
        <div class="ms-xl-4">
          <div class="input-group mb-2">
            <input class="form-control" type="text" placeholder="Correo electrónico" aria-label="Email address..." aria-describedby="button-newsletter" />
            <button class="btn btn-outline-light" type="button">Suscribirme</button>
          </div>
          <div class="small text-white-50">Nos preocupamos por la privacidad y nunca compartiremos sus datos.</div>
        </div>
      </div>
    </aside>
  </div>
</section>