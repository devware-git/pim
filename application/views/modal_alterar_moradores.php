<div class="modal fade <?php echo @$modal_alterar_moradores ;?>" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../cadastro_moradores/alterar_moradores','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Nome:</label>
                             <input type="text" class="form-control" id="inputnome" name="nome" value="<?php echo set_value('nome'); ?>">
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Sobrenome:</label>
                             <input type="text" class="form-control" id="inputsobrenome" name="sobrenome" value="<?php echo set_value('sobrenome'); ?>">
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Apartamento:</label>
                             <input type="text" class="form-control" id="inputapartamento" name="apartamento" value="<?php echo set_value('apartamento'); ?>">
                         </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
                </form>
        </div>
    </div>
</div>