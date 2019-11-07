<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form create products</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header" style="text-align: center;"><strong>Registro de Producto</strong></div>
            <div class="card-body">
            <form class="form-horizontal" id="submitUsertForm" action="../actions/action-create-product.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputProductName" name="inputProductName" class="form-control" placeholder="Nombre del producto" required="required" autofocus="autofocus">
                            <label for="inputProductName">Nombre del producto</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <select class="form-control" id="inputActiveProduct" name="inputActiveProduct" required="required">
                                <option value="">Producto Activo?</option>
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