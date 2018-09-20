<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" ng-controller="addPedido_control">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pedidos
        </h1>

    </section>

    <input style="display: none" value="<?=$id?>" class="id_cliente">

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">ADICIONAR PEDIDO</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row center-x">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputNome3" class="col-sm-2 control-label" style="margin-bottom: 10px">Nome</label>

                                    <div class="col-sm-10">
                                        <input type="text" ng-model="pedido.pedido_nome" class="form-control" id="inputNome3" placeholder="Digite o Nome" required style="margin-bottom: 10px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Link</label>

                                    <div class="col-sm-10">
                                        <input type="text" ng-model="pedido.pedido_link" class="form-control" id="inputEmail3" placeholder="Digite o Link" required style="margin-bottom: 10px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Data de entrega</label>

                                    <div class="col-sm-8">
                                        <input type="text" ng-model="pedido.pedido_data_entrega"  class="form-control dataPedido" id="inputEmail3" placeholder="Digite a data de entrega" required style="margin-bottom: 10px">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <hr>
                        <div class="col-md-12">
                            <h3>Demandas</h3>
                            <div class="row center">
                                <div class="col-md-10">
                                    <div ng-repeat="demanda in pedido.pedido_demandas">

                                        <div class="form-group">
                                            <label for="inputnome" class="col-sm-2 control-label">Nome</label>

                                            <div class="col-sm-10">
                                                <input type="text" ng-model="demanda.demanda_nome" class="form-control" id="inputnome" placeholder="Digite o nome da demanda" required style="margin-bottom: 10px">
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 20px">
                                            <label for="inputval3"  class="col-sm-3 control-label">Valor da demanda</label>

                                            <div class="col-sm-5">
                                                <input type="number" ng-model="demanda.demanda_valor" class="form-control" id="inputval3" placeholder="Digite o valor da demanda" required >
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-5">
                                            <hr style="width: 80%; padding: 20px 0px">
                                        </div>
                                        </div>
                                    <div class="form-group">
                                        <div class="col-md-12 center-x" >
                                            <button class="btn-config-2" ng-click="moreDemanda()">Adicionar mais</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-info pull-right" ng-click="sendDataPedido()">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

        <script src="<?=base_url()?>assets/js/jquery.mask.min.js"></script>
        <script>
            $(function(){
                $(".dataPedido").mask("99/99/9999");
            });
        </script>