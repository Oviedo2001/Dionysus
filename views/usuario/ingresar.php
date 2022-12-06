<div class="login">
    <h1>Ingresar</h1>

    <form action="<?= base_url ?>usuario/login" method="post">
        <?php if (!isset($_SESSION['identity'])): ?>

            <label for="email">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="email" placeholder="Email" id="email" required>
            <label for="password">
                <i class="fa-solid fa-lock"></i>
                
               
            </label>
            <input type="password" name="password" placeholder="Contraseña" id="password" required>
            
            <a href="<?= base_url ?>usuario/registro">Crear Cuenta</a>
    
            <input type="submit" value="Ingresar">
            
           
        </form>
    </div>
<?php else: ?>
    <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellido ?></h3>
<?php endif; ?>


