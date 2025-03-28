<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Print Modal</title>
        <!-- Bootstrap core CSS -->
        <link href="http://leandrolisura.com.br/wp-content/uploads/2017/11/bootstrap.min_.css   " rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
            .printable {
                display: none;
            }
            /* print styles*/
            @media print {
                .printable {
                    display: block;
                }
                .screen {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Leandro Lisura</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Imprimindo Modal</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="screen">
                <div>
                    <div class="starter-template">
                        <h1>Conteudo do site vai aqui.</h1>
                        <p class="lead">
                            Use qualquer coisa que quiser.<br> Qualquer HTML que quiser pode colocar aqui.
                        </p>
                        <p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Minha Modal</button>
                        </p>
                    </div>
                </div>
                <div class="modal fade bs-example-modal-sm" tabindex="-1"
                     role="dialog" aria-labelledby="mySmallModalLabel" id="myModal">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="text-align: center;">
                            <br> Isso é o que eu quero imprimir.<br> E somente isso. Nada mais do resto. <br> <br>
                            <div class="col-md-11" style="text-decoration: underline!important; font-weight: bold; font-size: 12pt!important; text-align: center;">
                                <img src="http://leandrolisura.com.br/wp-content/uploads/2017/11/download.jpg"/>
                                LEANDRO LISURA


<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                            </div>
                            <button type="button" class="btn btn-primary" id="btnPrint">Imprimir esta modal</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="printable"></div>
        </div>
        <!-- /.container -->
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://leandrolisura.com.br/wp-content/uploads/2017/11/jquery.min_.js"></script>
        <script src="http://leandrolisura.com.br/wp-content/uploads/2017/11/bootstrap.min_.js"></script>
        <script src="http://leandrolisura.com.br/wp-content/uploads/2017/07/printThis.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#btnPrint").click(function () {
                    //get the modal box content and load it into the printable div
                    $(".printable").html($("#myModal").html());
                    $(".printable #btnPrint").remove();
                    $(".printable").printThis();
                });
            });
        </script>
    </body>
</html>