
<div id="main-content">
    <div id="header">
        <div class="header-right float-right">
            <i class="ion-ios-people"></i>
        </div>
    </div>

    <div id="page-container">
        <div class="card">
            <div class="title">Clientes</div>
                <div class="header-left float-left">
                    <input id="myInput" type="text" name="placa" placeholder="Buscar usuário" onkeyup="buscarUsuario()">
                </div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <table class="table" id="dtSearch">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">CPF</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Placa</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="myUL">
                                
                                    <?php if($cadastros): ?> 
                                        <?php foreach($cadastros as $clientes): ?>
                                            <tr>
                                                <td><?php echo $clientes->nome; ?></td>
                                                <td><?php echo $clientes->cpf; ?></td>
                                                <td><?php echo $clientes->telefone; ?></td>
                                                <td><b><?php echo $clientes->placa_do_carro; ?></b></td>
                                                <td><button class="btn btn-info" id="consultar" data-toggle="modal" data-target="#exampleModalLong<?php echo $clientes->id; ?>">Consultar</button></td>
                                                <td><?php echo anchor('editar/' .$clientes->id, 'Editar', ['class' => 'btn btn-success']) ?></td>
                                                <td><?php echo anchor('apagar/' .$clientes->id, 'Apagar', ['class' => 'btn btn-danger']) ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>

<!-- Modal Consultar -->
<?php if($cadastros): ?>
        <?php foreach($cadastros as $clientes): ?>
            <div class="modal fade" id="exampleModalLong<?php echo $clientes->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Dados do cliente</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-info">
                        <div class="info">
                            <label>Nome</label>
                            <p><?php echo $clientes->nome; ?></p>
                        </div>
                    </div>
                    <div class="modal-info">
                        <label>CPF</label>
                        <p><?php echo $clientes->cpf; ?></p>
                    </div>
                    <div class="modal-info">
                        <label>Placa do veículo</label>
                        <p><?php echo $clientes->placa_do_carro; ?></p>
                    </div>
                    <div class="modal-info">
                        <label>Telefone</label>
                        <p><?php echo $clientes->telefone; ?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
                </div>
            </div>
            </div>
        <?php endforeach; ?> 
<?php endif; ?>


<script type="text/javascript" src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
