<section class="py-1">
  <div class="container px-4">
    <!-- Contact form-->
    <div class="py-2 px-2 px-md-2 mb-2">
      <h1 class="fw-bolder">Recupera tu contraseña</h1>
    </div>
    <div class="row gx-5 justify-content-center">

      <div class="col-lg-8 col-xl-6">

        <form action="<?= base_url ?>usuario/login" method="post">
          <!-- Email address input-->

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
              </svg>
            </span>
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" aria-label="Input group example">
          </div>

          <!-- Submit Button-->
          <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Enviar</button></div>

        </form>

      </div>
    </div>
  </div>
  </div>
</section>