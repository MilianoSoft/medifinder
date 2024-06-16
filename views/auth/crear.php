<form class="form-register" action="/crear" method="post">
<?php include_once __DIR__. '/../templates/nombre-pagina.php';?> 
<?php include_once __DIR__. '/../templates/alertas.php';?> 

    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre" value="<?php echo $usuario->nombre;?>">
    <input class="controls" type="text" name="apellido" id="apellidos" placeholder="Ingrese su Apellido" value="<?php echo $usuario->apellido;?>">
    <input class="controls" type="tel" name="telefono" id="phone" placeholder="Su telefono" value="<?php echo $usuario->telefono;?>">
    <input class="controls" type="email" name="email" id="correo" placeholder="Ingrese su Correo" value="<?php echo $usuario->email;?>">
    <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
    <div class="tipo">
        <p>Eres un</p>
        <label for="paciente"> <input  type="radio" name="tipo" value="2"> paciente</label>
        <label for="medico"> <input  type="radio" name="tipo" value="1"> medico</label>
    </div>
    <input class="botons  miBoton" type="submit" value="Registrarme">
  </form>
 