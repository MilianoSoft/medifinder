
   
    <form class="form-register aviso"action="/restablecer" method="post">
        <?php include_once __DIR__ . '/../templates/nombre-pagina.php'; ?>
        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
         <p>restablecer tu contraseña ahora</p>
        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
        <input class="controls" type="password" name="password" placeholder="Ingrese su nueva contraseña">
        <input type="submit" class="botons mibotons" value="cambiar contraseña">
        <div class="acciones">
            <a href="/login">iniciar sesion</a>
            <a href="/crear">Aun no tienes cuenta? crear una</a>
        </div>
    </form>