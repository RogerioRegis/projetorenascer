<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>REEDUCANDOS DO PROJETO RENASCER</title>
</head>

<body>

<page backtop="5mm" backbottom="5mm" backleft="10mm" backright="10mm">

@include('reeducandos.style')

<div id="container">
    <div id="midiv">
        <form>
            <input style="background: #005cff; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px;" class="no-print" id="miid" type="button" value="IMPRIMIR" onclick="window.print()">
            <a style="background: gray; color: #FFF; border: none; padding: 5px 15px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" 
             href="{{ url('reeducandos') }}">VOLTAR</a>
        </form>
     </div>

     <div id="instructions">
        <div style="font-size: 5mm">
            <p><strong>ATENÇÃO ANTES DE IMPRIMIR</strong></p>
            <p>Verifique se os dados foram todos preenchidos corretamente antes de imprimir. Em Cor coloque (Preto e Branco) Vá em (Mais Definições) coloque as margens em (Padrão) e marque (Elementos gráficos de plano de fundo).</p>
            <p>&nbsp;</p>
        </div> 
        <hr>
    </div>

</div>

<div id="boleto">
    <table cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="titulos">
                <td style="width: 0%"></td>
                <th style="width: 100%"></td>
                <td style="width: 0%"></td>
            </tr>
            <tr class="campos">
                <td></td>
                <td align="center"> 
                <p style="font-size: 8px;">
                <img height="70px" src="{{ url('img/projeto-renascer-top.jpg') }}"><br><br><br>
                </p>
                </td>
                <td class="alignRight largeTopField"></td>
            </tr>
        </tbody>
    </table>

<div>

<table class="header topBorder" cellspacing="0" cellpadding="0">
    <tr class="campos">
        <th class="leftBorder rightBorder bottomBorder" style="font-size: 20px;">
            REEDUCANDOS DO PROJETO RENASCER DIA: <output id="data" style="font-size: 20px;"></output> às <output id="hora" style="font-size: 20px;"></output>
        </th>
    </tr>
</table>

<table class="header topBorder bottomBorder" cellspacing="0" cellpadding="0" style="font-size: 14px">
    <tbody>
      
        <tr class="campos" style="background-color: #dedcdc;">
            <th class="leftBorder" style="font-size: 20px; width: 10%">OFICINA</th>
            <th class="leftBorder rightBorder" style="font-size: 20px; width: 20%">REEDUCANDOS</th>
        </tr>
  
        <tr class="campos">
            <th class="leftBorder topBorder">MECÂNICA E ELÉTRICA</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="MECÂNICA E ELÉTRICA") 
                {{ $reeducando->nome }} <i>{{ $reeducando->function }}</i><br>
                @else @endif
                @endforeach
            </th>
        </tr>

        <tr class="campos" style="background-color: #ededed;">
            <th class="leftBorder topBorder">POSTO DE LAVAGEM</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="POSTO DE LAVAGEM") 
                {{ $reeducando->nome }} <strong><i>{{ $reeducando->function }}</i></strong><br>
                @else @endif
                @endforeach
            </th>
        </tr>

        <tr class="campos">
            <th class="leftBorder topBorder">LANTERNAGEM</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="LANTERNAGEM") 
                {{ $reeducando->nome }}  <i>{{ $reeducando->function }}</i><br>
                @else @endif
                @endforeach
            </th>
        </tr>

        <tr class="campos" style="background-color: #ededed;">
            <th class="leftBorder topBorder">SERRALHERIA</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="SERRALHERIA") 
                {{ $reeducando->nome }} <i>{{ $reeducando->function }}</i><br>
                @else @endif
                @endforeach
            </th>
        </tr>

        <tr class="campos">
            <th class="leftBorder topBorder">MARCENARIA</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;"> 
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="MARCENARIA") 
                {{ $reeducando->nome }} <i>{{ $reeducando->function }}</i><br>
                @else @endif
                @endforeach
            </th>
        </tr>
    
        <tr class="campos" style="background-color: #ededed;">
            <th class="leftBorder topBorder">SERVIÇOS ESPECIALIZADOS</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="SERVIÇOS GERAIS") 
                {{ $reeducando->nome }} (<i>{{ $reeducando->function }}</i>) <br>
                @else @endif
                @endforeach
            </th>
        </tr>
     
        <tr class="campos">
            <th class="leftBorder topBorder">BORRACHARIA</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="BORRACHARIA") 
                {{ $reeducando->nome }} <i>{{ $reeducando->function }}</i><br>
                @else @endif
                @endforeach
            </th>
        </tr>
        
        <tr class="campos" style="background-color: #ededed;">
            <th class="leftBorder topBorder">BARBEARIA</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="BARBEARIA") 
                {{ $reeducando->nome }} <i>{{ $reeducando->function }}</i><br>
                @else @endif
                @endforeach
            </th>
        </tr>
  
        <tr class="campos">
            <th class="leftBorder topBorder">REFRIGERAÇÃO</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="REFRIGERAÇÃO") 
                {{ $reeducando->nome }} <i>{{ $reeducando->function }}</i><br>
                @else @endif
                @endforeach
            </th>
        </tr>
        <!--  
        <tr class="campos" style="background-color: #ededed;">
            <th class="leftBorder topBorder">REDE DE PESCA</th>
            <th class="leftBorder topBorder rightBorder" style="text-align: left;">
                @foreach ( $reeducandos as $reeducando )
                @if (($reeducando->categoria)=="REDE DE PESCA") 
                {{ $reeducando->nome }}<br>
                @else @endif
                @endforeach
            </th>
        </tr>
        -->
    </tbody>
</table>

</div> <!-- agregado para linea boleto -->

<br>
<br>
<br>
<br>
<br>

<table class="header" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="campos">
          
            <td style="font-size: 12px;"></td>
            <td style="text-align: center; font-size: 12px;">_________________________________________<br>
                <strong>TIAGO DE OLIVEIRA NASCIMENTO<br></strong>Coordenador de Projetos
                <!--<strong>Assinatura do Diretor do DJDHC</strong>-->
            </td>
        </tr>
    </tbody>
</table>

<br>
<br>

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

<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
<script type="text/javascript">
    jQuery(window).load(function($){
        atualizaRelogio();
    });
</script>


</html>