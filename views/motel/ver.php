<?php if (isset($mot)) : ?>

	<div class="fcontenido">

		<div class="container">

			<h1 class="ftitle my-3"><?= $mot->nombre ?></h1>

			<div class="row">

				<div class="col-lg-6 my-1" id="image">
					<?php if ($mot->image != null) : ?>
						<center><img src="<?= base_url ?>uploads/images/motel/<?= $mot->image ?>"></center>
					<?php else : ?>
						<center><img src="<?= base_url ?>assets/img/dummy.png"></center>
					<?php endif; ?>
				</div>

				<div class="col-lg-6">
					<p align="justify">
						<?= $mot->descripcion ?>
						<br><br>
						<i class="fa-solid fa-location-dot"></i> <?= $mot->direccion ?>
						<br>
						<i class="fa-solid fa-phone"></i> <?= $mot->telefono ?>
						<br>
						<i class="fa-solid fa-envelope"></i> <?= $mot->email ?>
					</p>
				</div>

				<div class="col-lg-6">
					<h1 class="ftitle my-3">Habitaciones</h1>

					<?php if ($habitaciones->num_rows > 0) : ?>
						<div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3" id="habimage">
							<?php while ($habi = $habitaciones->fetch_object()) : ?>
								<div class="col mb-2">
									<div class="card">
										<?php if ($habi->image != null) : ?>
											<center><img src="<?= base_url ?>uploads/images/habitaciones/<?= $habi->image ?>"></center>
										<?php else : ?>
											<center><img src="<?= base_url ?>assets/img/dummy.png"></center>
										<?php endif; ?>
										<div class="card-body">
											<h5 class="card-title"><?= $habi->nombre ?></h5>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php else : ?>
						<p class="lead">No se encontraron habitaciones registradas.</p>
					<?php endif; ?>
				</div>

				<div class="col-lg-6">
					<h1 class="ftitle my-3">Ubicación</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.8793047231234!2d-75.2307707!3d4.433571199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38c4967358a283%3A0x3ef3015c57fbae1b!2sCra.%201a%20%2325-30%2C%20Ibagu%C3%A9%2C%20Tolima!5e0!3m2!1ses-419!2sco!4v1670309007728!5m2!1ses-419!2sco" height="500" style="border-radius: 20px;margin: 0 auto; width: -webkit-fill-available;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

				<div class="col-lg-12">
					<h1 class="ftitle my-3">Comentarios</h1>
					<p class="lead">No se encontraron comentarios.</p>

				</div>
			</div>
		</div>


	<?php else : ?>
		<h1>El motel no existe</h1>
	<?php endif; ?>
	</div>