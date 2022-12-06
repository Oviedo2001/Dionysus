<?php if (isset($edit) && isset($rpta) && is_object($rpta)) : ?>
    <h1>Editar Representante <?= $rpta->nombre_rpta ?></h1>
    <?php $url_action = base_url . "representante/save&id=" . $rpta->id; ?>

<?php else: ?>
    <h1>Agregar Representante</h1>
    <?php $url_action = base_url . "representante/save"; ?>
<?php endif; ?>

<form action="<?= $url_action ?>" method="POST">
    <div class="container bg-light">
        <div class="mb-3 col-xs-3">
            <label for="doc_rpta" class="form-label">Documento: </label></td>
            <input type="text" class="form-control" name="doc_rpta" value="<?= isset($rpta) && is_object($rpta) ? $rpta->documento_rpta : ''; ?>" required />
        </div>
        
        <div class="mb-3 col-xs-3">
            <label for="nombre_rpta" class="form-label">Nombre: </label></td>
            <input type="text" class="form-control" name="nombre_rpta" value="<?= isset($rpta) && is_object($rpta) ? $rpta->nombre_rpta : ''; ?>" required />
        </div>
        
        <div class="mb-3 col-xs-3">
            <label for="apellido_rpta" class="form-label">Apellido: </label></td>
            <input type="text" class="form-control" name="apellido_rpta" value="<?= isset($rpta) && is_object($rpta) ? $rpta->apellido_rpta : ''; ?>" required />
        </div>

        <div class="mb-3 col-xs-3">
            <label for="email_rpta" class="form-label">Email: </label></td>
            <input type="email" class="form-control" name="email_rpta" value="<?= isset($rpta) && is_object($rpta) ? $rpta->email_rpta : ''; ?>" required>
        </div>
        
        <div class="mb-3 col-xs-3">
            <label for="telefono_rpta" class="form-label">Telefono: </label></td>
            <input type="tel" class="form-control" name="telefono_rpta" value="<?= isset($rpta) && is_object($rpta) ? $rpta->telefono_rpta : ''; ?>" required />
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
    
