<?php

include_once ('../actions/db-connect.php');

                        $sqlA = "SELECT * FROM `sales` WHERE status = 'Cargada'";
                        $queryA = $connect->query($sqlA);
                        $countCarga = $queryA->num_rows;
                        
                        $sqlB = "SELECT * FROM `sales` WHERE status = 'Verificada'";
                        $queryB = $connect->query($sqlB);
                        $countVerif = $queryB->num_rows;
                        
                        $sqlC = "SELECT * FROM `sales` WHERE status = 'Validada'";
                        $queryC = $connect->query($sqlC);
                        $countValid = $queryC->num_rows;
                        
                        $sqlD = "SELECT * FROM `sales` WHERE status = 'Enviada'";
                        $queryD = $connect->query($sqlD);
                        $countShipp = $queryD->num_rows;

                        $sqlE = "SELECT * FROM `sales` WHERE status = 'Entregada'";
                        $queryE = $connect->query($sqlE);
                        $countDeliv = $queryE->num_rows;

                        $sqlF = "SELECT * FROM `sales` WHERE status = 'Liquidada'";
                        $queryF = $connect->query($sqlF);
                        $countLiqui = $queryF->num_rows;

                        $sqlG = "SELECT * FROM `sales` WHERE status = 'Cancelada'";
                        $queryG = $connect->query($sqlG);
                        $countCancel = $queryG->num_rows;

                        //////////////////////////////////////////////////////////////////////

                        $sqlHH = "SELECT * FROM `sales` WHERE paid = 0 AND status = 'Enviada'";
                        $queryHH = $connect->query($sqlHH);
                        $countSalesPayment1 = $queryHH->num_rows;

                        $sqlHI = "SELECT * FROM `sales` WHERE paid = 0 AND status = 'Entregada'";
                        $queryHI = $connect->query($sqlHI);
                        $countSalesPayment2 = $queryHI->num_rows;

                        $countPaymentFinal = $countSalesPayment1 + $countSalesPayment2;

                        //////////////////////////////////////////////////////////////////////
?> 