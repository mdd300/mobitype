angular.module('app_landing').controller('landing_ctrl', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {


  $scope.cadastro = {
      "nome_cliente": "",
      "email_cliente": "",
      "telefone_cliente": ""
  }

    $scope.error = {
        "nome_cliente": false,
        "email_cliente": false,
        "telefone_cliente": false
    }

    $( window ).resize(function() {
        var windowWidth = $(window).width();

        if(windowWidth < 941) {
            $("#inputID").focus(function () {
                $("#footer").hide();
                $("#footer2").hide();

            });

            $("#inputID").focusout(function () {
                $("#footer").show();
                $("#footer2").show();

            });

            $("#inputID1").focus(function () {
                $("#footer").hide();
                $("#footer2").hide();

            });

            $("#inputID1").focusout(function () {
                $("#footer").show();
                $("#footer2").show();

            });

            $("#txttelefone").focus(function () {
                $("#footer").hide();
                $("#footer2").hide();

            });

            $("#txttelefone").focusout(function () {
                $("#footer").show();
                $("#footer2").show();

            });
        }
    });
        var windowWidth = $(window).width();

    if(windowWidth < 941) {
        $("#inputID").focus(function () {
            $("#footer").hide();
            $("#footer2").hide();

        });

        $("#inputID").focusout(function () {
            $("#footer").show();
            $("#footer2").show();

        });

        $("#inputID1").focus(function () {
            $("#footer").hide();
            $("#footer2").hide();

        });

        $("#inputID1").focusout(function () {
            $("#footer").show();
            $("#footer2").show();

        });

        $("#txttelefone").focus(function () {
            $("#footer").hide();
            $("#footer2").hide();

        });

        $("#txttelefone").focusout(function () {
            $("#footer").show();
            $("#footer2").show();

        });
    }
    $scope.loader_send = false;


    $scope.enviar = function () {

      if($scope.cadastro.nome_cliente != ""){
        if( $scope.cadastro.email_cliente !== ""){
            if ($scope.cadastro.telefone_cliente !== ""){

                $scope.loader_send = true;

                $http({

              method: 'POST',
              url: "/home/saveCliente",
              data: $.param({cadastro: $scope.cadastro}),
              headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

          }).then(function (response) {

              $scope.loader_send = false;
                    $(".alert-sucesso-landing").slideDown(300);
                    $scope.cadastro = {
                        "nome_cliente": "",
                        "email_cliente": "",
                        "telefone_cliente": ""
                    }

                    $timeout(function () {
                        $(".alert-sucesso-landing").slideToggle(300);
                    }, 2000);

          })
            }else{
                $scope.error.telefone_cliente = true
            }
        }else{
            $scope.error.email_cliente = true
        }
      }else{
          $scope.error.nome_cliente = true
      }

  }

}]);

