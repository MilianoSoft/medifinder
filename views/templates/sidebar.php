<div class="sidebar">
    <h4 style="color: white; font-size:30px;" >medi<span style="color:aquamarine;">Finder</span></h4>
    <nav class="sidebar-nav">

    <div class="datos-perfil">
         <div class="foto"> <img src="/img/icons/perfi.png" alt="perfil"></div>
         <div class="dato">
            <p>bienvenido</p>
            <p>Dr: <?php echo( $_SESSION['nombre']);?></p>
         </div>
     </div>

        <a class="<?php echo ($titulo == 'dasboard') ? 'activo' : ''; ?>" href="/dasboard">
            <div class="icono"><img src="/img/icons/dasboard.png" alt="icono-dasboard"></div>Tablero
        </a>

        <a class="<?php echo ($titulo == 'cita') ? 'activo' : ''; ?>" href="#">
            <div class="icono"><img src="/img/icons/citas.png" alt="icono-cita"></div>Agenda
        </a>

        <a class="<?php echo ($titulo == 'paciente') ? 'activo' : ''; ?>" href="/paciente">
            <div class="icono"><img src="/img/icons/medicos.png" alt="icono-doctor"></div>Paciente
        </a>

        <a class="<?php echo ($titulo == 'reporte') ? 'activo' : ''; ?>" href="/perfil">
            <div class="icono"><img src="/img/icons/report.png" alt="icono-reporte"></div>Reportes
        </a>

        <a class="<?php echo ($titulo == 'reporte') ? 'activo' : ''; ?>" href="/perfil">
            <div class="icono"><img src="/img/icons/config.png" alt="icono-reporte"></div>configuracion
        </a>

        <a class="<?php echo ($titulo == 'reporte') ? 'activo' : ''; ?>" href="/perfil">
            <div class="icono"><img src="/img/icons/mesa-de-ayuda.png" alt="icono-reporte"></div>soporte
        </a>

    </nav>
</div>