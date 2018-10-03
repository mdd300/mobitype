

</header>

<div class="row">
    <div class="col-md-12">

    </div>
</div>

<div class="row">
    <div class="col-md-12 center pt-5">
          <h1>SOBRE NÓS</h1>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-12 " style="    padding: 1.1rem!important;" >
        <div style="text-align: center; padding: 0px 15% 15px 15%">

        <p>A Mobitype tem como missão trazer soluções em tecnologia para empresas e startups dando foco em atender suas necessidades
            da melhor forma possivel.</p>
        <p>Damos o melhor atendimento possível ao cliente, para mantermos uma boa comunicação e sempre visamos inovar o máximo possível
        para trazer bons resultados e ajudar as empresas a crescerem cada vez mais.</p>
        </div>
    </div>
     <div class="col-md-12 p-5" style="background-color: #7c2929">
    <div style="text-align: center; padding: 0px 15% 0px 15%">
        <img src="<?=base_url()?>assets/img/Mobisys-teste.png" class="col-md-6" >
        <p style="color:#ff5353; padding-top: 10px">Nossa empresa possui um sistema próprio para nossos cliente para que eles possam acompanhar seus pedidos de forma interativa
        e dinâmica.</p>
        <p class="center-x" style="padding-top: 10px">
            <button id="send" name="send" class="btn-config-2 center" >
                Saiba mais</button>
        </p>
    </div>
</div>
    <div class="col-md-12 p-5" style="background-color: #2b2b80">
        <div style="text-align: center; padding: 0px 15% 0px 15%">
        <img src="<?=base_url()?>assets/img/InovWeb-teste.png" class="col-md-6" >

        <p style="color: #5353ff; padding-top: 10px">Também temos um sistema onde nossos clientes podem criar seu orçamento de sites de forma rápida e desenha-lo com nossos
        modelos padrões, para diminuir custos daqueles que precisam de um site mas não podem investir tanto.</p>
            <p class="center-x" style="padding-top: 10px">
                <button id="send" name="send" class="btn-config-3 center" >
                    Saiba mais</button>
            </p>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12 pt-5 center">
        <h1>Fale Conosco</h1>
    </div>
    <div class="col-md-12 ">
        <hr>
    </div>

    <div class="col-md-12 center p-5">
        <form class="form-landind" style="    width: 80%;">

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
        <div class="center-x">
            <button id="send" name="send" class="btn-config center-x">
            <div ng-show="loader_send" class="col-md-3 bg loader-img btn-enviar-contato" >
                    <div class="loader-all" id="loader-1"></div>
                </div>
                Enviar</button>
        </div>
        </form>
    </div>
</div>


<script>
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });

    var img = new Image();
    img.src = "/assets/img/background-landgind.png";

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


