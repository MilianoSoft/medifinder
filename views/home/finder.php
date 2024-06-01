<div class="pagina-buscador">
  <!-- barra de navegacion -->
  <nav class="navbar-oficial">
    <a href="/">
      <h2>Medi<span>Finder</span></h2>
    </a>
    <div>
      <a href="/">Inicio</a>
      <a href="/nosotros">Nosotros</a>
      <div>
        <a href="/login" class=" boton">Entrar</a>
        <a href="/crear" class="boton">Registrate</a>
      </div>
    </div>
  </nav>
  <!-- secion principal -->
  <main>

    <div class="baner-buscador">

    <!-- barra de busquedad automatica -->
      <div class="serch">
          <form id="miFormulario" action="/finder" method="POST">
            <input type="text" id="miInput" name="miCampo" autocomplete="off" placeholder="Buscar....">
          </form>
      </div>

      <!-- seleccion de seguros -->
      <select onchange="this.form.submit()" class="selecion" name="seguro">
        <option selected=true disabled>seguros</option>
        <?php foreach ($seguro as $value) : ?>
          <option value="<?php echo ($value->id); ?>"> <?php echo ($value->nombre); ?></option>
        <?php endforeach; ?>
      </select>
      <!-- selecion de ciudades  -->
      <select onchange="this.form.submit()" class="selecion" name="ciudad">
        <option default disabled selected=true>ciudad</option>
        <?php foreach ($ciudad as $value) : ?>
          <option value="<?php echo ($value->id); ?>"> <?php echo ($value->nombre); ?></option>
        <?php endforeach; ?>
      </select>
      <!-- selecion de clinicas -->
      <select onchange="this.form.submit()" class="selecion" name="clinica">
        <option default disabled selected=true>clinica</option>
        <?php foreach ($clinica as $value) : ?>
          <option value="<?php echo ($value->id); ?>"> <?php echo ($value->nombre); ?></option>
        <?php endforeach; ?>
      </select>

      </form>
    </div>
    <!-- seccion de los perfiles de los medicos  -->
    <section class="medicos">
      <!-- tarjeta del medico -->
    <div class="profile-card">
        <div class="profile-image">
            <img src="/img/image.png" alt="Foto del Médico">
        </div>
        <div class="profile-info">
            <h2>Dr. Juan Pérez</h2>
            <h3>Cardiólogo</h3>
            <p> Tel: 809-8239-4040</p>
            <p>Experiencia: 15 años</p>
            <p>Clinica: Hospital General</p>

            <button type="button" class=" btn btn-cita " data-bs-toggle="modal" data-bs-target="#exampleModal">agendar cita</button>
            <a class="btn btn-perfil" href="/medicoPerfil">perfil completo</a>

             <!-- Modal agendar cita -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        <div class="modal-dialog">
        <form  method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">agendar cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  
                    <div class="modal-body">
                        <!-- inicio de calendario -->
                     
                            <fieldset>
                                <label for="nombre"> doctor: dr.juana perez</label>
                                <input type="hidden" name="doctor" value="juana perez">
                                <div>
                                    <label for="consultorio">consultorio</label>
                                    <select name="consultorio" id="consultorio">
                                        <option value="1"> consultorio bonao</option>
                                        <option value="2"> consultorio la vega</option>
                                        <option value="3"> consultorio moca</option>
                                        <option value="4"> consultorio santo domingo</option>
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset class="dosColumnas">
                                <div class="calendario">
                                    <div class="controls">
                                        <button type="button" id="prevMonth" class="btn btn-info">Anterior</button>
                                        <span class="nombre-mes" id="currentMonth"></span>
                                        <button type="button" id="nextMonth" class="btn btn-info">Siguiente</button>
                                    </div>
                                    <div id="calendar"></div>
                                    <input type="hidden" name="fecha" id="selectedDate">
                                   
                                </div>
                                <div class="horario">
                                  <p>Horas disponibles</p>
                                  <label id="selectedDayLabel">Día seleccionado: </label>
                                    <div class="horas">
                                        <div> 7:00 am</div>
                                        <div> 7:30 am</div>
                                        <div> 8:00 am</div>
                                        <div> 8:30 am</div>
                                        <div> 9:00 am</div>
                                        <div> 9:30 am</div>
                                        <div> 10:00 am</div>
                                        <div> 10:30 am</div>
                                    </div>
                                    <input type="hidden" name="hora" id="selectedTime">
                                </div>
                            </fieldset>
                            <script src="/build/js/calendar.js"></script>
                        <!-- fin de calendario -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">salir</button>
                        <button type="submit" class="btn btn-primary">agendar cita</button>
                    </div>
                   </form>   
                </div>
            </div>
        </div> <!-- agendar cita modal -->
           
        </div>
    </div>

    </section>
  </main>

</div>

<?php include_once __DIR__ . '../../templates/footer.php';?>