<?php

include_once ('./actions/db-connect.php');

                        $sqlA = "SELECT * FROM `sales`";
                        $queryA = $connect->query($sqlA);
                        $countSalesUp = $queryA->num_rows;
                        
                        $sqlB = "SELECT * FROM `sales` where status = 'Verificada'";
                        $queryB = $connect->query($sqlB);
                        $countSalesVer = $queryB->num_rows;
                        
                        $sqlC = "SELECT * FROM `sales` where status = 'Validada'";
                        $queryC = $connect->query($sqlC);
                        $countSalesVal = $queryC->num_rows;
                        
                        $sqlD = "SELECT * FROM `sales` where status = 'Cancelada'";
                        $queryD = $connect->query($sqlD);
                        $countSalesCancel = $queryD->num_rows;

?> 