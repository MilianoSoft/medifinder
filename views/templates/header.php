<header class="header">
    <nav class="barra-menu">
        <a class="titulo" href="/">medi<h2>finder</h2></a>
        <div>
            <a href="/login" class=" btn btn-entrar">inicia sesion</a>
        </div>
    </nav>

    <div class="flex">
        <div class="imagen">
            <img src="/img/undraw_doctor_kw-5-l.svg" alt="imagen-doctor">
        </div>
        <div class="mensaje">
            <div>
                <h3>agendar tus citas medicas con el doctor de tu preferencia </h3>
                <p>De forma segura y en la nube, sin importar la clinica</p>
            </div>

            <div class="buscador">
                <form action="#">
                    <h4>encuentra tu <span>medico</span></h4>
                    <input type="text" placeholder=" Busca por  clinica, seguro,ciudad o especialidad del medico">
                </form>
                <div>
                    <!-- selecion de especialidad  -->
                    <select class="selecion" name="medicos" id="especialidad">
                        <option value="volvo" selected=true default disabled>Especilidad</option>
                        <?php foreach($especialidad as $value):?>
                            <option value="<?php echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                        <!-- seleccion de seguros -->
                    <select class="selecion" name="medicos" id="seguros">
                        <option selected=true disabled>seguros</option>
                        <?php foreach($seguro as $value):?>
                            <option value="<?php echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- selecion de ciudades  -->
                    <select class="selecion" name="medicos" id="ciudad">
                        <option default disabled selected=true>ciudad</option>
                        <?php foreach($ciudad as $value):?>
                            <option value="<?php echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- selecion de clinicas -->
                    <select class="selecion" name="medicos" id="clinica">
                        <option default disabled selected=true>clinica</option>
                        <?php foreach($clinica as $value):?>
                            <option value="<?php echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</header>