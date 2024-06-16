<div class="barra">
    
        <form class="form" >
           
            <input class="input" type="text" placeholder="buscar paciente">
            <div class="buscar-icono">
                <img class="foto" src="/img/icons/buscar.png" alt="">
            </div>
        </form>
    
    <div class="usuario">
        <div class="foto"> <img src="img/icons/perfi.png" alt="usuario-imagen"></div>
        <?php if($tipo=="1"){?> <p>Medico</p> <?php }?>
        <?php if($tipo=="2"){?> <p>Paciente</p> <?php }?>
        <div class="foto"> <img src="img/icons/campana.png" alt="campana"></div>
        <a href="/logout" class="cerrar-sesion">cerrar sesion</a>
    </div>
</div>