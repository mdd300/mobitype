<!-- Content Wrapper. Contains page content -->

<script>$( function() {
        $( document ).tooltip();
    } );
</script>
<div class="content-wrapper" ng-controller="pedidos_control">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pedidos
        </h1>

    </section>

    <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">LISTA DE PEDIDOS</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 10px">N˚</th>
                                <th>Tarega</th>
                                <th>Progresso</th>
                                <th style="width: 40px">%</th>
                                <th style="width: 40px">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="pedido in pedidos">
                            <td>{{pedido.pedido_id}}</td>
                            <td>{{pedido.pedido_nome}}</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: {{pedido.total}}%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-green">{{pedido.total}}%</span></td>
                            <td style="cursor: pointer">
                                <a title="Visualizar" href="<?= base_url()?>Clientes/viewPage/?id={{pedido.pedido_id}}"><i class="fa fa-television"></i></a>
                                <a title="Listar demandas" id="popoverData" data-toggle="modal" data-target="#Modal-Pedidos" ng-click="modalDemandas($index)"><i class="fa fa-list"></i></a>
                            </td>

                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th style="width: 10px">N˚</th>
                            <th>Tarega</th>
                            <th>Progresso</th>
                            <th style="width: 40px">%</th>
                            <th style="width: 40px">Ações</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    </div>


    <style>
        .modal-backdrop {
            position: initial;
            z-index: 1040 !important;
        }
        .modal-dialog {
            z-index: 1100 !important;
        }
    </style>

    <!-- Modal -->
    <div id="Modal-Pedidos" class="modal fade" role="dialog">
        <div class="modal-dialog  modal-lg" style="z-index: 1111;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Demandas</h4>
                </div>
                <div class="modal-body" style="margin: 15px">
                    <div class="content table-responsive table-full-width">

                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>N˚ da demanda</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="demanda in pedidos[idDemandas].demandas">
                                <td>{{demanda.demanda_id}}</td>
                                <td>{{demanda.demanda_nome}}</td>
                                <td>{{demanda.demanda_valor}}%</td>
                                <td>
                                    <b ng-if="demanda.demanda_status == 2" style="color: green">Feito</b>
                                    <b ng-if="demanda.demanda_status == 1" style="color: red">Aguardando</b>

                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>N˚ da demanda</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Status</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>