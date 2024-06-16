<?php include_once __DIR__.'/headerDasboard.php';?>
<!-- aqui ira el contenido -->
 <div class="contenedor">
    <?php include_once __DIR__.'/../templates/alertas.php';?>

    <form class="campo-filtro">
      
        <div class="filtro">
          <label>no expediente</label>
          <input type="text" placeholder="numero de paciente">
        </div>

        <div class="filtro">
          <label>nombre</label>
          <input type="text" placeholder="numero de paciente">
        </div>

        <div class="filtro">
          <label>apellido</label>
          <input type="text" placeholder="numero de paciente">
        </div>

        <div class="filtro">
          <label>cedula</label>
          <input type="text" placeholder="numero de paciente">
        </div>
       </form>

    <div class="campo-botones">
        <div class="campo-boton">
        <div class="imagen-boton"><img class="img1" src="/img/icons/buscar.png" alt="imagen-buscar"></div>
          <p>buscar paciente</p>
        </div>

        <div class="campo-boton" >
        <div class="imagen-boton" ><img class="img1" src="/img/icons/usuario-editar.png" alt="imagen-buscar"></div>
          <p>Editar paciente</p>
        </div>
        <div class="campo-boton">
        <div class="imagen-boton"><img class="img1" src="/img/icons/agregar-usuario.png" alt="imagen-buscar"></div>
          <p>nuevo paciente</p>
        </div>
    </div> <!-- fin de botones -->
 </div>
<!-- fin del contenido -->
<?php include_once __DIR__.'/footerDasboard.php';?>