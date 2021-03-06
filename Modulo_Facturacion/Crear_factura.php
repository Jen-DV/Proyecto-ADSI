<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Script PHP para control de notas de gastos" />
    <meta name="author" content="Obed Alvarado" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title> Generar facturas </title>
    <link rel='shortcut icon' href='../Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CUSTOM STYLE CSS -->

    <link href="../assets/css/Estilos_Crear_Factura.css" rel="stylesheet" />
    <link rel=icon href='#' sizes="32x32" type="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <?php
    /* Connect To Database*/

    require_once("../includes/conexion_general.php"); //Contiene funcion que conecta a la base de datos
    $query_perfil = mysqli_query($conn, "select * from perfil where id=1");
    $rw = mysqli_fetch_assoc($query_perfil);
    $sql = mysqli_query($conn, "select id as last from facturas order by id desc limit 0,1 ");
    $rws = mysqli_fetch_array($sql);
    if (empty($rws)) {
        $rws['last'] = 0;
    }
    $numero = $rws['last'] + 1;

    date_default_timezone_set('America/Bogota');
    ?>


    <div class="container outer-section">

        <form class="form-horizontal" role="form" id="datos_factura" method="post">
            <div id="print-area">
                <div class="row pad-top font-big">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#" target="_blank"> <img src="../Imag/CAR AUDIO.png" class="rounded mx-auto" width="300" height="100" alt="Logo sistemas web" /></a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <strong>E-mail : </strong> <?php echo $rw['email']; ?>
                        <br />
                        <strong>Tel??fono :</strong> <?php echo $rw['telefono']; ?> <br />
                        <strong>Sitio web :</strong> <?php echo $rw['web']; ?>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <strong><?php echo $rw['nombre_comercial']; ?> </strong>
                        <br />
                        Direcci??n : <?php echo $rw['direccion']; ?>
                        <br />
                    </div>

                </div>




                <div class="row ">
                    <hr />
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2>Detalles del cliente :</h2>
                        <select class="cliente form-control" name="cliente" id="cliente" required>
                            <option value="">Selecciona el cliente</option>
                        </select>
                        <span id="direccion"></span>
                        <h4><strong>N?? Documento de identidad: </strong><span id="Cedula"></span></h4>
                        <h4><strong>E-mail: </strong><span id="email"></span></h4>
                        <h4><strong>Tel??fono: </strong><span id="telefono"></span></h4>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2>Detalles de la factura:</h2>
                        <h4><strong>Factura #: </strong><?php echo $numero; ?></h4>
                        <h4><strong>Fecha: </strong> <?php echo date("d/m/Y"); ?></h4>


                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Otros comentarios"></textarea>


                    </div>
                </div>


                <div class="row">
                    <hr />
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-striped  table-hover">
                                <thead>
                                    <tr>
                                        <th class='text-center'>Item</th>
                                        <th>Descripci??n</th>
                                        <th class='text-center'>Cantidad</th>
                                        <th class='text-right'>Precio unitario</th>
                                        <th class='text-right'>Total</th>
                                        <th class='text-right'></th>
                                    </tr>
                                </thead>
                                <tbody class='items'>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





            </div>
            <div class="row">
                <hr />
            </div>
            <div class="row pad-bottom  pull-right">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-success ">Guardar factura</button>




                </div>
            </div>
        </form>
    </div>
    <form class="form-horizontal" name="guardar_item" id="guardar_item">
        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nuevo ??tem</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <label>Descripci??n del producto/servicio</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                                <input type="hidden" class="form-control" id="action" name="action" value="ajax">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Cantidad</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad" required>
                            </div>

                            <div class="col-md-6">
                                <label>Precio unitario</label>
                                <input type="text" class="form-control" id="precio" name="precio" required>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info">Guardar</button>

                    </div>
                </div>
            </div>
        </div>
    </form>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".cliente").select2({
            ajax: {
                url: "ajax/clientes_json.php",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term // search term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            },
            minimumInputLength: 2
        }).on('change', function(e) {
            var email = $('.cliente').select2('data')[0].email;
            var telefono = $('.cliente').select2('data')[0].telefono;
            var direccion = $('.cliente').select2('data')[0].direccion;
            $('#email').html(email);
            $('#telefono').html(telefono);
            $('#direccion').html(direccion);
        })
    });

    function mostrar_items() {
        var parametros = {
            "action": "ajax"
        };
        $.ajax({
            url: 'ajax/items.php',
            data: parametros,
            beforeSend: function(objeto) {
                $('.items').html('Cargando...');
            },
            success: function(data) {
                $(".items").html(data).fadeIn('slow');
            }
        })
    }

    function eliminar_item(id) {
        $.ajax({
            type: "GET",
            url: "ajax/items.php",
            data: "action=ajax&id=" + id,
            beforeSend: function(objeto) {
                $('.items').html('Cargando...');
            },
            success: function(data) {
                $(".items").html(data).fadeIn('slow');
            }
        });
    }

    $("#guardar_item").submit(function(event) {
        parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: 'ajax/items.php',
            data: parametros,
            beforeSend: function(objeto) {
                $('.items').html('Cargando...');
            },
            success: function(data) {
                $(".items").html(data).fadeIn('slow');
                $("#myModal").modal('hide');
            }
        })

        event.preventDefault();
    })
    $("#datos_factura").submit(function() {
        var cliente = $("#cliente").val();
        var descripcion = $("#descripcion").val();


        if (cliente > 0) {
            VentanaCentrada('./pdf/documentos/factura.php?cliente=' + cliente + '&descripcion=' + descripcion, 'Presupuesto', '', '1024', '768', 'true');
        } else {
            alert("Selecciona el cliente");
            return false;
        }

    });


    mostrar_items();
</script>

</html>