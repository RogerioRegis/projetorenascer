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

    <!-- QRCode Drive -->
    <script type="text/javascript" src="{{ url('qrc/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('qrc/qrcode.js') }}"></script>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Impressão de OS</title>

<style>
    .boletolayout .logo:last-of-type 
    img { height: 50px; }

    .boletolayout .number
    { word-wrap:break-word }
</style>

</head>

<body>

<page backtop="5mm" backbottom="5mm" backleft="10mm" backright="10mm">

@include('section.style-print')

<div id="container">
    <div style="text-align:center">
        <form>
            <input style="background: #005cff; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px;" class="no-print" id="miid" type="button" value="IMPRIMIR" onclick="window.print()">
             
            <a style="background: green; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" 
             href="/recibo/{{ $order->id }}">RECIBO</a>
             
            <a style="background: red; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" 
             href="/order/{{ $order->id }}/edit">EDITAR</a>
             
        </form>
    </div>

     <div id="instructions">
      <div style="font-size: 5mm">
         <p><strong>ATENÇÃO ANTES DE IMPRIMIR</strong></p>
         <p>Verifique se os dados foram todos preenchidos corretamente antes de imprimir. Em (Mais Definições) coloque o tamanho do pepael em (Meia Carta) e as Margens no (Mínimo).</p>
         <p>&nbsp;</p>
     </div>
     <input id="text" type="text" value="{{url('order')}}/{{ $order->id }}" style="width:99%; text-align:center;" />
 </div>

</div>

<div id="boleto">
   <table cellspacing="0" cellpadding="0">
      <tbody>
         <tr class="titulos">
            <td style="width: 25%"></td>
            <td style="width: 50%"></td>
            <td style="width: 50%"></td>
        </tr>
        <tr class="campos" class="header">
            <td><img height="80px" src="{{ url('img/logo_renascer_horizontal.svg') }}"></td>
            <td align="center"> 
               <p>Av. Paulo Coelho Pereira, 538 – São Vicente.</p>
               <p>CEP: 69303-380. Boa Vista – RR <br>(Garagem do Governo)</p>
               <strong style="font-size: 4mm">@projetorenascerrr</strong>
               <a style="font-size: 4mm; color: navy">projetorenascersejucrr@gmail.com</a>
           </td>
           <td class="alignRight largeTopField">

            <div id="qrcode" style="width:100px; height:100px; margin-top:20px; margin-left:15px; margin-bottom:10px;"></div>
        
        <!--
            <img style="-webkit-user-select: none;" src="https://chart.googleapis.com/chart?chs=140x140&amp;cht=qr&amp;chl={{url('order')}}/{{ $order->id }}">
        -->

            <p align="center">OS N.º {{ $order->id }}-E</p>
        </td>
    </tr>
</tbody>
</table>
<br>
<div align="center">
   
  <strong style="font-size: 5mm">ORDEM DE SERVIÇO - N.º  <a style="font-size: 6mm; color: navy">{{ $order->id }}</a> </strong> 
  
   <!--
  <strong style="font-size: 5mm">ORDEM DE SERVIÇO - N.º</strong>_________
  -->
  
</div>
<br>
<div>
  <table class="header topBorder" cellspacing="0" cellpadding="0">
   <tbody>
    <tr class="titulos">

        @if (($order->valor_estimado)>0)
        <td class="leftBorder rightBorder" style="width: 30%; background-color: #ffee00">Tipo</td>
        @else
        <td class="leftBorder rightBorder" style="width: 30%">Tipo</td>
        @endif

        <td class="rightBorder" style="width: 40%">Data da Entrada</td>
        <td class="rightBorder" style="width: 30%">Data da Saída</td>
    </tr>
    <tr class="campos">

        @if (($order->tipo) == "CONVÊNIO")
        <td class="leftBorder rightBorder" style="font-size: 4.5mm; text-transform: uppercasem; color: navy; background-color: #ffee00">{{ $order->tipo }}</td>
        @else
        <td class="leftBorder rightBorder" style="font-size: 4.5mm; text-transform: uppercasem; color: navy">{{ $order->tipo }}</td>  
        @endif

        <td class="rightBorder" style="font-size: 4.5mm; color: navy">
            {{date("d/m/Y", strtotime($order->data_entrada))}}
        </td>
        <td class="rightBorder" style="font-size: 4.5mm; color: navy">
            {{date("d/m/Y", strtotime($order->data_saida))}}
        </td>
    </tr>
</tbody>
</table>

<table class="header topBorder" cellspacing="0" cellpadding="0">
   <tbody>
    <tr class="titulos">
     <td class="leftBorder rightBorder">Nome/Secretaria</td>
     <td class="rightBorder">CPF/CNPJ</td>
     <td class="rightBorder" style="background-color: #d9d9d9">Setor</td>
 </tr>
 <tr class="campos">
     <td class="leftBorder rightBorder" style="font-size: 4.5mm; text-transform: uppercase; color: navy">{{ $order->cliente }}</td>
     <td class="rightBorder" style="font-size: 4.5mm; text-transform: uppercase; color: navy">{{ $order->cpf }}</td>
     <td class="rightBorder" style="font-size: 4.5mm; color: navy; background-color: #d9d9d9">{{ $order->categoria }}</td>
 </tr>
</tbody>
</table>

<table class="header topBorder" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="titulos">
            <td class="leftBorder rightBorder">Veículo/Objeto</td>
            <td class="rightBorder">Placa</td>
            <td class="rightBorder">Cor</td>
            <td class="rightBorder">Ano</td>
            <td class="rightBorder">Contato</td>
        </tr>
    <tr class="campos">
        <td class="leftBorder rightBorder" style="font-size: 4.5mm; color: navy; text-transform: uppercase;">
        {{ $order->veiculo }}</td>
        <td class="rightBorder" style="font-size: 4.5mm; color: navy; text-transform: uppercase;">
        {{ $order->placa }}</td>
        <td class="rightBorder" style="font-size: 4.5mm; color: navy; text-transform: uppercase;">
        {{ $order->cor }}</td>
        <td class="rightBorder" style="font-size: 4.5mm; color: navy">{{ $order->contato }}</td>
        <td class="rightBorder" style="font-size: 4.5mm; color: navy; text-transform: uppercase;">
        {{ $order->ano }}</td>
    </tr>
    </tbody>
</table>

<table class="header topBorder" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="titulos">
            <td></td>
        </tr>
        <tr class="campos">
            <td style="font-size: 3.5mm"></td>
        </tr>
    </tbody>
</table>


 <table class="header topBorder" cellspacing="0" cellpadding="0">
   <tbody>
    <tr class="titulos">
     <td class="leftBorder rightBorder" style="background-color: #c4c4c4; width: 10%"></td>
     <td class="rightBorder" style="background-color: #c4c4c4; width: 74%"></td>
     <td class="rightBorder" style="background-color: #c4c4c4; width: 16%"></td>
 </tr>
 <tr class="campos">
     <td class="leftBorder rightBorder" style="font-size: 4.5mm; text-align: center; background-color: #c4c4c4;">QTD
     </td>
     <td class="rightBorder" style="font-size: 4.5mm; text-align: center; background-color: #c4c4c4;">DESCRIÇÃO
     </td>
     <td class="rightBorder" style="font-size: 4.5mm; text-align: center; background-color: #c4c4c4;">
         VALOR
     </td>
 </tr>
 <tr class="titulos">
     <td class="leftBorder rightBorder" style="background-color: #c4c4c4;"></td>
     <td class="rightBorder" style="background-color: #c4c4c4;"></td>
     <td class="rightBorder" style="background-color: #c4c4c4;"></td>
 </tr>
</tbody>
</table>



<table class="header topBorder" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="campos">
            <td class="leftBorder rightBorder" style="width: 10%; text-align: center; font-size: 4mm; color: navy;text-transform: uppercase;">
                @if (($order->q1)>0) 00{{ $order->q1 }} @else {{ $order->q1 }} @endif<br>
                @if (($order->q2)>0) 00{{ $order->q2 }} @else {{ $order->q2 }} @endif<br>
                @if (($order->q3)>0) 00{{ $order->q3 }} @else {{ $order->q3 }} @endif<br>
                @if (($order->q4)>0) 00{{ $order->q4 }} @else {{ $order->q4 }} @endif<br>
                @if (($order->q5)>0) 00{{ $order->q5 }} @else {{ $order->q5 }} @endif<br>
                @if (($order->q6)>0) 00{{ $order->q6 }} @else {{ $order->q6 }} @endif<br>
                @if (($order->q7)>0) 00{{ $order->q7 }} @else {{ $order->q7 }} @endif<br>
                @if (($order->q8)>0) 00{{ $order->q8 }} @else {{ $order->q8 }} @endif<br>
                @if (($order->q9)>0) 00{{ $order->q9 }} @else {{ $order->q9 }} @endif<br>
                @if (($order->q10)>0) 00{{ $order->q10 }} @else {{ $order->q10 }} @endif<br>
                @if (($order->q11)>0) 00{{ $order->q11 }} @else {{ $order->q11 }} @endif<br>
                @if (($order->q12)>0) 00{{ $order->q12 }} @else {{ $order->q12 }} @endif<br>
                @if (($order->q13)>0) 00{{ $order->q13 }} @else {{ $order->q13 }} @endif<br>
                @if (($order->q14)>0) 00{{ $order->q14 }} @else {{ $order->q14 }} @endif<br>
            </td>
            <td class="rightBorder" style="width: 74%; color: navy; font-size: 4mm; text-transform: uppercase;">
                {{ $order->d1 }}<br>
                {{ $order->d2 }}<br>
                {{ $order->d3 }}<br>
                {{ $order->d4 }}<br>
                {{ $order->d5 }}<br>
                {{ $order->d6 }}<br>
                {{ $order->d7 }}<br>
                {{ $order->d8 }}<br>
                {{ $order->d9 }}<br>
                {{ $order->d10 }}<br>
                {{ $order->d11 }}<br>
                {{ $order->d12 }}<br>
                {{ $order->d13 }}<br>
                {{ $order->d14 }}<br>
            </td>
            <td class="rightBorder" style="width: 16%; font-size: 4mm; color: navy; text-transform: uppercase;">
                @if (($order->v1)>0) R$ {{ $order->v1 }} @else {{ $order->v1 }} @endif<br>
                @if (($order->v2)>0) R$ {{ $order->v2 }} @else {{ $order->v2 }} @endif<br>
                @if (($order->v3)>0) R$ {{ $order->v3 }} @else {{ $order->v3 }} @endif<br>
                @if (($order->v4)>0) R$ {{ $order->v4 }} @else {{ $order->v4 }} @endif<br>
                @if (($order->v5)>0) R$ {{ $order->v5 }} @else {{ $order->v5 }} @endif<br>
                @if (($order->v6)>0) R$ {{ $order->v6 }} @else {{ $order->v6 }} @endif<br>
                @if (($order->v7)>0) R$ {{ $order->v7 }} @else {{ $order->v7 }} @endif<br>
                @if (($order->v8)>0) R$ {{ $order->v8 }} @else {{ $order->v8 }} @endif<br>
                @if (($order->v9)>0) R$ {{ $order->v9 }} @else {{ $order->v9 }} @endif<br>
                @if (($order->v10)>0) R$ {{ $order->v10 }} @else {{ $order->v10 }} @endif<br>
                @if (($order->v11)>0) R$ {{ $order->v11 }} @else {{ $order->v11 }} @endif<br>
                @if (($order->v12)>0) R$ {{ $order->v12 }} @else {{ $order->v12 }} @endif<br>
                @if (($order->v13)>0) R$ {{ $order->v13 }} @else {{ $order->v13 }} @endif<br>
                @if (($order->v14)>0) R$ {{ $order->v14 }} @else {{ $order->v14 }} @endif<br>
            </td>
        </tr>
    </tbody>
</table>

<table class="header topBorder" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="titulos">
            <td class="leftBorder rightBorder" style="width: 84%"></td>
            <td class="rightBorder" style="width: 16%"></td>
        </tr>
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred;" class="leftBorder rightBorder bottomBorder">Obs: {{ $order->obs }}</td>

            <td style="font-size: 4mm; text-transform: uppercase; color: navy; text-align: center;" class="rightBorder bottomBorder"></td>
        </tr>
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; text-align: right; background-color: #c4c4c4" class="leftBorder rightBorder bottomBorder">VALOR TOTAL &nbsp;</td>

            <td style="font-size: 4.5mm; text-transform: uppercase; color: navy;" class="rightBorder bottomBorder">R$ {{ $order->valor_total }}</td>
        </tr>
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; text-align: right; background-color: #c4c4c4" class="leftBorder rightBorder bottomBorder">ESTIMATIVA DE ECONOMIA PARA O ESTADO &nbsp;</td>


            @if (($order->valor_estimado)>0)
            <td style="font-size: 4.5mm; text-transform: uppercase; color: navy; background-color: #ffee00" class="rightBorder bottomBorder">
                R$ {{ $order->valor_estimado }}
            </td>

            @else
            <td style="font-size: 4.5mm; text-transform: uppercase; color: navy;" class="rightBorder bottomBorder"> 
            </td>
            @endif

        </tr>
    </tbody>
</table>

</div>
</tbody>
</table>

@if (($order->ndiv1)>0)

<table class="header" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred;">DIVISÃO: </td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred;"></td>
        </tr>
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px" >{{$order->ndiv1}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv1}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv2)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv2}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv2}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv3)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv3}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv3}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv4)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv4}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv4}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv5)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv5}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv5}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv6)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv6}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv6}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv7)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv7}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv7}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv8)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv8}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv8}}</td>
        </tr>
        @else <br> @endif
        @if (($order->ndiv9)>0)
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">{{$order->ndiv9}}</td>
            <td style="font-size: 4mm; text-transform: uppercase; color: darkred; border-bottom: dashed darkred; border-bottom-width: 1.5px">R$ {{$order->vdiv9}}</td>
        </tr>
        @else 
        <br>
        <br>
        @endif
    </tbody>
</table>

        @if (($order->ndiv2)>0)
        <br>
        <br>
        <br>
        <br>
        <br>
        @else
        <br>
        <br>
        <br>
        <br>
        <br>
        @endif

        @if (($order->ndiv9)>0)
        <br>
        <br>
        <br>
        <br>
        @else
        @endif

<table class="header" cellspacing="0" cellpadding="0">
  <tbody>
   <tr class="campos">
    <td style="font-size: 4mm; text-transform: uppercase; color: navy; text-align: center;">
        {{ $order->reeducando }}
    </td>
    <td style="text-align: center;"></td>
    <td style="font-size: 4mm; text-transform: uppercase; text-align: center;">
        
        {{ $order->responsavel }}
        
    </td>
</tr>
<tr class="titulos">
    <td style="text-align: center;">
        Reeducando Responsável<br>
        Setor: <strong style="font-size: 4.5mm; color: gray;">{{ $order->categoria }}</strong>
    </td>
    <td style="font-size: 4mm; text-transform: uppercase; color: navy; text-align: center;"></td>
    <td style="text-align: center;">

        Coordenador de Projetos
       
    </td>
</tr>
</tbody>
</table>


<br><br>

<hr>

<div style="display:block; float: center;">
    <p style="text-align: center;">
        <font style="font-size: 3mm">
            SIGEFIPRE - Sistema de Gestão e Finenseiro de Projeto Renascer - Impresso em 
            <output id="data"></output> às <output id="hora"></output>
        </font>
    </p>
</div>

<div>
    <output id="data" style="font-family: 'arial black', 'avant garde'; font-size: 3px;"></output>
</div>
<div>
    <output id="hora" style="font-family: 'arial black', 'avant garde'; font-size: 3px;"></output>             
</div>  

</div>
</page>

<aside>
</aside>

</body>

<script>
    function atualizaRelogio(){ 
        var momentoAtual = new Date();

        var vhora = momentoAtual.getHours();
        var vminuto = momentoAtual.getMinutes();
        var vsegundo = momentoAtual.getSeconds();

        var vdia = momentoAtual.getDate();
        var vmes = momentoAtual.getMonth() + 1;
        var vano = momentoAtual.getFullYear();

        if (vdia < 10){ vdia = "0" + vdia;}
        if (vmes < 10){ vmes = "0" + vmes;}
        if (vhora < 10){ vhora = "0" + vhora;}
        if (vminuto < 10){ vminuto = "0" + vminuto;}
        if (vsegundo < 10){ vsegundo = "0" + vsegundo;}

        dataFormat = vdia + "/" + vmes + "/" + vano;
        horaFormat = vhora + "h" + vminuto + ":" + vsegundo;

        document.getElementById("data").innerHTML = dataFormat;
        document.getElementById("hora").innerHTML = horaFormat;

        setTimeout("atualizaRelogio()",1000);
    }
</script>

<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 100,
        height : 100
    });

    function makeCode () {      
        var elText = document.getElementById("text");

        if (!elText.value) {
            alert("Input a text");
            elText.focus();
            return;
        }

        qrcode.makeCode(elText.value);
    }

    makeCode();

    $("#text").
    on("blur", function () {
        makeCode();
    }).
    on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
</script>

<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
<script type="text/javascript">
    jQuery(window).load(function($){
        atualizaRelogio();
    });
</script>

</html>