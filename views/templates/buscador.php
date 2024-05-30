<div class="buscador">
                <form method="post" action="/finder">
                    <h4>encuentra tu <span>medico</span></h4>
                    <input type="text" placeholder=" Busca por  clinica, seguro,ciudad o especialidad del medico">
                    <button type="submit" class="btnBuscar"><img src="/img/buscar.png" alt="boton-buscar"></button>
                    </form>
                <form method="get" action="/finder">
                    <!-- selecion de especialidad  -->
                    <select onchange="this.form.submit()" class="selecion"name="especialidad" >
                        <option selected=true default disabled>Especilidad</option>
                        <?php foreach($especialidad as $value):?>
                            <option value="<?php  echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                        <!-- seleccion de seguros -->
                        <select onchange="this.form.submit()" class="selecion"name="seguro" >
                        <option selected=true disabled>seguros</option>
                        <?php foreach($seguro as $value):?>
                            <option value="<?php echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- selecion de ciudades  -->
                    <select onchange="this.form.submit()" class="selecion"name="ciudad" >
                        <option default disabled selected=true>ciudad</option>
                        <?php foreach($ciudad as $value):?>
                            <option value="<?php echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- selecion de clinicas -->
                    <select onchange="this.form.submit()" class="selecion"name="clinica" >
                        <option default disabled selected=true>clinica</option>
                        <?php foreach($clinica as $value):?>
                            <option value="<?php echo($value->id);?>"> <?php echo($value->nombre);?></option>
                        <?php endforeach; ?>
                    </select>
                
                </form>
            </div>