<?php if (isset($habitaciones)) : ?>

<div class="fcontenido">

  <div class="container">

    <h1 class="ftitle my-3"><?= $habitaciones->nombre ?></h1>

    <div class="row">

      <div class="col-lg-6 my-1" id="image">
        <?php if ($habitaciones->image != null) : ?>
          <center><img src="<?= base_url ?>uploads/images/habitaciones/<?= $habitaciones->image ?>"></center>
        <?php else : ?>
          <center><img src="<?= base_url ?>assets/img/dummy.png"></center>
        <?php endif; ?>
      </div>

      <div class="col-lg-6">
        <p align="justify">
          <?= $habitaciones->descripcion ?>
          <!-- <br><br>
          <i class="fa-solid fa-location-dot"></i> <?//= $mot->direccion ?>
          <br>
          <i class="fa-solid fa-phone"></i> <?//= $mot->telefono ?>
          <br>
          <i class="fa-solid fa-envelope"></i> <?//= $mot->email ?>--->
        </p>
      </div>
    </div>
  </div>


<?php else : ?>
  <h1>La habitación no existe</h1>
<?php endif; ?>
</div>