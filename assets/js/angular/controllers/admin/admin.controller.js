angular.module('app_landing').controller('users_control', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.clientes = [];

    $http({

        method: 'POST',
        url: "/clientes/listCli",
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

        $scope.clientes = response.data;
        $timeout(function () {
            $(function () {
                $('#example2').DataTable({
                    'paging'      : true,
                    'lengthChange': false,
                    'searching'   : false,
                    'ordering'    : true,
                    'info'        : false,
                    'autoWidth'   : false
                })
            })
        }, 200);

    })

}]);
angular.module('app_landing').controller('addUsers_control', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.cliente = {
        "cliente_nome": "",
        "cliente_email": "",
        "cliente_senha": ""
    }

    $scope.senhaConfir = "";
    $scope.senhaError = false;



    $scope.sendDataCliente = function () {
        if($scope.cliente.cliente_nome !== ""){
            if($scope.cliente.cliente_email !== "") {
                if ($scope.cliente.cliente_senha !== "") {
                    if ($scope.cliente.cliente_senha == $scope.senhaConfir) {
                        $http({

                            method: 'POST',
                            url: "/clientes/add",
                            data: $.param({add: $scope.cliente}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                        }).then(function (response) {
                            $timeout(function () {
                                window.location.href = "/home/admin";
                            }, 2000);
                        })
                    } else {
                        $scope.senhaError = true;

                    }
                }
            }
        }
    }
}]);
angular.module('app_landing').controller('addPedido_control', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.pedido = {
        "pedido_nome": "",
        "pedido_data_entrega": "",
        "pedido_link": "",
        "pedido_demandas": [
            {
            "demanda_nome":"",
            "demanda_valor": 0,
            "demanda_status": 1
        }]
    };

    $scope.moreDemanda = function () {
        $scope.pedido.pedido_demandas.push({
            "demanda_nome":"",
            "demanda_valor": 0,
            "demanda_status": 1
        })
    }

    $scope.sendDataPedido = function () {
        if($scope.pedido.pedido_nome !== ""){
            if($scope.pedido.pedido_link !== "") {
                        $http({

                            method: 'POST',
                            url: "/pedido/add",
                            data: $.param({pedido: $scope.pedido, cliente: $(".id_cliente").val()}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                        }).then(function (response) {
                            $timeout(function () {
                                window.location.href = "/pedido";
                            }, 2000);
                        })

            }
        }
    }

}]);
angular.module('app_landing').controller('pedidos_control', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.pedidos = [];

    $http({

        method: 'POST',
        url: "/pedido/getPed",
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

        $scope.pedidos = response.data;
        $timeout(function () {
            $(function () {
                $('#example2').DataTable({
                    'paging'      : true,
                    'lengthChange': false,
                    'searching'   : false,
                    'ordering'    : true,
                    'info'        : false,
                    'autoWidth'   : false
                })
            })
        }, 200);

    })

}]);

