<div >
<?php include_once __DIR__. '/../templates/nombre-pagina.php';?> 

    <div>
        <p >Crea Tu Cuenta</p>
        <!-- agrego un formulario con el metodo post -->

        <?php include_once __DIR__. '/../templates/alertas.php';?> 

        <form  method="POST" action="/crear">
            <!-- nombre -->
        <div >
                <label for="email">nombre</label>
                <input 
                    type="nombre"
                    id="nombre"
                    placeholder="tu nombre"
                    name="nombre"
                    value="<?php $usuario->nombre;?>"
                >

            </div>
            <!-- email -->
        <div >
                <label for="email">email</label>
                <input 
                    type="email"
                    id="email"
                    placeholder="tu email"
                    name="email"
                    value="<?php $usuario->email;?>"
                >

            </div>
            <!-- password -->
        <div>
                <label for="password">password</label>
                <input 
                    type="password"
                    id="password"
                    placeholder="contraseña"
                    name="password"

                >

            </div>
            <!-- Repetir password -->
        <div >
                <label for="password2">repetir password</label>
                <input 
                    type="password"
                    id="password2"
                    placeholder="repetir contraseña"
                    name="password2"
                >

            </div>

            <input type="submit" value="crear cuenta">

        </form>
        <div>
            <a href="/">iniciar sesion</a>
            <a href="/olvide">Olvidaste tu password?</a>
        </div>
    </div> <!-- contenedor sm -->


</div>