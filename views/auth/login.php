
<form class="form-register" method="post" action="/login">
<?php include_once __DIR__. '/../templates/nombre-pagina.php';?> 
<?php include_once __DIR__. '/../templates/alertas.php';?> 
    <h4>Iniciar Sesion</h4>
    <input class="controls" type="email" name="email" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="password" placeholder="Ingrese su Contraseña">
    <input class="botons  miBoton" type="submit" value="iniciar sesion">
    <div class="mensaje">
         <a href="/crear">crear cuenta</a>
        <a href="/olvide">Recuperar contraseña</a>
     </div>
  </form>
