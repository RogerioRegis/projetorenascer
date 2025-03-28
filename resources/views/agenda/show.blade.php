<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

    <link rel="apple-touch-icon" href="{{ url('img/logo_projeto_renascer.png') }}" sizes="180x180">
    <link rel="icon" href="{{ url('img/logo_projeto_renascer.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ url('img/logo_projeto_renascer.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ url('img/logo_projeto_renascer.png') }}">
    <link rel="mask-icon" href="{{ url('img/logo_projeto_renascer.png') }}" color="#212121">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IMPRESSÃO DE ORÇAMENTO</title>

</head>

<body>

    <page backtop="5mm" backbottom="5mm" backleft="10mm" backright="10mm">

        @include('section.style-budget')


<!--   -->
        <div id="container">
            <div style="text-align:center">
                <form>
                    
                    <input style="background: #005cff; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px;" class="no-print" id="miid" type="button" value="IMPRIMIR" onclick="window.print()">

                    <a style="background: green; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" href="/receipt/{{ $order->id }}">RECIBO</a>

                    <a style="background: red; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" href="/agenda/{{ $order->id }}/edit"><i class="fas fa-edit"></i> EDITAR</a>

                </form>
            </div>

            <div id="instructions">
                <div style="font-size: 5mm">
                    <p><strong>ATENÇÃO ANTES DE IMPRIMIR</strong></p>
                    <p>Verifique se os dados foram todos preenchidos corretamente antes de imprimir. Em (Mais Definições) coloque o tamanho do pepael em (Meia Carta) e as Margens no (Mínimo).</p>
                    <p>&nbsp;</p>
                </div>
                <hr />
            </div>

        </div>



        <div id="boleto">
            <br>
            <table cellspacing="0" cellpadding="0">
                <tbody>
                    <tr class="titulos">
                        <td style="width: 25%"></td>
                        <td style="width: 50%"></td>
                        <td style="width: 250%"></td>
                    </tr>
                    <tr class="campos" class="header">
                        <td><img height="60px" src="{{ url('img/logo_renascer_horizontal.svg') }}"></td>
                        <td align="center">
                            <p>Av. Paulo Coelho Pereira, 538 – São Vicente.</p>
                            <p>CEP: 69303-380. Boa Vista – RR <br>(Garagem do Governo)</p>
                            <strong style="font-size: 4mm">CNPJ: 84.012.012/0001-26</strong>
                            <a style="font-size: 4mm; color: navy">projetorenascersejucrr@gmail.com</a>
                        </td>
                        <td class="alignRight largeTopField">
                            <img height="40px" src="{{ url('img/log-gov2.png') }}">
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>

            <div align="center">

                <table class="header" cellspacing="0" cellpadding="0">
                    <tbody>

                        <tr class="campos">
                            @if (($order->categoria) == "MARCENARIA")
                            <td style="font-size: 7.5mm; text-align: center; background-color: #70605C; padding-top:2mm; padding-bottom:2mm;">
                                <strong style="font-size: 7.5mm; color: white">ORÇAMENTO {{ $order->categoria }}</strong>
                            </td>
                            @else @endif

                            @if (($order->categoria) == "MECÂNICA E ELÉTRICA")
                            <td style="font-size: 7.5mm; text-align: center; background-color: #00A859; padding-top:2mm; padding-bottom:2mm;">
                                <strong style="font-size: 7.5mm; color: white">ORÇAMENTO {{ $order->categoria }}</strong>
                            </td>
                            @else @endif

                            @if (($order->categoria) == "SERRALHERIA")
                            <td style="font-size: 7.5mm; text-align: center; background-color: #333333; padding-top:2mm; padding-bottom:2mm;">
                                <strong style="font-size: 7.5mm; color: white">ORÇAMENTO {{ $order->categoria }}</strong>
                            </td>
                            @else @endif
                                                        
                            @if (($order->categoria) == "LANTERNAGEM")
                            <td style="font-size: 7.5mm; text-align: center; background-color: #0F376F; padding-top:2mm; padding-bottom:2mm;">
                                <strong style="font-size: 7.5mm; color: white">ORÇAMENTO {{ $order->categoria }}</strong>
                            </td>
                            @else @endif
                            
                            @if (($order->categoria) == "REFRIGERAÇÃO")
                            <td style="font-size: 7.5mm; text-align: center; background-color: #0098DA; padding-top:2mm; padding-bottom:2mm;">
                                <strong style="font-size: 7.5mm; color: white">ORÇAMENTO {{ $order->categoria }}</strong>
                            </td>
                            @else @endif
                            
                            @if (($order->categoria) == "SERVIÇOS ESPECIALIZADOS")
                            <td style="font-size: 7.5mm; text-align: center; background-color: #D96438; padding-top:2mm; padding-bottom:2mm;">
                                <strong style="font-size: 7.5mm; color: white">ORÇAMENTO {{ $order->categoria }}</strong>
                            </td>
                            @else @endif

                        </tr>
                    </tbody>
                </table>

            </div>

            <br>

            <div>

                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder" style="width: 50%; font-size: 5mm; text-transform: uppercase;">NOME: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->cliente }}</span></td>
                            <td class="rightBorder" style="width: 50%; font-size: 5mm; text-transform: uppercase;">ENDEREÇO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->address }}</span></td>
                        </tr>
                        

                    </tbody>
                </table>

                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <!--
                        <tr class="campos">
                            <td class="leftBorder bottomBorder" style="width: 50%; font-size: 5mm; text-transform: uppercase;">BAIRRO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->bairro }}</span> </td>
                            <td class="leftBorder rightBorder bottomBorder" style="width: 50%; font-size: 5mm; text-transform: uppercase;">CIDADE / UF: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->uf }}</span> </td>
                        </tr>
                        -->
                        <tr class="campos">
                            <td class="leftBorder bottomBorder" style="width: 50%; font-size: 5mm; text-transform: uppercase;">CPF/CNPJ: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->cpf }}</span> </td>
                            <td class="leftBorder rightBorder bottomBorder" style="width: 50%; font-size: 5mm; text-transform: uppercase;">FONE: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->contato }}</span> </td>
                        </tr>
                    </tbody>
                </table>

                <br>
                
                
            @if (($order->categoria) == "MARCENARIA")
                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder" style="font-size: 5mm; text-transform: uppercase;">OBJETO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->veiculo }}</span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder bottomBorder" style="font-size: 5mm; text-transform: uppercase;">COR: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->cor }}</span></td>
                            <td class="rightBorder bottomBorder" style="font-size: 5mm; text-transform: uppercase;">ANO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->ano }}</span></td>
                        </tr>
                    </tbody>
                </table>
            @elseif (($order->categoria) == "SERRALHERIA")
                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder" style="font-size: 5mm; text-transform: uppercase;">OBJETO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->veiculo }}</span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder bottomBorder" style="font-size: 5mm; text-transform: uppercase;">COR: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->cor }}</span></td>
                            <td class="rightBorder bottomBorder" style="font-size: 5mm; text-transform: uppercase;">ANO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->ano }}</span></td>
                        </tr>
                    </tbody>
                </table>
            @else 
                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder" style="font-size: 5mm; text-transform: uppercase;">VEICULO/OBJETO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->veiculo }}</span></td>
                            <td class="rightBorder" style="width: 31%; font-size: 5mm; text-transform: uppercase;">MARCA: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->marca }}</span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder bottomBorder" style="font-size: 5mm; text-transform: uppercase;">PLACA: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->placa }}</span></td>
                            <td class="rightBorder bottomBorder" style="font-size: 5mm; text-transform: uppercase;">COR: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->cor }}</span></td>
                            <td class="rightBorder bottomBorder" style="font-size: 5mm; text-transform: uppercase;">ANO: <span style="font-size: 5mm; text-transform: uppercasem; color: navy">{{ $order->ano }}</span></td>
                        </tr>
                    </tbody>
                </table>
            @endif

                <br>

                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder" style="font-size: 5mm; text-align: center; background-color: #E2E2E2; width: 10%">QTD</td>
                            <td class="rightBorder" style="font-size: 5mm; text-align: center; background-color: #E2E2E2; width: 74%">DESCRIÇÃO</td>
                            <td class="rightBorder" style="font-size: 5mm; text-align: center; background-color: #E2E2E2; width: 16%">VALOR</td>
                        </tr>
                    </tbody>
                </table>

                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td class="leftBorder rightBorder" style="width: 10%; text-align: center; font-size: 5mm; color: navy;text-transform: uppercase;">
                                @if (($order->q1)>0) {{ $order->q1 }} @else {{ $order->q1 }} @endif<br>
                                <hr />
                                @if (($order->q2)>0) {{ $order->q2 }} @else {{ $order->q2 }} @endif<br>
                                <hr />
                                @if (($order->q3)>0) {{ $order->q3 }} @else {{ $order->q3 }} @endif<br>
                                <hr />
                                @if (($order->q4)>0) {{ $order->q4 }} @else {{ $order->q4 }} @endif<br>
                                <hr />
                                @if (($order->q5)>0) {{ $order->q5 }} @else {{ $order->q5 }} @endif<br>
                                <hr />
                                @if (($order->q6)>0) {{ $order->q6 }} @else {{ $order->q6 }} @endif<br>
                                <hr />
                                @if (($order->q7)>0) {{ $order->q7 }} @else {{ $order->q7 }} @endif<br>
                                <hr />
                                @if (($order->q8)>0) {{ $order->q8 }} @else {{ $order->q8 }} @endif<br>
                                <hr />
                                @if (($order->q9)>0) {{ $order->q9 }} @else {{ $order->q9 }} @endif<br>
                                <hr />
                                @if (($order->q10)>0) {{ $order->q10 }} @else {{ $order->q10 }} @endif<br>
                                <hr />
                                @if (($order->q11)>0) {{ $order->q11 }} @else {{ $order->q11 }} @endif<br>
                                <hr />
                                @if (($order->q12)>0) {{ $order->q12 }} @else {{ $order->q12 }} @endif<br>
                                <hr />
                                @if (($order->q13)>0) {{ $order->q13 }} @else {{ $order->q13 }} @endif<br>
                                <hr />
                                @if (($order->q14)>0) {{ $order->q14 }} @else {{ $order->q14 }} @endif<br>
                                <hr />
                                @if (($order->q15)>0) {{ $order->q15 }} @else {{ $order->q15 }} @endif<br>
                            </td>
                            <td class="rightBorder" style="width: 74%; color: navy; font-size: 5mm; text-transform: uppercase;">
                                {{ $order->d1 }}<br>
                                <hr />
                                {{ $order->d2 }}<br>
                                <hr />
                                {{ $order->d3 }}<br>
                                <hr />
                                {{ $order->d4 }}<br>
                                <hr />
                                {{ $order->d5 }}<br>
                                <hr />
                                {{ $order->d6 }}<br>
                                <hr />
                                {{ $order->d7 }}<br>
                                <hr />
                                {{ $order->d8 }}<br>
                                <hr />
                                {{ $order->d9 }}<br>
                                <hr />
                                {{ $order->d10 }}<br>
                                <hr />
                                {{ $order->d11 }}<br>
                                <hr />
                                {{ $order->d12 }}<br>
                                <hr />
                                {{ $order->d13 }}<br>
                                <hr />
                                {{ $order->d14 }}<br>
                                <hr />
                                {{ $order->d15 }}<br>
                            </td>
                            <td class="rightBorder" style="width: 16%; font-size: 5mm; color: navy; text-transform: uppercase;">
                                @if (($order->v1)>0) R$ {{ $order->v1 }} @else {{ $order->v1 }} @endif<br>
                                <hr />
                                @if (($order->v2)>0) R$ {{ $order->v2 }} @else {{ $order->v2 }} @endif<br>
                                <hr />
                                @if (($order->v3)>0) R$ {{ $order->v3 }} @else {{ $order->v3 }} @endif<br>
                                <hr />
                                @if (($order->v4)>0) R$ {{ $order->v4 }} @else {{ $order->v4 }} @endif<br>
                                <hr />
                                @if (($order->v5)>0) R$ {{ $order->v5 }} @else {{ $order->v5 }} @endif<br>
                                <hr />
                                @if (($order->v6)>0) R$ {{ $order->v6 }} @else {{ $order->v6 }} @endif<br>
                                <hr />
                                @if (($order->v7)>0) R$ {{ $order->v7 }} @else {{ $order->v7 }} @endif<br>
                                <hr />
                                @if (($order->v8)>0) R$ {{ $order->v8 }} @else {{ $order->v8 }} @endif<br>
                                <hr />
                                @if (($order->v9)>0) R$ {{ $order->v9 }} @else {{ $order->v9 }} @endif<br>
                                <hr />
                                @if (($order->v10)>0) R$ {{ $order->v10 }} @else {{ $order->v10 }} @endif<br>
                                <hr />
                                @if (($order->v11)>0) R$ {{ $order->v11 }} @else {{ $order->v11 }} @endif<br>
                                <hr />
                                @if (($order->v12)>0) R$ {{ $order->v12 }} @else {{ $order->v12 }} @endif<br>
                                <hr />
                                @if (($order->v13)>0) R$ {{ $order->v13 }} @else {{ $order->v13 }} @endif<br>
                                <hr />
                                @if (($order->v14)>0) R$ {{ $order->v14 }} @else {{ $order->v14 }} @endif<br>
                                <hr />
                                @if (($order->v15)>0) R$ {{ $order->v15 }} @else {{ $order->v15 }} @endif<br>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="header topBorder" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="campos">
                            <td style="font-size: 5mm; text-transform: uppercase; color: darkred; width: 84%" class="leftBorder rightBorder bottomBorder">Obs: {{ $order->obs }}</td>
                            <td style="font-size: 5mm; text-transform: uppercase; color: navy; text-align: center;" class="rightBorder bottomBorder"></td>
                        </tr>
                        <tr class="campos">
                            <td style="font-size: 5mm; text-transform: uppercase; text-align: right; background-color: #E2E2E2" class="leftBorder rightBorder bottomBorder">VALOR DA ENTRADA &nbsp;</td>
                            <td style="font-size: 5mm; text-transform: uppercase; color: navy; background-color: #E2E2E2" class="rightBorder bottomBorder">R$ {{ $order->valor_entrada }}</td>
                        </tr>
                        <tr class="campos">
                            <td style="font-size: 5mm; text-transform: uppercase; text-align: right; background-color: #E2E2E2" class="leftBorder rightBorder bottomBorder">VALOR DA MÃO DE OBRA &nbsp;</td>
                            <td style="font-size: 5mm; text-transform: uppercase; color: navy; background-color: #E2E2E2" class="rightBorder bottomBorder">R$ {{ $order->valor_obra }}</td>
                        </tr>
                        <tr class="campos">
                            <td style="font-size: 5mm; text-transform: uppercase; text-align: right; background-color: #E2E2E2" class="leftBorder rightBorder bottomBorder">VALOR TOTAL DO ORÇAMENTO &nbsp;</td>
                            <td style="font-size: 5mm; text-transform: uppercase; color: navy;" class="rightBorder bottomBorder">R$ {{ $order->valor_total }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            </tbody>
            </table>

            <br>
            <br>
            <br>
            <br>

            <table class="header" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr class="campos">
                        <td class="topBorder" style="font-size: 4.5mm; text-transform: uppercase; color: navy; text-align: center;">{{ $order->reeducando }}</td>
                        <td style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                        <td class="topBorder" style="font-size: 4.5mm; text-transform: uppercase; text-align: center;">{{ $order->responsavel }}</td>
                    </tr>
                    <tr class="titulos">
                        <td style="text-align: center;">
                            Setor: <strong style="font-size: 4mm; color: gray;">{{ $order->categoria }}</strong>
                        </td>
                        <td style="font-size: 4mm; text-transform: uppercase; color: navy; text-align: center;"></td>
                        <td style="text-align: center;">Coordenador de Projetos</td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table class="header" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr class="campos">
                        <td><img height="80px" src="{{ url('img/qrinstagram.png') }}"></td>
                        <td style="font-size: 5mm; text-transform: uppercase; color: navy; text-align: right; padding-top:3mm;">
                            BOA VISTA - RR, {{date("d/m/Y", strtotime($order->data_entrada))}}. <br>
                            
                            <div style="display:block; float: center; padding-top:3mm;">
                            <hr>
                                <p style="text-align: center;">
                                    <font style="font-size: 4mm; color: #262626">
                                        ORÇAMENTO Nº. 0{{ $order->id }} - VÁLIDO POR 30 DIAS
                                    </font>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>



        </div>
    </page>

    <aside>
    </aside>

</body>

<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
<script type="text/javascript">
    jQuery(window).load(function($) {
        atualizaRelogio();
    });
</script>

</html>