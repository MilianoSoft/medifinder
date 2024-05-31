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
            <a class="btn btn-cita" href="/agendarCita">agendar cita</a>
            <a class="btn btn-perfil" href="/medicoPerfil">perfil completo</a>
        </div>
    </div>

    </section>
  </main>

</div>

<?php include_once __DIR__ . '../../templates/footer.php';?>