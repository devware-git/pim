<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="dialog">
    <div class="modal-content">
      <div class="modal-header bg-<?php echo $resposta['class'];?>">
        <h5 class="modal-title text-white" id="exampleModalLabel"><?php echo $resposta['title']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if(isset($resposta['message'])) {?>
                <?php echo $resposta['message'] ;?>
            <?php }?>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok!</button>
      </div>
    </div>
  </div>
</div>
</div>