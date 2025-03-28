<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="e04Vhp9OOCAzqmfYfIjJpEF2Qf16jzeFv0XUmknE">

    <title>VALIDADOR - URESRR</title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="http://sicaes.esy.es/css/plugins/pace/pace.css" rel="stylesheet">
    <script src="http://sicaes.esy.es/js/plugins/pace/pace.js"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="http://sicaes.esy.es/css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="http://sicaes.esy.es/css/style.css" rel="stylesheet">
    <link href="http://sicaes.esy.es/css/plugins.css" rel="stylesheet">
</head>

<body>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-12">
            <div class="portlet portlet-default">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-9">

                            <h1>
                                <img src="{{ url('img/logo_renascer_horizontal.svg') }}"/>
                            </h1>

                            <h1 class="alert alert-success text-center"><i class="far fa-thumbs-up"></i><strong> Documento válido!</strong></h1>

                            <h4>
                                URES-RR atesta que <strong>ROGERIO REGIS DE MOURA AZEVEDO</strong> é estudante e está regularmente matriculado(a) em <strong class="text-uppercase">Sistema de Informação</strong> na instituição <strong class="text-uppercase">ESTÁCIO DA AMAZÔNIA</strong>.
                            </h4>
                        </div>
                        <div class="col-md-3 invoice-terms">
                            <h3><small>Código de Uso</small> <strong>D2F4FD</strong></h3>
                            <p>
                                Data da Emissão: 2019-03-23 05:38:27<br>
                                <strong>Documento válido até: <span class="text-green">MARÇO DE 2022</span></strong>
                            </p>
                        </div>
                    </div>
                    <!-- /.row -->

                    <h3>Estudante</h3>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-10">
                                    <table class="table">
                                        <tr>
                                            <th class="text-right">Nome:</th>
                                            <td class="col-sm-10"><span id="nome">ROGERIO REGIS DE MOURA AZEVEDO</span></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Instituição:</th>
                                            <td class="col-sm-10"><span id="instituicao">ESTÁCIO DA AMAZÔNIA</span></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Curso:</th>
                                            <td class="col-sm-10"><span id="curso">Sistema de Informação</span></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Série (Nível)</th>
                                            <td class="col-sm-10"><span id="serie" class="text-uppercase">SUPERIOR</span></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right"><span id="tipo-documento">RG</span>:</th>
                                            <td><span id="numero-documento">172878</span></td>
                                        </tr>

                                        <tr>
                                            <th class="text-right">Emissor:</th>
                                            <td class="col-sm-10">
                                                <span id="emissor">
                                                    <address>
                                                        <strong>UNIÃO RORAIMENSE DOS ESTUDANTES</strong>
                                                        <br>CNPJ: 84.049.527/0001-09
                                                        <br>Rua: Araújo Filho, 794 – Centro.
                                                        <br>Boa Vista – Roraima CEP: 69301-090
                                                        <br><i>(95)99111-2023.</i>
                                                    </address>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <style>
                                .containerImagem {
                                    width: 100px;
                                    height: auto;
                                    border-radius: 5px;
                                }
                            </style>
                            <div class="col-sm-2 text-center">
                                <img id="foto" src="/img/pp/D2F4FD.jpg" class="containerImagem"/>
                            </div>
                        </div>
                        <!-- /.row -->
                        <h3>VALIDAÇÃO EM: <lo class="text-green">12/08/2021</lo></h3> 
                        <div class="text-right">
                            <input class="btn btn-green" type="button" value="IMPRIMIR" onClick="window.print()"/>
                        </div>
                    </body>
                    </html>