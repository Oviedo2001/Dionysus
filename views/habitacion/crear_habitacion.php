<?php if (isset($edit) && isset($habi) && is_object($habi)) : ?>
    <h1>Editar Habitacion <?= $habi->nombre ?></h1>
    <?php $url_action = base_url . "habitacion/save&id=" . $habi->id; ?>

<?php else: ?>
    <h1>Agregar Habitacion</h1>
    <?php $url_action = base_url . "habitacion/save"; ?>
<?php endif; ?>

<form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
    <div class="container bg-light">
        <div class="mb-3 col-xs-3">
            <label for="motel" class="form-label">Motel: </label>
            <?php $moteles = Utils::showMoteles(); ?>
            <select name="motel" class="form-select">
                <?php while ($mtl = $moteles->fetch_object()): ?>
                    <option value="<?= $mtl->id ?>"<?= isset($habi) && is_object($habi) && $mtl->id == $habi->motel_nit ? 'selected' : ''; ?>>
                        <?= $mtl->nombre ?> 
                    </option>
                <?php endwhile; ?>
            </select>
        </div>    


        <div class="mb-3 col-xs-3">
            <td><label for="nombre" class="form-label">Nombre: </label></td>
            <td><input type="text" class="form-control" name="nombre" value="<?= isset($habi) && is_object($habi) ? $habi->nombre : ''; ?>" required /></td>
        </div>

        <div class="mb-3 col-xs-3">
            <label for="precio" class="form-label">Precio: </label>
            <input type="text" class="form-control" name="precio"  value="<?= isset($habi) && is_object($habi) ? $habi->precio : ''; ?>" required />
        </div>

        <div class="mb-3 col-xs-3">
            <label for="descripcion" class="form-label">Descripción: </label>
            <textarea class="form-control" name="descripcion" rows="10"><?= isset($habi) && is_object($habi) ? $habi->descripcion : ''; ?></textarea>
        </div>


        <div class="mb-3 col-xs-3">

            <label for="imagen" class="form-label">Imagen: </label>      
            <?php if (isset($habi) && is_object($habi) && !empty($habi->image)): ?>

                <img src="<?= base_url ?>uploads/images/habitaciones/<?= $habi->image ?>" class="thumb"/>

            <?php endif; ?>

            <input class="form-control my-2" type="file" name="imagen"/>

        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>

