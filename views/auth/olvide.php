

        <form class="form-register aviso" method="post" action="/olvide">
        <?php include_once __DIR__. '/../templates/nombre-pagina.php';?>
        <?php include_once __DIR__. '/../templates/alertas.php';?>
         <?php if($mostrar):?>
        <p>olvidaste tu contraseña</p>
            <!-- email -->
            <input class="controls" type="email" name="email" id="correo" placeholder="Ingrese su Correo">
            <input class="botons  miBoton" type="submit" value="Enviar Instruciones">
            <div class="acciones">
            <a href="/">iniciar sesion</a>
            <a href="/crear">Aun no tienes cuenta? crear una</a>
        </div>
        <?php endif; ?>
        </form>
    


