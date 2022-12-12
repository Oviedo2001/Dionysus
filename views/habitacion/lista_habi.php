<h1>Habitaciones</h1>

<a href="<?= base_url ?>habitacion/crear" class="botton botton-small">
    Registrar Habitación
</a>

<?php if (isset($_SESSION['habitacion']) && $_SESSION['habitacion'] == 'complete'): ?>

    <?php
    echo "<script> swal.fire({
    title: '¡Registro Completado!',
    text: 'Habitacion agregada correctamente',
    icon: 'success',
    });</script>";
    ?>
<?php elseif (isset($_SESSION['habitacion']) && $_SESSION['habitacion'] != 'complete'): ?>
    <?php echo "<script> swal.fire({
    title: '¡Algo salio mal!',
    text: 'Registro fallido, introduce bien los datos o estos datos ya se encuentran registrados',
    icon: 'error',
    });</script>";
    ?>
<?php endif; ?>

<?php Utils::deleteSession('habitacion'); ?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>

    <?php
    echo "<script> swal.fire({
        title: 'Habitación eliminada!',
        icon: 'success',
        });</script>";
    ?>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
    <?php echo "<script> swal.fire({
        title: '¡Algo salio mal!',
        text: 'Habitación no eliminada',
        icon: 'error',
        });</script>";
    ?>
<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>

<div class="container-fluid">

    <div class="table-responsive">
        <table class="table table-striped">
            <tr class="table-dark">
                <th>Motel</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Tipo de Habitación</th>
                <th>Acciones</th>
            </tr>
            <?php while ($habi = $habitaciones->fetch_object()): ?>
                <tr>
                    <td><?= $habi->motel_nit; ?></td>
                    <td><?= $habi->nombre; ?></td>
                    <td><?= $habi->precio; ?></td>
                    <td><?= $habi->descripcion; ?></td>
                    <td><?= $habi->tipo_habitacion; ?></td>

                    <td>
                        <a href="<?= base_url ?>habitacion/editar&id=<?= $habi->id ?>" class="btn btn-success">Editar</a>
                        <a href="<?= base_url ?>habitacion/eliminar&id=<?= $habi->id ?>" onclick="return confirm('¿Esta seguro de eliminar la habitación selecionada?');" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        </table>
    </div>
</div>