<?php
               $mysqli = new mysqli('localhost', 'root', '', 'prueba');
              ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form create user</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header" style="text-align: center;"><strong>Registro de Usuarios</strong></div>
            <div class="card-body">
            <form class="form-horizontal" id="submitUsertForm" action="../actions/action-create-user.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputUserName" name="inputUserName" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                            <label for="inputUserName">Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputUserPass" name="inputUserPass" class="form-control" placeholder="Password" required="required" autofocus="autofocus">
                            <label for="inputUserPass">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputNameUser" name="inputNameUser" class="form-control" placeholder="Nombre (s)" required="required" autofocus="autofocus">
                            <label for="inputNameUser">Nombre (s)</label>
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputLastnameUser" name="inputLastnameUser" class="form-control" placeholder="Apellido(s)" required="required" autofocus="autofocus">
                            <label for="inputLastnameUser">Apellido(s)</label>
                        </div>
                    </div>                 
                    <div class="form-group">
                        <div class="form-label-group">                          
                                
                                    <select class="form-control" name="inputCargo" id="inputCargo">
                                        <option value="">Cargo</option>
                                        <?php
                        $query = $mysqli -> query ("SELECT * FROM cargo where activo = 1");
                        while ($valores = mysqli_fetch_array($query)) {
                          echo '<option value="'.$valores['rol'].'">'.$valores['cargo'].'</option>';
                        }
                      ?>   
                                    </select>                
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <select class="form-control" id="inputActiveUser" name="inputActiveUser" required="required">
                                <option value="">Usuario activo?</option>
                                <option value="1">SI</option>
                                <option value="0">NO</option>
                            </select>
                            </div>
                            </div>
                    <button class="btn btn-primary btn-block" type="submit">Registrar</button>
                
            </div>
        </div>
    </div>
    </form>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>