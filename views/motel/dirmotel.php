<h1 class="title">Moteles</h1>

<br>

<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mx-1">
    <?php while ($mote = $moteles->fetch_object()) : ?>
        <div class="col mb-4">

            <div class="card">
                <?php if ($mote->image != null): ?>
                    <center><img src="<?= base_url ?>uploads/images/motel/<?= $mote->image ?>" ></center>
                <?php else: ?>
                    <center><img src="<?= base_url ?>assets/img/dummy.png"></center>
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $mote->nombre ?></h5>
                    <a href="<?= base_url ?>motel/ver&id=<?= $mote->id ?>" class="btn btn-primary btn-ver">Ver</a>
                </div>
            </div>

        </div>
    <?php endwhile; ?>
</div>