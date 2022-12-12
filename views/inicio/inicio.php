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
</div>

<section class="py-sm-2">
  <div class="container-fluid my-2">
    <aside class="bg-primary bg-gradient rounded-3 p-4 mt-2">
      <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
        <div class="mb-4 mb-xl-0">
          <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
          <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
        </div>
        <div class="ms-xl-4">
          <div class="input-group mb-2">
            <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
            <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
          </div>
          <div class="small text-white-50">We care about privacy, and will never share your data.</div>
        </div>
      </div>
    </aside>
  </div>
</section>