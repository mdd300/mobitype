<html ng-app="app_landing">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, use-scalable=no">
    <meta http-equiv="pragma" content="no-cache">
    <title>
        Mobitype
    </title>

    <link href="<?= base_url() ?>vendor/css/font-awesome.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>vendor/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>

    <!-- Plugin CSS -->

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/creative.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/global.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style-landing.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/responsive-landing.css" rel="stylesheet">



</head>
<body ng-controller="landing_ctrl">

<div class="content-loader">
    <div class="row">
        <div class="col-md-12">
            <div class="loader-ini">
                <div class="loader-inner">
                    <div class="loading one"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading two"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading three"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading four"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-landing">
    <div class="content-img" id="img1">
    </div>
    <div class="logo-top">
    <img class="logo-img" src="<?=base_url()?>assets/img/logo.PNG">
    </div>
    <div class="content-form">
        <div class="content-title-landing" id="footer">
            Bem-Vindo a Mobitype
        </div>
        <div class="content-text-landing" id="footer2">
            Nosso site está em contrução no momento, mas não deixe de entrar em contato conosco, insira seus dados e em breve entraremos em contato.
        </div>
        <form class="form-landind">

            <div class="group">
                <input type="text" id="inputID" required ng-model="cadastro.nome_cliente" ng-class="{'error-border': error.nome_cliente}">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label ng-class="{'error-name': error.nome_cliente}">Nome</label>
            </div>

            <div class="group">
                <input type="text" id="inputID1" ng-class="{'error-border': error.email_cliente}" required ng-model="cadastro.email_cliente">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label ng-class="{'error-name': error.email_cliente}">Email</label>
            </div>

            <div class="group">
                <input type="text" id="txttelefone" ng-class="{'error-border': error.telefone_cliente}" required ng-model="cadastro.telefone_cliente">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label ng-class="{'error-name': error.telefone_cliente}">Telefone</label>
            </div>

            <div class="content-btn" ng-click="enviar()">
                <div ng-show="loader_send" class="col-md-3 bg loader-img" style="
    margin-left: 5%;
    padding: 0 !important;
    width: auto;
    height: auto;
    position: absolute;
     margin-top: -3px;">
                    <div class="loader-all" id="loader-1"></div>
                </div>
                <b>Enviar</b></div>


        </form>

        <div class="rede-social" style="cursor: pointer">
            <a href="https://www.instagram.com/mobitypedev/" target="_blank" style="color: white;text-decoration: none !important;">
            <img src="<?= base_url()?>assets/img/instagram.png" id="imgicon" style="display: none"> @mobitypedev
            </a>
        </div>

    </div>



</div>

<div class="alert alert-success alert-sucesso-landing" role="alert" >
    A solicitação foi enviado com sucesso, logo entraremos em contato
</div>

</body>

<script src="<?= base_url('vendor/js/jquery-3.3.1.min.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('vendor/js/jquery.mask.min.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('vendor/js/bootstrap.min.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('vendor/js/parallax.js') ?>"
        type="text/javascript"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url() ?>vendor/js/angular.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url() ?>assets/js/creative.min.js"></script>
<script src="<?= base_url() ?>assets/js/home.js"></script>

<!--angular pré cadastro -->
<script src="<?= base_url('assets/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>"
        type="text/javascript"></script>
<!--angular pré cadastro -->
<script src="<?= base_url('assets/js/angular/services/pre_cadastro.service.js') ?>"
        type="text/javascript"></script>

<!--angular pré cadastro -->
<script src="<?= base_url('assets/js/angular/controllers/landing_pages/pre_cadastro.controller.js') ?>"
        type="text/javascript"></script>

<script>
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });

    var img = new Image();
    img.src = "/mobitype/assets/img/background-landgind.png";

    img.onload = function( ) {
        $("#img1").css("background-image", "url('" + img.src + "')" );
            $(".content-loader").fadeOut("slow", function() {
                $('html, body').css({
                    overflow: 'auto',
                    height: 'auto'
                });
                $("#imgicon").css("display", "inline")

            });

    }
  $("#txttelefone").mask("(00) 0000-00009");
</script>


</body>
</html>
