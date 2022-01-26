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
            <div class="title thead text-light">Cadastrar Clientes</div>
            <div class="content">
                <div class="container-fluid">
                    <div class="form">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input type="text" class="form-control" name="nome" placeholder="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Telefone</label>
                                <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Placa do veículo</label>
                                <input type="text" class="form-control" name="placa" id="exampleFormControlInput1" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn-enviar" class="btn btn-primary">Cadastrar</button>
                            </div>
                                
                        </form>
                    </div>
                </div>
            </div>        
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">$("#telefone").mask("(00) 00000-0009");</script>
    <script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>