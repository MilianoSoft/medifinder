<?php include_once __DIR__ . '/../dasboard/headerDasboard.php'; ?>
<!-- aqui ira el contenido -->
<div>
    <?php if ($tipo == "1") : ?>
        <div class="items-contenido">

            <div class="item azul">
                <div>
                    <img src="/img/icons/citas.png" alt="imagen-cita">
                </div>
                <h3>citas</h3>
                <p>total de citas atendidas en el sistema</p>
            </div>
            <div class="item naranja">
                <div>
                    <img src="/img/icons/paciente.png" alt="imagen-paciente">
                </div>
                <h3>pacientes</h3>
                <p>total de paciente registrados en el sistema</p>
            </div>
            <div class="item verde">
                <div>
                    <img src="/img/icons/consulta.png" alt="imagen-consulta">
                </div>
                <h3>consultas</h3>
                <p>total de consultas atendidas en el sistema</p>
            </div>
        </div>

        <div class="items-contenido">
            <div class="item reporte">
                <div class="reporte-dato">
                    <h3>reportes</h3>
                    <p>reportes de todas tus actividades </p>
                </div>
                <div>
                    <img src="img/icons/grafico.png" alt="">
                </div>
            </div>

            <div class="citas">
                <p>citas de hoy : <?php echo (date('L')); ?></p>
                <div>
                    <table class="table table-bordered">
                        <thead class="tabla-cabecera">
                            <tr>
                                <th>hora</th>
                                <th>paciente</th>
                                <th>estatus</th>
                            </tr>
                        </thead>
                        <tbody class="tabla-cuerpo">
                            <tr>
                                <td>1.00 am</td>
                                <td>maria aneldo</td>
                                <td>en espera</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    <?php endif; ?> <!-- fin dasboad medico -->


    <!-- INICIO DASBOARD PACIENTE -->

    <?php if ($tipo == "2") : ?>
        <div class="dasboard-paciente">
            <div class="flex">

                <div class="flex-azul">
                    <div class="imagen">
                        <img src="/img/icons/citas.png" alt="imagen-cita">
                    </div>
                    <h3>Mi citas</h3>
                    <div class="flex-3-botones">
                        <a href="#">Asistidas</a>
                        <a href="#">Canceladas</a>
                        <a href="#">Pendientes</a>
                    </div>
                </div>
                <div class="flex-azul">
                    <div class="imagen">
                        <img src="/img/icons/consulta.png" alt="imagen-consulta">
                    </div>
                    <h3>Medicos</h3>
                    <div class="flex-3-botones">
                        <a href="#">favoritos</a>
                        <a href="#">especialidades</a>
                        <a href="#">consultorio</a>
                    </div>
                </div>
            </div>

            <div class="citas">
                <p> Proximas citas en mi agenda </p>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">especialidad</th>
                            <th scope="col">ciudad</th>
                            <th scope="col">Consultorio</th>
                            <th scope="col">fecha</th>
                            <th scope="col">dia</th>
                            <th scope="col">hora llegada</th>
                            <th scope="col">status</th>
                            <th scope="col">accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>cita con el cardiologo</td>
                            <td>Otto caraballo</td>
                            <td>cardiologia</td>
                            <td>bonao</td>
                            <td>principal</td>
                            <td>20.06.2024</td>
                            <td>jueves</td>
                            <td>9:30 am</td>
                            <td><div class="etiqueta" style="background-color:cadetblue;">Pendiente</div></td>
                            <td class="acciones"><div class="btn btn-primary">editar</div> <div class="btn btn-danger">cancelar</div></td>
                        </tr>
                       
                        <tr>
                            <th scope="row">1</th>
                            <td>cita con el cardiologo</td>
                            <td>Otto caraballo</td>
                            <td>cardiologia</td>
                            <td>bonao</td>
                            <td>principal</td>
                            <td>20.06.2024</td>
                            <td>jueves</td>
                            <td>9:30 am</td>
                            <td><div class="etiqueta" style="background-color:cadetblue;">Pendiente</div></td>
                            <td class="acciones"><div class="btn btn-primary">editar</div> <div class="btn btn-danger">cancelar</div></td>
                        </tr>
                       
                        <tr>
                            <th scope="row">1</th>
                            <td>cita con el cardiologo</td>
                            <td>Otto caraballo</td>
                            <td>cardiologia</td>
                            <td>bonao</td>
                            <td>principal</td>
                            <td>20.06.2024</td>
                            <td>jueves</td>
                            <td>9:30 am</td>
                            <td><div class="etiqueta" style="background-color:cadetblue;">Pendiente</div></td>
                            <td class="acciones"><div class="btn btn-primary">editar</div> <div class="btn btn-danger">cancelar</div></td>
                        </tr>
                       
                        <tr>
                            <th scope="row">1</th>
                            <td>cita con el cardiologo</td>
                            <td>Otto caraballo</td>
                            <td>cardiologia</td>
                            <td>bonao</td>
                            <td>principal</td>
                            <td>20.06.2024</td>
                            <td>jueves</td>
                            <td>9:30 am</td>
                            <td><div class="etiqueta" style="background-color:cadetblue;">Pendiente</div></td>
                            <td class="acciones"><div class="btn btn-primary">editar</div> <div class="btn btn-danger">cancelar</div></td>
                        </tr>
                       
                        <tr>
                            <th scope="row">1</th>
                            <td>cita con el cardiologo</td>
                            <td>Otto caraballo</td>
                            <td>cardiologia</td>
                            <td>bonao</td>
                            <td>principal</td>
                            <td>20.06.2024</td>
                            <td>jueves</td>
                            <td>9:30 am</td>
                            <td><div class="etiqueta" style="background-color:cadetblue;">Pendiente</div></td>
                            <td class="acciones"><div class="btn btn-primary">editar</div> <div class="btn btn-danger">cancelar</div></td>
                        </tr>
                       
                        <tr>
                            <th scope="row">1</th>
                            <td>cita con el cardiologo</td>
                            <td>Otto caraballo</td>
                            <td>cardiologia</td>
                            <td>bonao</td>
                            <td>principal</td>
                            <td>20.06.2024</td>
                            <td>jueves</td>
                            <td>9:30 am</td>
                            <td><div class="etiqueta" style="background-color:cadetblue;">Pendiente</div></td>
                            <td class="acciones"><div class="btn btn-primary">editar</div> <div class="btn btn-danger">cancelar</div></td>
                        </tr>
                    
                    </tbody>
                </table>

            </div>
        </div>

    <?php endif; ?>
</div>
<!-- fin del contenido -->
<?php include_once __DIR__ . '/../dasboard/footerDasboard.php'; ?>