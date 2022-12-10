<div class="login">
  <h1>Ingresar</h1>

  <form action="<?= base_url ?>usuario/login" method="post">
    <?php if (!isset($_SESSION['identity'])): ?>
      <label for="email">
        <i class="fas fa-envelope"></i>
      </label>
      <input type="text" name="email" placeholder="Email" id="email" required>
            
      <label for="password">
        <i class="fa-solid fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Contraseña" id="password" required>

      <a href="<?= base_url ?>usuario/resetpass">¿Olvidó la contraseña?</a>

      <p style="margin: 10px 0 0 0;">¿No tienes una cuenta? <a style="margin-left: 8px;" href="<?= base_url ?>usuario/registro">Crear una cuenta</a></p>

      <input type="submit" value="Ingresar">

  </form>
</div>
<?php else: ?>
    <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellido ?></h3>
<?php endif; ?>