<?php include_once __DIR__ . '/headerDasboard.php'; ?>
<!-- aqui ira el contenido -->

<?php if ($tipo == "2") : ?>
    <div class="contenido">

        <form class=" perfil-paciente" action="/perfil" method="post" enctype="multipart/form-data">
            <fieldset class="campo-2">
                <input type="text" hidden value="<?php echo($usuario->id);?>" name="id_paciente">
                <div class="item-campo2">
                    <label>Nombre</label>
                    <input type="text" value="<?php echo($usuario->nombre)?>" name="nombre">
                </div>

                <div class="item-campo2">
                    <label>Apellido Paterno</label>
                    <input type="text" value="<?php echo($usuario->apellido)?>" name="apellido">
                </div>
                <div class="item-campo2">
                    <label>Apellido Materno</label>
                    <input type="text" value="<?php echo($perfil->m_apellido);?>" name="m_apellido">
                </div>
                <div class="item-campo2">
                    <label>Telefono</label>
                    <input type="text" value="<?php echo($usuario->telefono)?>" name="telefono">
                </div>

                <div class="item-campo2">
                    <label>Cedula</label>
                    <input type="text" value="<?php echo($perfil->cedula);?>" name="cedula">
                </div>
                <div class="item-campo2">
                    <label>Correo electronico</label>
                    <input type="text" value="<?php echo($usuario->email)?>" name="email">
                </div>
                <div class="item-campo2">
                    <label>Sexo</label>
                    <input type="text" value="<?php echo($perfil->sexo);?>" name="sexo">
                </div>
            </fieldset>
            <fieldset class="campo-2">
                <div class="item-campo2">
                    <label>Fecha de nacimiento</label>
                    <input type="text" value="<?php echo($perfil->fecha_nac);?>" name="fecha_nac">
                </div>
                <div class="item-campo2">
                    <label>Estado civil</label>
                    <input type="text" value="<?php echo($perfil->estado_civil);?>" name="estado_civil">
                </div>
                <div class="item-campo2">
                    <label>Nacionalidad</label>
                    <input type="text" value="<?php echo($perfil->nacionalidad);?>" name="nacionalidad">
                </div>
                <div class="item-campo2">
                    <label>Provincia</label>
                    <input type="text" value="<?php echo($perfil->provincia);?>" name="provincia">
                </div>
                <div class="item-campo2">
                    <label>Municipio</label>
                    <input type="text" value="<?php echo($perfil->municipio);?>" name="municipio">
                </div>
                <div class="item-campo2">
                    <label>Direcion/ Calle y #</label>
                    <textarea  rows="5" name="direcion">
                    <?php echo($perfil->direcion);?>
                    </textarea>
                </div>
            </fieldset>
            <fieldset>
                <div class="foto">
                    <img class="img1" src="/img/img-perfil/<?php echo($perfil->imagen);?>.png" alt="foto-imagen">
                </div>
                <div class="boton-camara">
                    <div class="file-select" id="filetest">
                        <input type="file" name="fileTest" aria-label="subir tu foto">
                    </div>
                </div>
            </fieldset>
            <div class="campo-3">
                <input class="btn btn-primary" type="submit" value="Guardar">
            </div>
        </form>
    </div>
    </div>
<?php endif; ?>
<!-- fin del contenido -->

<?php include_once __DIR__ . '/footerDasboard.php'; ?>