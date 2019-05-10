    <div class="container" style="color:black !important;">
        <div id="printable">
            <?php if(isset($user_data)){
                foreach ($user_data as $row) {?>
            <div class="border page" style="margin-top: 50px;">
                <h2 class="text-center mt-3 mb-3">Sqs 109 Bloco A</h2><br><br>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="3" style="color:black !important;">SERVIÇO DE MANUTENÇÃO EM CONDOMÍNIO</th>
                            <th colspan="4" style="color:black !important;">OS Nº : <?php echo $row->id?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="1" class="text-center" style="color:black !important;">Cliente:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->cliente?></td>
                            <td colspan="1" class="text-center" style="color:black !important;">Telefones:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->telefone?></td>
                            
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center"  style="color:black !important;">Endereço:</td>
                            <td colspan="3"  style="color:black !important;"><?php echo $row->endereco?></td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center" style="color:black !important;">Bairro:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->bairro?></td>
                            <td colspan="1" class="text-center" style="color:black !important;">Cidade:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->cidade?></td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center" style="color:black !important;">CPF / CNPJ:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->cpfcnpj?></td>
                            <td colspan="1" class="text-center" style="color:black !important;">RG / IE:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->rgie?></td>
                        </tr>
                        <tr>
                            <th class="text-center"colspan="4" style="color:black !important;">Defeito / Reclamação</th>
                        </tr>
                        <tr>
                            <td colspan="4" style="color:black !important;"><?php echo $row->defeito?></td>
                        </tr>
                        <tr>
                            <th class="text-center" colspan="4" style="color:black !important;">SERVIÇOS EXECUTADOS NO LOCAL</th>
                        </tr>
                        <tr>
                            <td colspan="4" style="color:black !important;"><?php echo $row->servico?></td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center" style="color:black !important;">Garantia:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->garantia?></td>
                            <td colspan="1" class="text-center"style="color:black !important;">Próxima Revisão:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->proxrevi?></td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center" style="color:black !important;">Mão de Obra R$:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->maobra?></td>
                            <td colspan="1" class="text-center" style="color:black !important;">Peças R$:</td>
                            <td colspan="1" style="color:black !important;"><?php echo $row->peca?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center" style="color:black !important;">Total R$:</td>
                            <td colspan="3" style="color:black !important;"><?php echo $row->total?></td>
                        </tr>
                        <tr>
                            <td colspan="1" style="color:black !important;"><hr class="mt-5">Cliente</td>
                            <td colspan="1" style="color:black !important;"><hr class="mt-5">Técnico</td>
                            <td colspan="1" class="text-center" style="color:black !important;"><p style="margin-top:35px;">Data:</p></td>
                            <td colspan="1" style="color:black !important;"><p style="margin-top:35px;"><?php echo $row->data?></p></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
                <?php }}?>
            <div class="text-center mt-5">
                <button onclick="myFunction();" class="btn btn-outline-primary">Imprimir</button>
            </div>
    </div>

    <script>
        function myFunction() {
            window.print();
        }
    </script>