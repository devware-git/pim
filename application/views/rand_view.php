<meta http-equiv="refresh" content="30";>
<div class="container">
<?php 
  if(isset($val_rand)){
    foreach ($val_rand as $row) { ?>
    <h2> <?php echo $row->val; ?> </h2>
    <?php }}?>
    <form id="idForm" method="POST">
        <input id="rand" name="rand" type="hidden" value=" <?php echo rand(1,100); ?> "/>
        <button class="btn btn-primary" type="button" style="display:none;" id="enviar">Enviar</button>
    </form>

    <div class="container">
         <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
              </div>
              <hr>
            </div>
        </div>
    </div>
</div>