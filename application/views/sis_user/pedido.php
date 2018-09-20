<!-- Content Wrapper. Contains page content -->
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
                                <td style="cursor: pointer"><a><i class="fa fa-television"></i></a></td>
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
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
