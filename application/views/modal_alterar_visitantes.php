<div class="modal fade <?php echo @$modal_alterar_visitantes ;?>" id="update_modal_visitantes" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../cadastro_visitantes/alterar_visitantes','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Nome:</label>
                             <input type="text" class="form-control" id="inputnome" name="nome" value="<?php echo set_value('nome'); ?>">
                         </div>
                         <div class="form-group">
                                <label for="recipient-name" class="col-form-label">CPF:</label>
                                <input type="text" class="form-control" id="inputcpf" name="cpf" value="<?php echo set_value('cpf'); ?>" placeholder="CPF">
                        </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Apartamento Visitado:</label>
                             <input type="text" class="form-control" id="inputapartamento_visitado" name="apartamento_visitado" value="<?php echo set_value('apartamento_visitado'); ?>">
                         </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
                </form>
        </div>
    </div>
</div>