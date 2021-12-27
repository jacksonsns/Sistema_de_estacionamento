    <?php
        foreach($dados as $dado) {
    ?>

    <div id="main-content">
        <div id="header">
            <div class="header-left float-left">
                <i id="toggle-left-menu" class="ion-android-menu"></i>
            </div>
            <div class="header-right float-right">
                <i class="ion-ios-people"></i>
            </div>
        </div>

        <div id="page-container">
            <div class="card">
                <div class="title thead text-light">Editar dados</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="form">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="nome" value="<?php echo $dado->nome; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">CPF</label>
                                    <input type="text" id="cpf" class="form-control" name="cpf" placeholder="000.000.000-00" value="<?php echo $dado->cpf; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telefone</label>
                                    <input type="text" id="telefone" class="form-control" name="telefone"  placeholder="(00) 00000-0000" value="<?php echo $dado->telefone; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Placa do veículo</label>
                                    <input type="text" class="form-control" name="placa" id="placa" value="<?php echo $dado->placa_do_carro; ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="btn-enviar" class="btn btn-primary">Salvar</button>
                                </div>
                                    
                            </form>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <?php } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">$("#telefone").mask("(00) 00000-0009");</script>
    <script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>