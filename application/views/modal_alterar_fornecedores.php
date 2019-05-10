<div class="modal fade <?php echo @$modal_alterar_fornecedores ;?>" id="update_modal_fornecedores" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../cadastro_fornecedores/alterar_fornecedores','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Empresa:</label>
                        <input type="text" class="form-control" id="inputempresa" name="empresa" value="<?php echo set_value('empresa'); ?>">
                    </div>
                    <div class="form-group">
                          <label for="recipient-name" class="col-form-label">CNPJ:</label>
                          <input type="text" class="form-control" id="inputcnpj" name="cnpj" value="<?php echo set_value('cnpj'); ?>" placeholder="CNPJ">
                      </div>
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Telefone:</label>
                          <input type="text" class="form-control" id="inputtelefone" name="telefone" value="<?php echo set_value('telefone'); ?>" placeholder="Telefone">
                      </div>
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Responsavel:</label>
                          <input type="text" class="form-control" id="inputresponsavel" name="responsavel" value="<?php echo set_value('responsavel'); ?>" placeholder="Responsavel">
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
                </form>
        </div>
    </div>
</div>