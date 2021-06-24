<title>Register - ownApp</title>
</head>
<body>
    <div class="content">
        <form action="" method="post">
            <div class="row align-items-center justify-content-center">
                <div class="col-5">
                    <div class="row">
                        <div class="mb-3 col-5">
                            <label for="" class="form-label">Tipo de Documento</label>
                            <select class="form-select" aria-label="Default select example" name="tipoDoc">
                                <option selected disabled>Seleccione</option>
                                <option value="cc">Cédula de Ciudadanía</option>
                                <option value="ce">Cédula de extranjería</option>
                                <option value="ps">Pasaporte</option>
                                <option value="nit">NIT</option>
                            </select>
                        </div>
                        <div class="mb-3 col-7">
                            <label for="noDoc" class="form-label">Numero de documento</label>
                            <input type="text" class="form-control" id="noDoc" name="noDoc" placeholder="No. Documento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre usuario</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="cnfPassword" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="cnfPassword" name="cnfPassword" placeholder="Confirmar contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Correo</label>
                            <input type="mail" class="form-control" id="mail" name="mail" placeholder="Correo">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefono</label>
                            <input type="password" class="form-control" id="phone" name="phone" placeholder="Telefono">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tipo de Documentousuario</label>
                            <select class="form-select" aria-label="Default select example" name="tipoUsuario">
                                <option selected disabled>Seleccione</option>
                                <option value="cliente">Cliente</option>
                                <option value="propietario">Propietario</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div>