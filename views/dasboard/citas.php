<?php include_once __DIR__ . '/headerDasboard.php'; ?>
<?php if ($tipo == "2") : ?>

    <div class="container">
        <div class="container-fluid">

            <div class="row ">
                <a class="col-sm bg-danger text-white m-2" href="/citas?estado=canceladas">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <div class="row m-auto" style="max-width: 300px;">
                                <div class="col-md-4">
                                    <img src="/img/icons/rechazar1.png" alt="rechazar" style="width: 50; height:50">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title text-dark fs-2">CITAS CANCELADAS</h5>
                                    <p class="card-title text-white"> Observa las citas canceladas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="col-sm bg-warning text-white m-2" href="/citas?estado=pendiente">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="row m-auto" style="max-width: 300px;">
                                <div class="col-md-4">
                                    <img src="/img/icons/trabajo-en-progreso.png" alt="progreso" style="width: 50; height:50">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title text-dark fs-2">CITAS EN ESPERA</h4>
                                    <p class="card-text text-white"> Observa tus proximas citas </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="col-sm bg-info text-white m-2"  href="/citas?estado=confirmadas">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="row m-auto" style="max-width: 300px;">
                                <div class="col-md-4">
                                    <img src="/img/icons/aprobado.png" alt="aprobada-imagen" style="width: 50; height:50">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title fs-2 text-dark">CITAS ASISTIDAS</h4>
                                    <p class="card-text text-white"> observa todas las citas asistidas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="card bg-transparent">
                <div class="card-body">
                    <div>
                        <form action="#">
                            <div>
                                <div class="d-flex text-center">
                                    <input type="text" class="form-control me-3" style="padding:.8rem;max-width: 600px;">
                                    <button class="btn btn-secondary btn-block col-12 col-xl-1">buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex justify-content-between m-2">
                    <span>811 resultados</span>
                    <button type="button" class=" btn-primary p-2" style="background-color: #5678EF;">Agendar una Cita</button>
                    </div>
                    <!-- citas citas -->
                    <div class="table-responsive">
    <table class="table table-bordered bg-white">
      <thead>
        <tr>
          <th>No de cita</th>
          <th>Agendada con</th>
          <th>Especialista en</th>
          <th>En Consultorio </th>
          <th>fecha de cita</th>
          <th>Dia de cita</th>
          <th>Horario de cita</th>
          <th>Estado de la cita</th>
          <th>acciones de la cita</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>003</td>
          <td>brangie miliano</td>
          <td>cirujano plastico</td>
          <td>la vega</td>
          <td>26.06.2024</td>
          <td>jueves</td>
          <td>9:00 am</td>
          <td><div class="etiqueta">en espera </div></td>
          <td><div><button>editar</button> <button>cancelar</button></div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
                <!-- fin  -->
                </div>
            </div>

        </div>
    </div>
    <!-- fin del contenedor -->
<?php endif; ?>
<!-- fin del contenido -->

<?php include_once __DIR__ . '/footerDasboard.php'; ?>