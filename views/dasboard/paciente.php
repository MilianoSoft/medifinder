<?php include_once __DIR__ . '/headerDasboard.php'; ?>
<!-- aqui ira el contenido -->
<div class="contenedor">
  <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

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
    <div class="campo-boton" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <div class="imagen-boton"><img class="img1" src="/img/icons/agregar-usuario.png" alt="imagen-buscar"></div>
      <p>nuevo paciente</p>
    </div>
  </div> <!-- fin de botones -->

  <div class="shadow-none p-3 mb-5 bg-light rounded height">
    <table class=" table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">No Exp</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Cedula</th>
          <th scope="col">Sexo</th>
          <th scope="col">Fecha Naci</th>
          <th scope="col">acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>0001</td>
          <td>onesimo</td>
          <td>coronado</td>
          <td>402-1175-126-4</td>
          <td>masculino</td>
          <td>04/09/1998</td>
          <td class="tabla-acciones">
                <div class="tabla-boton" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img class="img1" src="/img/icons/usuario-editar.png" alt="imagen-buscar">editar</div>
                <div class="tabla-boton"><img class="img1" src="/img/icons/borrar-usuario.png" alt="imagen-buscar">eliminar</div>
          </td>
        </tr>
      </tbody>
    </table>
  </div> <!-- tabla muestra los pacientes registrados -->

  <div class=" rigth campo-botones">
    <div class="campo-boton">
      <div class="imagen-boton"><img class="img1" src="/img/icons/carpeta.png" alt="imagen-buscar"></div>
      <p> historia clinica</p>
    </div>
    <div class="campo-boton">
      <div class="imagen-boton"><img class="img1" src="/img/icons/consentimiento.png" alt="imagen-buscar"></div>
      <p> consentimiento</p>
    </div>
  </div> <!-- fin de botones -->
</div>
<!-- fin del contenido -->

<?php include_once __DIR__. '/../templates/modal.php';?>

<?php include_once __DIR__ . '/footerDasboard.php'; ?>