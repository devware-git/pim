        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Cadastro De Fornecedores</h1>
          <p class="mb-4">Nesta Pagina Você Pode Visualizar Todos Os Fornecedores Podendo Cadastrar, Exluir e Alterar !</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabela de Fornecedores Cadastrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Empresa</th>
                      <th>CNPJ</th>
                      <th>Telefone</th>
                      <th>Responsavel</th>
                      <th>Data</th>
                      <th>Hora</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>id</th>
                      <th>Empresa</th>
                      <th>CNPJ</th>
                      <th>Telefone</th>
                      <th>Responsavel</th>
                      <th>Data</th>
                      <th>Hora</th>
                      <th>Ações</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                  <?php if ( isset($user_data) ) {
                          foreach ($user_data as $row) { ?>
                          <tr>
                            <td><?php echo $row->id?></td>
                            <td><?php echo $row->empresa?></td>
                            <td><?php echo $row->cnpj?></td>
                            <td><?php echo $row->telefone?></td>
                            <td><?php echo $row->responsavel?></td>
                            <td><?php echo $row->data?></td>
                            <td><?php echo $row->hora?></td>
                            <td> 
                              <button class="btn btn-outline-danger btn-remover" data-toggle="modal" data-target="#remove_confirmation_modal_fornecedores" data-id="<?php echo $row->id;?>"> <i class="fas fa-trash-alt"></i> </button> 
                              <button type="button" class="btn btn-outline-primary btn-alterar" data-toggle="modal" data-user='<?php echo json_encode($row);?>'> <i class="fas fa-pencil-alt"></i> </button>
                            </td>
                          </tr>
                    <?php }
                        }?>
                    
                  </tbody>
                </table>
                <div align="center">
                  <button type="button" class="btn btn-outline-success mt-2" data-toggle="modal" data-target="#create_modal"> Cadastrar Novo </button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="create-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <?php echo form_open('../cadastro_fornecedores','class="needs-validation" novalidate') ?>
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Empresa:</label>
                          <input type="text" class="form-control" id="inputempresa" name="empresa" value="<?php echo set_value('empresa'); ?>" placeholder="Empresa">
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
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    </form>
            </div>
        </div>
</div>
