<!-- Button trigger modal -->
<!-- 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>  -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Paciente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="perfil">
                <fieldset> 
                        <div class="foto">
                            <img class="img1" src="/img/img-perfil/sin-foto.png" alt="foto-imagen">
                        </div>
                        <div class="boton-camara">
                            <img class="img1" src="/img/icons/camara.png" alt="foto-imagen">
                            <input type="file" aria-label="subir foto">
                        </div>
                        <div>
                            <label>No Expediente</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Nombre</label>
                            <input type="text">
                        </div>
                    </fieldset>
                    <fieldset>

                        <div>
                            <label>Apellido Paterno</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Apellido Materno</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Telefono</label>
                            <input type="text">
                        </div>

                        <div>
                            <label>Cedula</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Correo electronico</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Sexo</label>
                            <input type="text">
                        </div>
                    </fieldset>
                    <fieldset>
                        <div>
                            <label>Fecha de nacimiento</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Nacionalidad</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Provincia</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Municipio</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Direcion/ Calle y #</label>
                            <textarea name="" id="" rows="5">
                            </textarea>
                        </div>
                    </fieldset>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                <button type="submit" class="btn btn-primary">Guardar registro</button>
            </div>
            
        </div>
    </div>
</div>
<!-- fin del modal -->