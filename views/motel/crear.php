<?php if (isset($edit) && isset($mot) && is_object($mot)) : ?>
    <h1>Editar motel <?= $mot->nombre ?></h1>
    <?php $url_action = base_url . "motel/save&id=" . $mot->id; ?>

<?php else : ?>
    <h1>Agregar Motel</h1>
    <?php $url_action = base_url . "motel/save"; ?>
<?php endif; ?>

<form class="needs-validation" action="<?= $url_action ?>" method="POST" enctype="multipart/form-data" novalidate>
    <div class="container bg-light">
        <div class="mb-3 col-xs-3">
            <label for="rpta" class="form-label">Representante Legal: </label>
            <?php $rptas = Utils::showRepresentantes(); ?>
            <select name="rpta" class="form-select">
                <?php while ($rpt = $rptas->fetch_object()) : ?>
                    <option value="<?= $rpt->id ?>" <?= isset($mot) && is_object($mot) && $rpt->id == $mot->documento_rpta ? 'selected' : ''; ?>>
                        <?= $rpt->nombre_rpta ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="mb-3 col-xs-3">
            <label for="nit" class="form-label">Nit: </label>
            <input type="text" class="form-control" name="nit" value="<?= isset($mot) && is_object($mot) ? $mot->nit : ''; ?>" required />
        </div>

        <div class="mb-3 col-xs-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" value="<?= isset($mot) && is_object($mot) ? $mot->nombre : ''; ?>" />
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="mb-3 col-xs-3">
            <label for="direccion" class="form-label">Direccion: </label>
            <input type="text" class="form-control" name="direccion" value="<?= isset($mot) && is_object($mot) ? $mot->direccion : ''; ?>" required />
        </div>

        <div class="mb-3 col-xs-3">
            <label for="descripcion" class="form-label">Descripción: </label>
            <textarea class="form-control" name="descripcion" rows="5"><?= isset($mot) && is_object($mot) ? $mot->descripcion : ''; ?></textarea>

        </div>

        <div class="mb-3 col-xs-3">
            <label for="telefono" class="form-label">Telefono: </label>
            <input type="tel" class="form-control" name="telefono" value="<?= isset($mot) && is_object($mot) ? $mot->telefono : ''; ?>" required />

        </div>

        <div class="mb-3 col-xs-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= isset($mot) && is_object($mot) ? $mot->email : ''; ?>" required />
        </div>

        <div class="mb-3 col-xs-3">

            <label for="imagen" class="form-label">Imagen: </label>
            <?php if (isset($mot) && is_object($mot) && !empty($mot->image)) : ?>

                <img src="<?= base_url ?>uploads/images/motel/<?= $mot->image ?>" class="thumb" />

            <?php endif; ?>

            <input class="form-control my-2" type="file" name="imagen" />

        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </Script>
</form>