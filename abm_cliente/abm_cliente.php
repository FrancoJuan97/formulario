<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM_CLIENTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--para probar el git status-->
    <style>
        .shadow-custom {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
        }
    </style>
</head>

<body>
    <div class="container h-100">
        <div class="row justify-content-sm-center">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <div class="card shadow-custom my-5">
                    <div class="card-body px-5">
                        <h3 class="text-center text-secundary">Formulario Clientes</h3>
                        <hr>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="nombre">
                                </div>
                                <div class="col-lg-6 col-6 mb-3">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" id="apellido" placeholder="apellido">
                                </div>
                                <div class="col-lg-6 col-6">
                                    <label for="exampleInputEmail1" class="form-label">Tipo de Dni</label>
                                    <select class="form-select" id="tipo_documento" aria-label="Default select example">
                                        <option selected>Tipo de Documento</option>
                                        <option value="1">Opcion 1</option>
                                        <option value="2">Opcion 2</option>
                                        <option value="3">Opcion 3</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">DNI</label>
                                    <input type="text" class="form-control" id="dni">
                                </div>
                                <div class="col-lg-6 col-6">
                                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento">
                                </div>
                                <div class="col-lg-6 col-6 mb-3">
                                    <label for="sexo" class="form-label">Seleccione sexo</label>
                                    <select class="form-select" id="sexo" name="sexo">
                                        <option selected>Sexo</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                        <option value="3">Otros</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">CUIL/CUIT</label>
                                    <input type="text" class="form-control" id="cuil" placeholder="Ingrese su CUIT/CUIL">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <button type="submit" class="form-control btn btn-danger" name="cancelar">Cancelar</button>
                                    </div>
                                    <div class="col-lg-6 col-6">

                                        <button type="submit" class="form-control btn btn-primary" name="enviar">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- <a href="">Borrar todas las respuestas</a> -->
                            <input type="reset" value="Reset" >
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>