<html>


<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Script PHP para control de notas de gastos" />
    <meta name="author" content="Obed Alvarado" />

    <title>Mantenimiento </title>
    <link rel='shortcut icon' href='../Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />

    <!-- BOOTSTRAP CORE STYLE CSS -->

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- CUSTOM STYLE CSS -->

    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet" />



    <link href="../assets/css/estilos_Mantenimieto.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">





    <style>
        table.table td a.edit {

            color: #FFC107;

        }

        table.table td i {

            font-size: 19px;

        }

        table.table td a:hover {

            color: #2196F3;

        }
    </style>





</head>

<body>



    <?php

    /* Connect To Database*/

    require_once("../includes/conexion_general.php"); //Contiene funcion que conecta a la base de datos

    $query_perfil = mysqli_query($conn, "select * from tbperfil where id=1");

    $rw = mysqli_fetch_assoc($query_perfil);

    date_default_timezone_set('America/Bogota');






    function nex_num_orden()
    {

        global $conn;

        $sql = mysqli_query($conn, "select num_orden from tborden_reparacion order by id desc limit 0,1");

        $rw = mysqli_fetch_array($sql);
        if (mysqli_num_rows($sql) > 0) {

            $num_orden = $rw['num_orden'];

            $nex_num_orden = $num_orden + 1;
        } else {
            $nex_num_orden = 1;
        }


        return $nex_num_orden;
    }



    ?>


    <div class="container outer-section">
        <div id="print-area">
            <div class="row pad-top font-big">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a href="#" target="_blank"> <img src="../Imag/CAR AUDIO.png" class="rounded mx-auto" width="300" height="150" alt="Logo sistemas web" /></a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <strong>E-mail : </strong> <?php echo $rw['email']; ?>
                    <br />
                    <strong>Teléfono :</strong> <?php echo $rw['telefono']; ?> <br />
                    <strong>Sitio web :</strong> <?php echo $rw['web']; ?>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <strong><?php echo $rw['nombre_comercial']; ?> </strong>
                    <br />
                    Dirección : <?php echo $rw['direccion']; ?>
                    <br />

                </div>

            </div>

            <br>



            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Orden de Sevicio de Mantenimiento</h3>
                        </div>

                        <form id="form" name="form" method="POST">

                            <input type="hidden" class="form-control" id="action" name="action" value="ajax">

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class=" col-md-3">

                                                <label>Fecha <span class="text-danger"></span></label>

                                                <input class="form-control datetimepicker" type="text" id="fecha" name="fecha" value="<?php echo date("d/m/Y"); ?>">

                                            </div>

                                            <div class="col-md-2">

                                                <label>Nº de orden <span class="text-danger"></span></label>
                                                <input type="text" class="form-control" value=" <?php echo nex_num_orden(); ?>" id="orden" name="orden" readonly="">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="row">

                                            <div class="  col-md-4">

                                                <label for="">Nombre del cliente</label>

                                                <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Nombre del cliente" required>

                                            </div>

                                            <div class=" col-md-4">

                                                <label for="">Nº Documento de identidad</label>

                                                <input type="text" class="form-control" name="dni" id="dni" placeholder="Documento de identidad" required>

                                            </div>



                                            <div class=" col-md-4">

                                                <label for="">Teléfono de contacto</label>

                                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese Teléfono">

                                            </div>



                                            <div class="col-md-4">

                                                <label for="">E-mail</label>

                                                <div class="input-group">

                                                    <span class="input-group-text" id="basic-addon1">@</span>

                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico">

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="">Direccion</label>

                                                <input type="text" class="form-control" id="sucursal" name="sucursal" placeholder="Ingrese sucursal">

                                            </div>

                                            <div class=" col-md-4">

                                                <label for="">Marca del producto</label>

                                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese Marca" required>

                                            </div>



                                            <div class="col-md-4">

                                                <label for="">Modelo</label>

                                                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Ingrese Modelo" required>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="">Número de serie</label>

                                                <input type="text" class="form-control" id="serie" name="serie" placeholder="Número de serie" required>

                                            </div>



                                            <div class="col-md-4">

                                                <label for="">Persona encargada del mantenimiento</label>

                                                <input type="text" class="form-control" id="taller" name="taller" placeholder="Taller de reparación" required>

                                            </div>

                                            <div class="form-group">

                                                <label for="">Descripción del problema</label>

                                                <textarea class="form-control" id="descProblema" name="descProblema" rows="3"></textarea>

                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>

                </div>





            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <h3 class="panel-title text-center">Tipo de mantenimiento</h3>

                        </div>

                        <br>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check form-check-inline ">

                                    <label class="form-check-label" for="">Mantenimiento por garantia de producto</label>

                                    <input class="form-check-input" type="radio" id="tipo_reparacion" name="tipo_reparacion" value="1">
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-check form-check-inline ">

                                    <label class="form-check-label" for="">Mantenimiento a cuenta del cliente</label>

                                    <input class="form-check-input" type="radio" id="tipo_reparacion" name="tipo_reparacion" value="2">
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-check form-check-inline ">

                                    <label class="form-check-label" for="">Mantenimiento reparación XL</label>

                                    <input class="form-check-input" type="radio" id="tipo_reparacion" name="tipo_reparacion" value="3">

                                </div>
                            </div>
                        </div>

                        <hr>

                        <hr>

                        <div class="panel-body">



                            <div class="col-md-12">

                                <table class="table">

                                    <thead>

                                        <tr>

                                            <th>Código</th>

                                            <th>Caracteristicas</th>

                                            <th>¿En que parte del producto?</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>1</td>

                                            <td>Fisuras/quebraduras</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-text">

                                                        <input type="checkbox" class="form-check-input" name="check_1" id="check_1" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_1" id="part_product_1">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>2</td>

                                            <td>Marcas(rayones)</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-text">

                                                        <input type="checkbox" class="form-check-input" name="check_2" id="check_2" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_2" id="part_product_2">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>3</td>

                                            <td>Pintura Dañada</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-text">

                                                        <input type="checkbox" class="form-check-input" name="check_3" id="check_3" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_3" id="part_product_3">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>4</td>

                                            <td>Golpes Graves</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-text">

                                                        <input type="checkbox" class="form-check-input" name="check_4" id="check_4" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_4" id="part_product_4">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>5</td>

                                            <td>Manchas</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-text">

                                                        <input type="checkbox" class="form-check-input" name="check_5" id="check_5" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_5" id="part_product_5">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>6</td>

                                            <td>Golpes Leves</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-text">

                                                        <input type="checkbox" class="form-check-input" name="check_6" id="check_6" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_6" id="part_product_6">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>7</td>

                                            <td>Componentes Faltantes</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-Text">

                                                        <input type="checkbox" class="form-check-input" name="check_7" id="check_7" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_7" id="part_product_7">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>8</td>

                                            <td>Otros</td>

                                            <td>

                                                <div class="input-group">

                                                    <span class="input-group-text">

                                                        <input type="checkbox" class="form-check-input" name="check_8" id="check_8" value="1">

                                                    </span>

                                                    <input type="text" class="form-control" name="part_product_8" id="part_product_8">

                                                </div><!-- /input-group -->

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                                <div class="form-group">

                                    <label for="">Componentes Faltantes</label>

                                    <textarea class="form-control" name="componentes_faltantes" id="componentes_faltantes" rows="2"></textarea>

                                </div>

                                <div class="form-group">

                                    <label for="">Descripción</label>

                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="2"></textarea>

                                </div>

                                <div class="form-group">

                                    <label for="">Otras Observaciones</label>

                                    <textarea class="form-control" name="otras_observaciones" id="otras_observaciones" rows="2"></textarea>

                                </div>

                                <a class="btn btn-primary" href="../Modulo_Servicios/Modulo_Servicios.php" role=" button">Guardar</a>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>





            </div>

        </div>



    </div>









</body>

<script type="text/javascript" src="js/VentanaCentrada.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
< <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
    </script>







    <script type="text/javascript">
        $(function() {

            $('.datetimepicker').datetimepicker({

                format: 'DD/MM/YYYY'



            })



        });
    </script>



    <script type="text/javascript">
        $("#form").submit(function(event) {

            parametros = $(this).serialize();

            $.ajax({

                type: "POST",

                url: 'ajax/orden_reparacion.php',

                data: parametros,

                beforeSend: function(objeto) {

                },

                success: function(data) {

                    // alert("Orden realizada con éxito!");

                    num_orden = $('#orden').val();

                    VentanaCentrada('./pdf/documentos/orden_reparacion.php?num_orden=' + num_orden, 'Orden', '', '1024', '768', 'true');



                    location.reload();

                }

            })



            event.preventDefault();

        })
    </script>



</html>