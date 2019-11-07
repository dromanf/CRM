<?php

$modalReport = '<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form class="form-horizontal" id="submitReportForm" action="./bots/bot-export-bd-orders.php" method="POST" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seleccione el rango de fechas a exportar</h5>
          </div>
          <div class="form-group">
                        <div class="form-label-group">
                            <input type="date" id="inputFechaMin" name="inputFechaMin" class="form-control" placeholder="Fecha inicial" required="required" autofocus="autofocus">
                            <label for="inputFechaMin">Fecha inicial</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="date" id="inputFechaMax" name="inputFechaMax" class="form-control" placeholder="Fecha final" required="required" autofocus="autofocus">
                            <label for="inputFechaMax">Fecha final</label>
                        </div>

        </div>
        <div class="modal-body">Seleccione "Descargar" a continuación para iniciar el proceso, tenga en cuenta que esto puede tardar algunos minutos.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <!--<a class="btn btn-primary" type="submit">Descargar</a>-->
          <button class="btn btn-primary btn-block" type="submit">Descargar</button>
        </div>
      </div>
      </form>
    </div>
  </div>';

  $modalReportITO = '<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form class="form-horizontal" id="submitReportForm" action="../bots/bot-export-bd-orders.php" method="POST" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seleccione el rango de fechas a exportar</h5>
          </div>
          <div class="form-group">
                        <div class="form-label-group">
                            <input type="date" id="inputFechaMin" name="inputFechaMin" class="form-control" placeholder="Fecha inicial" required="required" autofocus="autofocus">
                            <label for="inputFechaMin">Fecha inicial</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="date" id="inputFechaMax" name="inputFechaMax" class="form-control" placeholder="Fecha final" required="required" autofocus="autofocus">
                            <label for="inputFechaMax">Fecha final</label>
                        </div>

        </div>
        <div class="modal-body">Seleccione "Descargar" a continuación para iniciar el proceso, tenga en cuenta que esto puede tardar algunos minutos.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <!--<a class="btn btn-primary" type="submit">Descargar</a>-->
          <button class="btn btn-primary btn-block" type="submit">Descargar</button>
        </div>
      </div>
      </form>
    </div>
  </div>';


  ?>