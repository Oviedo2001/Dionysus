<h1>Moteles</h1>

<a href="<?= base_url ?>motel/crear" class="botton botton-small">
    Agregar Motel
</a>

<?php if (isset($_SESSION['motel']) && $_SESSION['motel'] == 'complete'): ?>

    <?php
    echo "<script> swal.fire({
        title: '¡Registro Completado!',
        text: 'Motel agregado correctamente',
        icon: 'success',
        });</script>";
    ?>
<?php elseif (isset($_SESSION['motel']) && $_SESSION['motel'] != 'complete'): ?>
    <?php echo "<script> swal.fire({
        title: '¡Algo salio mal!',
        text: 'Registro fallido, introduce bien los datos o estos datos ya se encuentran registrados',
        icon: 'error',
        });</script>";
    ?>
<?php endif; ?>

<?php Utils::deleteSession('motel'); ?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>

    <?php
    echo "<script> swal.fire({
        title: '¡Motel eliminado!',
        icon: 'success',
        });</script>";
    ?>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
    <?php echo "<script> swal.fire({
        title: '¡Algo salio mal!',
        text: 'Motel no eliminado',
        icon: 'error',
        });</script>";
    ?>
<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>

<div class="table-responsive">
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Nit</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php while ($mot = $moteles->fetch_object()): ?>
            <tr>
                <td><?= $mot->nit; ?></td>
                <td><?= $mot->nombre; ?></td>
                <td><?= $mot->direccion; ?></td>
                <td><?= $mot->telefono; ?></td>
                <td><?= $mot->email; ?></td>

                <td>
                    <a href="<?= base_url ?>motel/editar&id=<?= $mot->id ?>"  class="btn btn-success">Editar</a>
                    <a href="<?= base_url ?>motel/eliminar&id=<?= $mot->id ?>" onclick="return confirm('¿Esta seguro de eliminar el motel selecionada?');" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>
</div>