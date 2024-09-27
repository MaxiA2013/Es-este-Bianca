<div class="row">
    <div class="col" style="border: solid 1px; background-color: rgb(111, 111, 229);"></div>
    <div class="col-6">
        <form method="POST" action="controladores/login.controlador.php">
            <input type="hidden" name="action" value="registro" /> 
            <div class="mb-3 mt-3">
                <label for="nombre_usuario" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el Nombre " name="nombre">
            </div>
            <div class="mb-3 mt-3">
                <label for="nombre_usuario" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Ingrese el Apellido" name="apellido">
            </div>
            <div class="mb-3 mt-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" placeholder="Ingrese la Fecha de Nacimiento" name="fecha_nacimiento">
              </div>
            <div class="mb-3 mt-3">
                <label for="nombre_usuario" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                    <option value="3">Otro</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="nombre_usuario" class="form-label">Nombre Usuario</label>
                <input type="text" class="form-control" id="nombre_usuario" placeholder="Ingrese el Nombre del Usuario" name="nombre_usuario">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresar Correo Electrónico" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" placeholder="Ingresar Contraseña" name="password">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Recordar Contraseña
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
    <div class="col" style="border: solid 1px; background-color: rgb(111, 111, 229);"></div>
</div>
