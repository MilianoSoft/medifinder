<?php include_once __DIR__.'/../dasboard/headerDasboard.php';?>
<!-- aqui ira el contenido -->
<div >
   <?php if($tipo =="1"):?>
    <div  class="items-contenido">

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
    <p>citas de hoy : <?php echo (date('L'));?></p>
    <div>
        <table class="table table-bordered">
            <thead class="tabla-cabecera">
                    <tr>
                        <th >hora</th>
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
    <?php endif;?> <!-- fin dasboad medico -->


    <!-- INICIO DASBOARD PACIENTE -->
     <?php if($tipo=="2"):?>

        <h2>bienvenido paciente</h2>

    <?php endif;?>
 </div>
<!-- fin del contenido -->
<?php include_once __DIR__.'/../dasboard/footerDasboard.php';?>

