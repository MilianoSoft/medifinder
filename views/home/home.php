<?php
  include __DIR__.'../../templates/header.php';
?>
   
   <main class="contenedor">
  <section class="seccion1">
  <h2>Quienes somos?</h2>
  <p>
     somos el directorio medico mas grande del pais, nos encargamos de conectarte con tu medico de preferencia
      podras ver recomendaciones de los medicos por otros pacientes, buscar tu medico por la clinica donde trabaja,
      el seguro que admite o la ciudad donde esta su consultorio. ademas podras agendar una cita con tu medico sin
      tener que visitar el consultorio ahorrando tiempo y dinero con nosotros.
  </p>
  </section>

  <div class="registro">
    <a href="#" class="boton-registro btn-paciente"> eres un paciente?</a>
    <a href="#" class="boton-registro btn-medico"> eres un medico?</a>
  </div>

  <section class="secion-paciente">
    <h2>como paciente puedes</h2>
    <div class="contenido-paciente">
    <div class="beneficio-paciente">
       <div class="tarjeta">
        <h3>agendar citas en linea</h3>
        <div class="division"></div>
        <div>
          <p>Puedes beneficiarte de agendar citas en linea
            con tu medico de preferencia a cualquier hora
          </p>
        </div>
       </div>
       <div class="tarjeta">
        <h3>encuentra tu medico</h3>
        <div class="division"></div>
        <div>
          <p>Puedes buscar tu medico de preferencia sin importar su clinica
            o ciudad donde se encuentre su consultorio
          </p>
        </div>
       </div>
       <div class="tarjeta">
        <h3>que acepten tu seguro</h3>
        <div class="division"></div>
        <div>
          <p> encuentra medicos  y clinicas que aceptan tu seguro, sin necesidad de desplazarte al consultorio
          </p>
        </div>
       </div>
       <div class="tarjeta">
        <h3>tu historial clinico</h3>
        <div class="division"></div>
        <div>
          <p>lleva el registro de tu historial clinico, totalmente gratis en la nube accesible 24/7 
          </p>
        </div>
       </div>
    </div>
    <div class="imagen-paciente">
        <img src="/img/undraw_color_palette_re_dwy7.svg" alt="imagen del paciente">
    </div>
    </div>
  </section>

  <div >
      <a class="botonn" href="/crear">Registrate como paciente</a>
    </div>

  <section class="secion-medico">
    <h2 >como medico puedes</h2>
    <div class="contenido-medico">
    <div class="imagen-medico">
        <img src="/img/undraw_doctors_p6aq.svg" alt="imagen del medico">
    </div>
    <div class="beneficio-medico">
       <div class="tarjeta">
        <h3>el control de tu consultorio</h3>
        <div class="division"></div>
        <div>
          <p>obtendras un software gratis para la gestion de tu consultorio en linea 24/7 
          </p>
        </div>
       </div>
       <div class="tarjeta">
        <h3>agenda en linea </h3>
        <div class="division"></div>
        <div>
          <p>obten notificaciones de tu agenda en linea y los pacientes que agendan cita con tigo
          </p>
        </div>
       </div>
       <div class="tarjeta">
        <h3>monitoreo de pacientes</h3>
        <div class="division"></div>
        <div>
          <p> monitorea tus pacientes desde cualquier parte con tu computador o telefono movil en linea 
          </p>
        </div>
       </div>
       <div class="tarjeta">
        <h3>reportes para la dgi</h3>
        <div class="division"></div>
        <div>
          <p> organiza tus facturas y reportes para la DGI, gestiona los seguros medicos con los que trabajas
          </p>
        </div>
       </div>
    </div>
    </div>
  </section>
  <div class="rigth" >
      <a class="botonn" href="/crear">Registrate como medico</a>
    </div>
  </main>
  <?php
  include __DIR__.'../../templates/footer.php';
?>
   