<!DOCTYPE html>
<html lang="en">
<head>
    <title>MobiSys</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?=base_url()?>assets/adm/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?=base_url()?>assets/adm/bower_components/font-awesome/css/font-awesome.min.css">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;" ng-app="app_landing">

<div class="limiter" ng-controller="login_control">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						Login
					</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="email" ng-model="data.nome_cliente">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Por favor digite a senha">
                    <input class="input100" type="password" name="pass" ng-model="data.senha_cliente">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Senha</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" ng-click="login()">
                        Entrar
                    </button>
                </div>

            </form>

            <div class="login100-more" style="background-image: url(<?= base_url('assets/img/login_img.jpg') ?>);">
                <img src="<?= base_url('assets/img/Mobisys-teste.png')?>" style="position:absolute; left: 20px; top; 20px; width: 40%; height: auto">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="<?=base_url()?>assets/adm/bower_components/jquery/dist/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>vendor/bootstrap/js/popper.js"></script>
<script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>vendor/daterangepicker/moment.min.js"></script>
<script src="<?=base_url()?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>assets/js/main.js"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url() ?>vendor/js/angular.min.js"></script>

<!--angular pré cadastro -->
<script src="<?= base_url('assets/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>"
        type="text/javascript"></script>
<!--angular pré cadastro -->
<script src="<?= base_url('assets/js/angular/services/pre_cadastro.service.js') ?>"
        type="text/javascript"></script>

<!--angular pré cadastro -->
<script src="<?= base_url('assets/js/angular/controllers/Cliente.controller.js') ?>"
        type="text/javascript"></script>
</body>
</html>