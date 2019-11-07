<?php  include_once ('../actions/core.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="../js/forms-functions-all.js"></script>

    <title>Form create order</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header" style="text-align: center;"><strong>Registro de Orden</strong></div>
            <div class="card-body">
            <form class="form-horizontal" name="RegistOrder" id="submitUsertForm" action="../actions/action-create-order.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputAgentName" name="inputAgentName" value="<?php echo $_SESSION['inputUserLogin']; ?>" class="form-control" placeholder="Agente" readonly="readonly" autofocus="autofocus">
                            <label for="inputAgentName"><?php echo $_SESSION['name']." ".$_SESSION['apellido']; ?></label>
                        </div>
                    </div>
                    <strong>Datos del cliente</strong>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div>Nombre(s) del cliente</div>
                            <input type="text" id="inputNameClient" name="inputNameClient" class="form-control" placeholder="Nombre del cliente" required="required" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Apellido(s) del cliente</div>
                            <input type="text" id="inputLastnameClient" name="inputLastnameClient" class="form-control" placeholder="Apellido(s) del cliente" required="required" autofocus="autofocus">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Telefono del cliente</div>
                            <input type="text" id="inputPhoneClient" name="inputPhoneClient" class="form-control" placeholder="Telefono del cliente" autofocus="autofocus">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Telefono alternativo</div>
                            <input type="text" id="inputPhoneAltClient" name="inputPhoneAltClient" class="form-control" placeholder="Telefono alternativo" autofocus="autofocus">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="form-label-group">                            
                        <div>Sexo del cliente</div>
                            <select id="inputGenClient" name="inputGenClient" class="form-control" >
                                <option value="">Seleccione</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Edad del cliente</div>
                        <input type="number" maxlength="2" min="21" max="95" id="inputAgeClient" name="inputAgeClient" class="form-control" placeholder="Edad del cliente" autofocus="autofocus">
                        </div>
                    </div>
                    <strong>Datos del envio</strong>                    
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Dirección del cliente</div>
                            <input type="text" id="inputDirClient" name="inputDirClient" class="form-control" placeholder="Dirección del cliente" autofocus="autofocus">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Zipcode</div>
                            <input type="text" maxlength="5" id="inputZipClient" name="inputZipClient" class="form-control" placeholder="Zipcode" autofocus="autofocus">
                        </div>
                    </div>    
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Zip4</div>
                            <input type="text" maxlength="4" id="inputZip4Client" name="inputZip4Client" class="form-control" placeholder="Zip4" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Ciudad</div>
                            <input type="text" id="inputCityClient" name="inputCityClient" class="form-control" placeholder="Ciudad" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Estado</div>
                            <input type="text" id="inputStateClient" name="inputStateClient" class="form-control" placeholder="Estado" autofocus="autofocus">
                        </div>
                    </div>
                    <strong>Datos de pago</strong>             
                    <div class="form-group">
                        <div class="form-label-group">
                            Forma de pago
                            <div class="form-label-group">
                                <input type="radio" name="inputPayment" id="inputPaymentMoneyOrder" onclick="mostrarReferencia();" />Money Order
                                </div>
                                <div class="form-label-group">
                                <input type="radio" name="inputPayment" id="inputPaymentCard" onclick="mostrarReferencia();" />Credit Card
                                </div>
                                <div class="form-label-group">
                                <input type="radio" name="inputPayment" id="inputPaymentBackD" onclick="mostrarReferencia();" />Back Deposit
                                </div>                                
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="form-label-group">
                        <div id="inputTypeCardLabel" style="display:none;" >Procesadora de la tarjeta</div>
                        <select id="inputTypeCardClient" name="inputTypeCardClient" style="display:none;" class="form-control" placeholder="Procesadora" autofocus="autofocus">
                        <option value="Visa">Visa</option>
                        <option value="MasterdCard">MasterdCard</option>
                        </select>
                        </div>
                    </div>                                     
                    <div class="form-group">
                        <div class="form-label-group">
                        <div id="inputCardClientLabel" style="display:none;" >Numero de tarjeta</div>
                            <input type="number" id="inputCardClient" name="inputCardClient" style="display:none;" class="form-control" placeholder="Numero de tarjeta" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div id="inputNameCardClientLabel" style="display:none;" >Nombre del Titular</div>
                            <input type="text" id="inputNameCardClient" name="inputNameCardClient" style="display:none;" class="form-control" placeholder="Nombre del Titular" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div id="inputDateExpCardClientLabel" style="display:none;" >Fecha de vencimiento</div>
                            <input type="month" step="1" id="inputDateExpCardClient" min="2013-12" max="2014-12" name="inputDateExpCardClient" style="display:none;" class="form-control" placeholder="Fecha de vencimiento" autofocus="autofocus">
                        	</div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div id="inputCvcCardClientLabel" style="display:none;" >CVC</div>
                            <input type="number" maxlength="3" id="inputCvcCardClient" name="inputCvcCardClient" style="display:none;" class="form-control" placeholder="CVC" autofocus="autofocus"><label for="inputCvcCardClient" id="inputCvcCardClient" style="display:none;" >CVC</label>
                        </div>
                    </div>
                    <div class="form-group">
                    Monto de facturación
                        <div class="form-label-group">
                            <input type="number" id="inputPriceClient" name="inputPriceClient" class="form-control" placeholder="Monto de facturación" autofocus="autofocus">
                        </div>
                    </div> 
                    <strong>Comentarios</strong>
                    <div class="form-group">
                        <div class="form-label-group">
                        <div>Re-Order?</div>
                            <select class="form-control" id="inputReOrder" name="inputReOrder" required="required">
                                <option value="">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>       
                    <div class="form-group">
                        <div class="form-label-group">
                            <textarea id="inputNoteAgent" name="inputNoteAgent" class="form-control" style="height: 100px;" row="6" placeholder="Comentario del agente" autofocus="autofocus"></textarea>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-8">
                                    <select class="form-control" id="inputProduct1Client" name="inputProduct1Client" style="width: 250px;" required="required">
                                        <option value="">Tratamiento 1</option>
                                        <?php
                        $query = $mysqli -> query ("SELECT * FROM products where Activo = 1");
                        while ($valores = mysqli_fetch_array($query)) {
                          echo '<option id="inputTratamiento1" value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                        }
                      ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" id="inputQty1Client" name="inputQty1Client" style="width: 100px;" required="required">
                                        <option id="inputTratamiento1Qty" value="">Qty</option>
                                        <option id="inputTratamiento1Qty" value="1">1</option>
                                        <option id="inputTratamiento1Qty" value="2">2</option>
                                        <option id="inputTratamiento1Qty" value="3">3</option>
                                        <option id="inputTratamiento1Qty" value="4">4</option>
                                        <option id="inputTratamiento1Qty" value="5">5</option>
                                        <option id="inputTratamiento1Qty" value="6">6</option>
                                        <option id="inputTratamiento1Qty" value="7">7</option>
                                        <option id="inputTratamiento1Qty" value="8">8</option>
                                        <option id="inputTratamiento1Qty" value="9">9</option>
                                        <option id="inputTratamiento1Qty" value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-8">
                                    <select class="form-control" id="inputProduct2Client" name="inputProduct2Client" style="width: 250px;">
                                        <option value="">Tratamiento 2</option>
                                        <?php
                        $query = $mysqli -> query ("SELECT * FROM products where Activo = 1");
                        while ($valores = mysqli_fetch_array($query)) {
                          echo '<option id="inputTratamiento2" value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                        }
                      ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" id="inputQty2Client" name="inputQty2Client" style="width: 100px;">
                                        <option id="inputTratamiento2Qty" value="">Qty</option>
                                        <option id="inputTratamiento2Qty" value="1">1</option>
                                        <option id="inputTratamiento2Qty" value="2">2</option>
                                        <option id="inputTratamiento2Qty" value="3">3</option>
                                        <option id="inputTratamiento2Qty" value="4">4</option>
                                        <option id="inputTratamiento2Qty" value="5">5</option>
                                        <option id="inputTratamiento2Qty" value="6">6</option>
                                        <option id="inputTratamiento2Qty" value="7">7</option>
                                        <option id="inputTratamiento2Qty" value="8">8</option>
                                        <option id="inputTratamiento2Qty" value="9">9</option>
                                        <option id="inputTratamiento2Qty" value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-8">
                                    <select class="form-control" id="inputProduct3Client" name="inputProduct3Client" style="width: 250px;">
                                        <option value="">Tratamiento 3</option>
                                        <?php
                        $query = $mysqli -> query ("SELECT * FROM products where Activo = 1");
                        while ($valores = mysqli_fetch_array($query)) {
                          echo '<option id="inputTratamiento3" value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                        }
                      ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" id="inputQty3Client" name="inputQty3Client" style="width: 100px;">
                                        <option id="inputTratamiento3Qty" value="">Qty</option>
                                        <option id="inputTratamiento3Qty" value="1">1</option>
                                        <option id="inputTratamiento3Qty" value="2">2</option>
                                        <option id="inputTratamiento3Qty" value="3">3</option>
                                        <option id="inputTratamiento3Qty" value="4">4</option>
                                        <option id="inputTratamiento3Qty" value="5">5</option>
                                        <option id="inputTratamiento3Qty" value="6">6</option>
                                        <option id="inputTratamiento3Qty" value="7">7</option>
                                        <option id="inputTratamiento3Qty" value="8">8</option>
                                        <option id="inputTratamiento3Qty" value="9">9</option>
                                        <option id="inputTratamiento3Qty" value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-8">
                                    <select class="form-control" id="inputProduct4Client" name="inputProduct4Client" style="width: 250px;">
                                        <option value="">Tratamiento 4</option>
                                        <?php
                        $query = $mysqli -> query ("SELECT * FROM products where Activo = 1");
                        while ($valores = mysqli_fetch_array($query)) {
                          echo '<option id="inputTratamiento4" value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                        }
                      ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" id="inputQty4Client" name="inputQty4Client" style="width: 100px;">
                                        <option id="inputTratamiento4Qty" value="">Qty</option>
                                        <option id="inputTratamiento4Qty" value="1">1</option>
                                        <option id="inputTratamiento4Qty" value="2">2</option>
                                        <option id="inputTratamiento4Qty" value="3">3</option>
                                        <option id="inputTratamiento4Qty" value="4">4</option>
                                        <option id="inputTratamiento4Qty" value="5">5</option>
                                        <option id="inputTratamiento4Qty" value="6">6</option>
                                        <option id="inputTratamiento4Qty" value="7">7</option>
                                        <option id="inputTratamiento4Qty" value="8">8</option>
                                        <option id="inputTratamiento4Qty" value="9">9</option>
                                        <option id="inputTratamiento4Qty" value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-8">
                                    <select class="form-control" id="inputProduct5Client" name="inputProduct5Client" style="width: 250px;">
                                        <option value="">Tratamiento 5</option>
                                        <?php
                        $query = $mysqli -> query ("SELECT * FROM products where Activo = 1");
                        while ($valores = mysqli_fetch_array($query)) {
                          echo '<option id="inputTratamiento5" value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                        }
                      ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" id="inputQty5Client" name="inputQty5Client" style="width: 100px;">
                                        <option id="inputTratamiento5Qty" value="">Qty</option>
                                        <option id="inputTratamiento5Qty" value="1">1</option>
                                        <option id="inputTratamiento5Qty" value="2">2</option>
                                        <option id="inputTratamiento5Qty" value="3">3</option>
                                        <option id="inputTratamiento5Qty" value="4">4</option>
                                        <option id="inputTratamiento5Qty" value="5">5</option>
                                        <option id="inputTratamiento5Qty" value="6">6</option>
                                        <option id="inputTratamiento5Qty" value="7">7</option>
                                        <option id="inputTratamiento5Qty" value="8">8</option>
                                        <option id="inputTratamiento5Qty" value="9">9</option>
                                        <option id="inputTratamiento5Qty" value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>