<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" ng-controller="addUsers_control">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clientes
        </h1>

    </section>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">ADICIONAR CLIENTES</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row center-x">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputNome3" class="col-sm-2 control-label" style="margin-bottom: 10px">Nome</label>

                                <div class="col-sm-10">
                                    <input type="text" ng-model="cliente.cliente_nome" class="form-control" id="inputNome3" placeholder="Digite o Nome" required style="margin-bottom: 10px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" ng-model="cliente.cliente_email" class="form-control" id="inputEmail3" placeholder="Digite o E-mail" required style="margin-bottom: 10px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>

                                <div class="col-sm-10">
                                    <input type="password" ng-model="cliente.cliente_senha" class="form-control" id="inputPassword3" placeholder="Digite a senha" required style="margin-bottom: 10px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-2 control-label">Confirmar a senha</label>

                                <div class="col-sm-10">
                                    <input type="password" ng-class="{'error-input': senhaError}" class="form-control" ng-model="senhaConfir" id="inputPassword3" placeholder="Digite novamente a senha" required style="margin-bottom: 10px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                    <div class="box-footer">
                        <button class="btn btn-info pull-right" ng-click="sendDataCliente()">Cadastrar</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>