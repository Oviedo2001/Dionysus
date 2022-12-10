<div class="register">
    <h1>Registro</h1>

    <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>

        <?php
        echo "<script> swal.fire({
        title: '¡Registro Completado!',
        icon: 'success',
        });</script>";
        ?>
    <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
        <?php echo "<script> swal.fire({
        title: '¡Algo salio mal!',
        text: 'Registro fallido, introduce bien los datos',
        icon: 'error',
        });</script>";
        ?>
    <?php endif; ?>

    <?php Utils::deleteSession('register'); ?>

    <form action="<?= base_url ?>usuario/save" method="POST">

        <label for="nombre">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="nombre" placeholder="Nombre" required>

        <label for="apellidos">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="apellidos" placeholder="Apellido" required>

        <label for="email">
            <i class="fas fa-envelope"></i>
        </label>
        <input type="email" name="email" placeholder="Email" required>

        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Contraseña" required>

        <p style="margin: 10px 0 0 0;">¿Ya tienes una cuenta?<a style="margin-left: 8px;" href="<?= base_url ?>usuario/ingresar">Ingresa</a> </p>

        <input type="submit" value="Registrarse">

    </form>

</div>