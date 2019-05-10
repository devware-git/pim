<div class="container-fluid">
    <div>
        <h3>Ordens de Serviços</h3><br>
    </div>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Nº Os</th>
        <th scope="col">Cliente</th>
        <th scope="col">CPF / CNPJ</th>
        <th scope="col">Telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php if(isset($user_data)){
            foreach ($user_data as $row) {?>
                <tr>
                    <th scope="row"><?php echo $row->id?></th>
                    <td><?php echo $row->cliente?></td>
                    <td><?php echo $row->cpfcnpj?></td>
                    <td><?php echo $row->telefone?></td>
                    <td>
                        <form action="<?php echo base_url('ordemServico');?>" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row->id?>"/>
                            <button type="submit" class="btn btn-outline-primary"><i class="far fa-eye"></i></button>
                        </form>
                    </td>
                </tr>
            <?php }}?>
    </tbody>
    </table>
</div>