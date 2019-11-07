<?php
include ('../bots/bot-count-menu-second.php');
// Usado en index-table-(order)(user)(products).php

$navBar = ' <ul class="navbar-nav ml-auto ml-md-0">      
            <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>';

$menuAgenteITO = '  <ul class="sidebar navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                    </a>
                    </li> 
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Ventas</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown"> 
                    <h6 class="dropdown-header"><i class="fas fa-globe"></i> Ventas:</h6>   
                    <a class="dropdown-item" href="../forms/form-create-order.php"><i class="fas fa-folder-plus"></i> Cargar venta</a>  
                    <a class="dropdown-item" href="../views/index-table-order.php"><i class="fas fa-clone"></i> Mis Ventas</a>                        
                    <div class="dropdown-divider"></div>
                    </div>
                    </li>
                    </ul>';

$menuSupervisorITO = '  <ul class="sidebar navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="../index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        </a>
                        </li> 
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Ventas</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown"> 
                        <h6 class="dropdown-header"><i class="fas fa-globe"></i> Consolidado global:</h6>   
                        <a class="dropdown-item" href=".../views/index-table-order.php"><i class="fas fa-clone"></i> Ordenes totales</a>                        
                        <div class="dropdown-divider"></div>
                        </div>
                        </li>
                        </ul>';                       
                    
$menuVerificadorITO = ' <ul class="sidebar navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="../index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        </a>
                        </li> 
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Ventas</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown"> 
                        <h6 class="dropdown-header"><i class="fas fa-globe"></i> Listas:</h6>   
                        <a class="dropdown-item" href="../views/index-table-order-pent-verif.php"><i class="fas fa-clone"></i> '.$countCarga.' Pdte. Verificación</a>                        
                        <div class="dropdown-divider"></div>
                        </div>
                        </li>
                        </ul>';

$menuValidadorITO = '   <ul class="sidebar navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="../index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        </a>
                        </li> 
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Ventas</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown"> 
                        <h6 class="dropdown-header"><i class="fas fa-globe"></i> Listas:</h6>   
                        <a class="dropdown-item" href="../views/index-table-order-pent-valid.php"><i class="fas fa-clone"></i> '.$countVerif.' Pdte. Validación</a>                        
                        <div class="dropdown-divider"></div>
                        </div>
                        </li>
                        </ul>';

$menuErrITO = '     <ul class="sidebar navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                    </a>
                    </li> 
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Ventas</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown"> 
                    <h6 class="dropdown-header"><i class="fas fa-globe"></i> Listas:</h6>   
                    <a class="dropdown-item" href="../views/index-table-order-pent-shipp.php"><i class="fas fa-clone"></i> '.$countValid.' Pdte. Envio</a>                        
                    <a class="dropdown-item" href="../views/index-table-order-pent-deliv.php"><i class="fas fa-clone"></i> '.$countShipp.' Pdte. Entrega</a>                        
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../views/index-table-order-pent-payment.php"><i class="fas fa-clone"></i> '.$countPaymentFinal.' Pdte. de pago</a>                        
                    </div>
                    </li>
                    </ul>';

$menuGerenteITO = ' <ul class="sidebar navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                    </a>
                    </li> 
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Ventas</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header"><i class="fas fa-globe"></i> Consolidado global:</h6>
                    <a class="dropdown-item" href="../views/index-table-order.php"><i class="fas fa-clone"></i> Ordenes totales</a>
                    <a class="dropdown-item" href="../views/index-table-order-cancel.php"><i class="fas fa-clone"></i> '.$countCancel.' Ordenes canceladas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../views/index-table-order-pent-verif.php"><i class="fas fa-clone"></i> '.$countCarga.' Pdte. Verificación</a>                        
                    <a class="dropdown-item" href="../views/index-table-order-pent-valid.php"><i class="fas fa-clone"></i> '.$countVerif.' Pdte. Validación</a>                        
                    <a class="dropdown-item" href="../views/index-table-order-pent-shipp.php"><i class="fas fa-clone"></i> '.$countValid.' Pdte. Envio</a>                        
                    <a class="dropdown-item" href="../views/index-table-order-pent-deliv.php"><i class="fas fa-clone"></i> '.$countShipp.' Pdte. Entrega</a> 
                    <a class="dropdown-item" href="../views/index-table-order-pent-liquid.php"><i class="fas fa-clone"></i> '.$countDeliv.' Pdte. Liquidar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../views/index-table-order-pent-payment.php"><i class="fas fa-clone"></i> '.$countPaymentFinal.' Pdte. de pago</a>                        
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fab fa-black-tie"></i>
                    <span>Administrador</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header"><i class="fas fa-male"></i> Users:</h6>
                    <a class="dropdown-item" href="../views/index-table-user.php"><i class="fas fa-file-alt"></i> Listar usuarios</a>  
                    </div>
                    </li>
                    </ul>';

$menuAdministradorITO = '   <ul class="sidebar navbar-nav">
                            <li class="nav-item active">
                            <a class="nav-link" href="../index.php">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                            </a>
                            </li> 
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-hand-holding-usd"></i>
                            <span>Ventas</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <h6 class="dropdown-header"><i class="fas fa-globe"></i> Consolidado global:</h6> 
                            <a class="dropdown-item" href="../views/index-table-order.php"><i class="fas fa-clone"></i> Ordenes totales</a>
                            <a class="dropdown-item" href="../views/index-table-order-cancel.php"><i class="fas fa-clone"></i> '.$countCancel.' Ordenes canceladas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../views/index-table-order-pent-verif.php"><i class="fas fa-clone"></i> '.$countCarga.' Pdte. Verificación</a>                        
                            <a class="dropdown-item" href="../views/index-table-order-pent-valid.php"><i class="fas fa-clone"></i> '.$countVerif.' Pdte. Validación</a>                        
                            <a class="dropdown-item" href="../views/index-table-order-pent-shipp.php"><i class="fas fa-clone"></i> '.$countValid.' Pdte. Envio</a>                        
                            <a class="dropdown-item" href="../views/index-table-order-pent-deliv.php"><i class="fas fa-clone"></i> '.$countShipp.' Pdte. Entrega</a> 
                            <a class="dropdown-item" href="../views/index-table-order-pent-liquid.php"><i class="fas fa-clone"></i> '.$countDeliv.' Pdte. Liquidar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../views/index-table-order-pent-payment.php"><i class="fas fa-clone"></i> '.$countPaymentFinal.' Pdte. de pago</a>                        
                            </div>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fab fa-black-tie"></i>
                            <span>Administrador</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <h6 class="dropdown-header"><i class="fas fa-archive"></i> Reportes:</h6>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal"><i class="fas fa-download"></i> Corte entre fechas</a>                       
                            <h6 class="dropdown-header"><i class="fas fa-male"></i> Users:</h6>
                            <a class="dropdown-item" href="../views/index-table-user.php"><i class="fas fa-file-alt"></i> Listar usuarios</a>  
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header"><i class="fas fa-prescription-bottle"></i> Productos:</h6>
                            <a class="dropdown-item" href="../views/index-table-products.php"><i class="fas fa-file-alt"></i> Listar Productos</a>
                            </div>
                            </li>
                            </ul>'; 
 ?>                 