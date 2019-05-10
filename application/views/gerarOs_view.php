    <div class="container" style="color:black !important;">
        <form action="<?php echo base_url('gerarOs');?>" method="POST">
            <div class="border">
                <h2 class="text-center mt-3 mb-3">Sqs 109 Bloco A</h2>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="3" style="color:black !important;">SERVIÇO DE MANUTENÇÃO EM CONDOMÍNIO</th>
                            <th colspan="4" style="color:black !important;">OS Nº :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="1" style="color:black !important;">Cliente:</td>
                            <td colspan="1" style="color:black !important;"> 
                                <div class="col-12">
                                    <input type="text" name="cliente" class="form-control" value="<?php echo set_value('cliente');?>" placeholder="Cliente" required/>
                                </div>
                            </td>
                            <td colspan="1" style="color:black !important;">Telefones:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="telefone" class="form-control" value="<?php echo set_value('telefone');?>" placeholder="Telefones" required/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" style="color:black !important;">Endereço:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="endereco" class="form-control" value="<?php echo set_value('endereco');?>" placeholder="Endereço" required/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" style="color:black !important;">Bairro:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="bairro" class="form-control" value="<?php echo set_value('bairro');?>" placeholder="Bairro" required/>
                                </div>
                            </td>
                            <td colspan="1" style="color:black !important;">Cidade:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="cidade" class="form-control" value="<?php echo set_value('cidade');?>" placeholder="Cidade" required/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" style="color:black !important;">CPF / CNPJ:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="cpfcnpj" class="form-control" value="<?php echo set_value('cpfcnpj');?>" placeholder="CPF / CNPJ" required/>
                                </div>
                            </td>
                            <td colspan="1" style="color:black !important;">RG / IE:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="rgie" class="form-control" value="<?php echo set_value('rgie');?>" placeholder="RG / IE" required/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center"colspan="4" style="color:black !important;">Defeito / Reclamação</th>
                        </tr>
                        <tr>
                            <td colspan="4"> 
                                <div class="col-12">
                                    <textarea class="form-control" name="defeito" id="exampleFormControlTextarea1" value="<?php echo set_value('defeito');?>" placeholder="Defeito / Reclamação" rows="2" required></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center"colspan="4" style="color:black !important;">SERVIÇOS EXECUTADOS NO LOCAL</th>
                        </tr>
                        <tr>
                            <td colspan="4"> 
                                <div class="col-12">
                                    <textarea class="form-control" name="servico" id="exampleFormControlTextarea1" value="<?php echo set_value('servico');?>" placeholder="SERVIÇOS EXECUTADOS NO LOCAL" rows="4" required></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" style="color:black !important;">Garantia:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="garantia" class="form-control" value="<?php echo set_value('garantia');?>" placeholder="Garantia" required/>
                                </div>
                            </td>
                            <td colspan="1" style="color:black !important;">Próxima Revisão:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="proxrevi" class="form-control" value="<?php echo set_value('proxrevi');?>" placeholder="Proxima Revisão" required/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" style="color:black !important;">Mão de Obra R$:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="maobra" class="form-control" value="<?php echo set_value('maobra');?>" placeholder="Mão de Obra R$" required/>
                                </div>
                            </td>
                            <td colspan="1" style="color:black !important;">Peças R$:</td>
                            <td colspan="1"> 
                                <div class="col-12">
                                    <input type="text" name="peca" class="form-control" value="<?php echo set_value('peca');?>" placeholder="Peças R$" required/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color:black !important;">Total R$:</td>
                            <td colspan="4"> 
                                <div class="col-12">
                                    <input type="text" name="total" class="form-control" value="<?php echo set_value('total');?>" placeholder="Total R$" required/>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-outline-primary"> Gerar OS</button>
            </div>
        </form>
    </div>