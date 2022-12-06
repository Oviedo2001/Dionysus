<h1>Representantes legales</h1>

<a href="<?= base_url ?>representante/crear" class="botton botton-small">
    Registrar representante
</a>

<?php if (isset($_SESSION['representante']) && $_SESSION['representante'] == 'complete'): ?>

    <?php
    echo "<script> swal.fire({
    title: '¡Registro Completado!',
    icon: 'success',
    });</script>";
    ?>
<?php elseif (isset($_SESSION['representante']) && $_SESSION['representante'] != 'complete'): ?>
    <?php echo "<script> swal.fire({
    title: '¡Algo salio mal!',
    text: 'Registro fallido, introduce bien los datos',
    icon: 'error',
    });</script>";
    ?>
<?php endif; ?>

<?php Utils::deleteSession('representante'); ?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>

    <?php
    echo "<script> swal.fire({
    title: 'Representante eliminado!',
    icon: 'success',
    });</script>";
    ?>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
    <?php echo "<script> swal.fire({
    title: '¡Algo salio mal!',
    text: 'Representante no eliminada',
    icon: 'error',
    });</script>";
    ?>
<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>

<div class="container-fluid">

    <div class="table-responsive">
        <table class="table table-striped">
            <tr class="table-dark">
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
            <?php while ($rpt = $rptas->fetch_object()): ?>
                <tr>
                    <td><?= $rpt->documento_rpta; ?></td>
                    <td><?= $rpt->nombre_rpta; ?></td>
                    <td><?= $rpt->apellido_rpta; ?></td>
                    <td><?= $rpt->email_rpta; ?></td>
                    <td><?= $rpt->telefono_rpta; ?></td>

                    <td>
                        <a href="<?= base_url ?>representante/editar&id=<?= $rpt->id ?>" class="btn btn-success">Editar</a>
                        <a href="<?= base_url ?>representante/eliminar&id=<?= $rpt->id ?>" onclick="return confirm('¿Esta seguro de eliminar al representante selecionado?\nEsto tambien eliminara los moteles registrados a su nombre.');" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        </table>
    </div>
</div>