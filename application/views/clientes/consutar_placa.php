
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
                    <form method="post" action="<?php echo base_url('/clientes/consultarPlaca'); ?>">
                    <input id="myInput" type="text" name="placa" placeholder="Buscar placa">
                </form>
            </div>
            <div class="content">
                <div class="container-fluid">
                <div class="card">
                    <table class="table">
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
                        
                            <?php if($dados) { 
                                        foreach($dados as $clientes) { ?>
                                            <tr>
                                                <td><?php echo $clientes->nome; ?></td>
                                                <td><?php echo $clientes->cpf; ?></td>
                                                <td><?php echo $clientes->telefone; ?></td>
                                                <td><?php echo $clientes->placa_do_carro; ?></td>
                                                <td><button class="btn btn-info" id="consultar" data-toggle="modal" data-target="#exampleModalLong<?php echo $clientes->id; ?>">Consultar</button></td>
                                                <td><?php echo anchor('editar/' .$clientes->id, 'Editar', ['class' => 'btn btn-success']) ?></td>
                                                <td><?php echo anchor('apagar/' .$clientes->id, 'Apagar', ['class' => 'btn btn-danger']) ?></td>
                                            </tr>
                                  <?php } 
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>        
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
