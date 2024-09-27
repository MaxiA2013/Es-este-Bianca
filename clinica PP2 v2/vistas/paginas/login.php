<link rel="stylesheet" href="../../assets/css/login.css">

<div class="row">
    <div class="col"></div>
        <div class="col" style="border: solid 1px; background-color: rgb(111, 111, 229); margin-top: 5%;">
            <form id="id_form" method="POST" action="../../controladores/login.controlador.php">
                <input type="hidden" name="action" value="login" /> 
                <div class="mb-3 mt-3">
                    <label for="nombre_usuario" class="form-label">Nombre Usuario</label>
                    <input type="text" class="form-control" id="nombre_usuario" placeholder="Ingrese el Nombre del Usuario" name="nombre_usuario">
                    <p id="id_usuario_parrafo" style="color: red; display:none;">Usuario Requerido</p>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresar Correo Electrónico" name="email">
                    <p id="id_email_parrafo" style="color: red; display:none;">Email Requerido</p>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresar Contraseña" name="password">
                    <p id="id_contraseña_parrafo" style="color: red; display:none;">Contraseña Requerido</p>
                </div>
                <div class="form-check mb-3" id="id_remember">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Recordarme
                    </label>
                </div>
                <div class="d-grid gap-2">
                    <button onclick="validate()" type="button" class="btn btn-dark" type="button">Entrar</button>
                </div>
            </form>
        </div>
    <div class="col"></div>
</div>

<script src="../../assets/js/validaciones/login.js"></script>
