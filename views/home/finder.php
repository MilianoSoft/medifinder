<div class="pagina-buscador">
  <!-- barra de navegacion -->
  <nav class="">
    <a href="/">
      <h2>Medi<span>Finder</span></h2>
    </a>
    <div>
      <a href="/">Inicio</a>
      <a href="/nosotros">Nosotros</a>
      <div>
        <a href="/login" class=" boton">Entrar</a>
        <a href="/registrate" class="boton">Registrate</a>
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
  </main>

</div>