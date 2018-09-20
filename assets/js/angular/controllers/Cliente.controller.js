angular.module('app_landing').controller('login_control', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.data = {
        "nome_cliente": "",
        "senha_cliente": ""
    }

    $scope.login = function () {

        if($scope.data.nome_cliente !== ""){
            if($scope.data.senha_cliente !== ""){


                $http({

                    method: 'POST',
                    url: "/home/login",
                    data: $.param({login: $scope.data}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                }).then(function (response) {

                    if(response.data === "true"){
                            window.location.href = "/home/sistema";
                    }else{

                    }

                })
            }
        }
    }
    
}]);


angular.module('app_landing').controller('pedidos_control', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.pedidos = [];
    $scope.idDemandas = 0;

    $http({

        method: 'POST',
        url: "/Clientes/getPed",
        data: $.param({}),
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

    $scope.modalDemandas = function (id) {
        $scope.idDemandas = id;
        console.log($scope.pedidos[id].demandas)
        $timeout(function () {
            $(function () {
                $('#example3').DataTable({
                    'paging'      : true,
                    'lengthChange': false,
                    'searching'   : false,
                    'ordering'    : true,
                    'info'        : false,
                    'autoWidth'   : false
                })
            })
        }, 200);
    }

}]);


angular.module('app_landing').controller('mob_control', ['$scope', '$http', function ($scope, $http) {

    $scope.data = {
        "nome_cliente": "",
        "senha_cliente": ""
    }

    $scope.login = function () {

        if($scope.data.nome_cliente !== ""){
            if($scope.data.senha_cliente !== ""){


                $http({

                    method: 'POST',
                    url: "/home/login2",
                    data: $.param({login: $scope.data}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                }).then(function (response) {

                    if(response.data === "true"){
                        window.location.href = "/home/admin";
                    }else{

                    }

                })
            }
        }
    }

}]);
