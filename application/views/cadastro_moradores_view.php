        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Cadastro De Moradores</h1>
          <p class="mb-4">Nesta Pagina Você Pode Visualizar Todos Os Moradores Podendo Cadastrar, Exluir e Alterar !</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabela de Moradores Cadastrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Nome</th>
                      <th>Sobrenome</th>
                      <th>Apartamento</th> 
                      <th>Data</th>
                      <th>Hora</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>id</th>
                      <th>Nome</th>
                      <th>Sobrenome</th>
                      <th>Apartamento</th> 
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
                            <td><?php echo $row->nome?></td>
                            <td><?php echo $row->sobrenome?></td>
                            <td><?php echo $row->apartamento?></td>
                            <td><?php echo $row->data?></td>
                            <td><?php echo $row->hora?></td>
                            <td> 
                              <button class="btn btn-outline-danger btn-remover" data-toggle="modal" data-target="#remove_confirmation_modal" data-id="<?php echo $row->id;?>"> <i class="fas fa-trash-alt"></i> </button> 
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
                  <?php echo form_open('../cadastro_moradores','class="needs-validation" novalidate') ?>
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="innome" name="nome" value="<?php echo set_value('nome'); ?>" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sobrenome:</label>
                                <input type="text" class="form-control" id="insobrenome" name="sobrenome" value="<?php echo set_value('sobrenome'); ?>" placeholder="Sobrenome" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Apartamento:</label>
                                <input type="text" class="form-control" id="inapartamento" name="apartamento" value="<?php echo set_value('apartamento'); ?>" placeholder="Apartamento" >
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
