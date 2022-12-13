<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>

  <?php
  echo "<script> swal.fire({
        title: '¡Registro Completado!',
        icon: 'success',
        });</script>";
  ?>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
  <?php echo "<script> swal.fire({
        title: '¡Algo salio mal!',
        text: 'Introduce bien los datos o estos datos ya se encuentran registrados',
        icon: 'error',
        });</script>";
  ?>
<?php endif; ?>

<?php Utils::deleteSession('register'); ?>

<section class="py-1">
  <div class="container px-4">
    <!-- Contact form-->
    <div class="py-2 px-2 px-md-2 mb-2">
      <h1 class="fw-bolder">Registro</h1>
    </div>
    
    <div class="row gx-5 justify-content-center">

      <div class="col-lg-8 col-xl-6">

        <form action="<?= base_url ?>usuario/save" method="post" class="row g-1">
          <!-- name and username input-->
          <div class="col-6">
            <div class="input-group mb-3">
              <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
              </span>
              <input type="text" name="nombre" placeholder="Nombres" class="form-control" pattern="^[a-zA-Z]+( [a-zA-Z]+)*$" required>
            </div>
          </div>

          <div class="col-6">
            <input type="text" name="apellidos" placeholder="Apellidos" class="form-control" pattern="^[a-zA-Z]+( [a-zA-Z]+)*$" required>
          </div>

          <!-- Email input-->
          <div class="input-group mb-3">
            <span class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
              </svg>
            </span>
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
          </div>

          <!-- Password input-->
          <div class="input-group mb-3">
            <span class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
              </svg>
            </span>
            <input type="password" name="password" class="form-control" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero, una mayuscula y minuscula, y por lo menos 8 o más caracteres" required>
          </div>

          <!-- ingresar link-->
          <div class="mb-3">
            <p style="margin: 10px 0 0 0;">¿Ya tienes una cuenta?<a style="margin-left: 8px;" href="<?= base_url ?>usuario/ingresar">Ingresa</a> </p>
          </div>

          <!-- Submit Button-->
          <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Registrarme</button></div>

        </form>

      </div>
    </div>
  </div>
</section>