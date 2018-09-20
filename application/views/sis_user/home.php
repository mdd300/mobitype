<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" ng-controller="users_control">
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
                        <h3 class="box-title">LISTA DE CLIENTES</h3>
                        <div class="float-right"><a href="<?=base_url()?>clientes"><button class="btn-config "><i class="fa fa-plus" style="margin-right: 5px"></i>Adicionar</button></a></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="cliente in clientes">
                                <td>{{cliente.cliente_id}}</td>
                                <td>{{cliente.cliente_nome}}</td>
                                <td>{{cliente.cliente_email}}</td>
                                <td>{{cliente.cliente_data}}</td>
                                <td style="cursor: pointer; color:  #ff5353"><a href="<?= base_url()?>pedido/create/?id={{cliente.cliente_id}}"><i class="fa fa-edit"></i></a></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Data</th>

                                <th>Ações</th>
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
