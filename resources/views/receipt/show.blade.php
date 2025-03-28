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

    <title>RECIBO DE ENTRADA</title>

    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <script type="text/javascript">
        jQuery(window).load(function($){
            atualizaRelogio();
        });
    </script>

    <style>
    .boletolayout 
    .logo:last-of-type 
    img
    {
      height: 50px;
  }

  .boletolayout 
  .number
  {
      word-wrap:break-word
  }
</style>
</head>

<body>

<page backtop="5mm" backbottom="5mm" backleft="10mm" backright="10mm">

@include('section.style-print')

<div id="container">
         <div style="text-align:center">
            <form>
             <input style="background: #005cff; color: #FFF; border: none; padding: 5px 10px; border-radius: 3px; font-size: 14px;" class="no-print" id="miid" type="button" value="IMPRIMIR" onclick="window.print()">
             
             <a style="background: green; color: #FFF; border: none; padding: 5px 10px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" 
             href="{{url('agenda')}}/{{ $order->id }}">VOLTAR A ORÇAMENTO</a>
             
                          <a style="background: gray; color: #FFF; border: none; padding: 5px 10px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" 
             href="{{url('avulso')}}/{{ $order->id }}">RECIBO AVULÇO</a>
             
             <a style="background: red; color: #FFF; border: none; padding: 5px 10px; border-radius: 3px; font-size: 14px; text-decoration: none;" class="no-print" id="miid" 
             href="{{url('order')}}/{{ $order->id }}/edit">EDITAR</a>
             
            </form>
        </div>

     <div id="instructions">
      <div style="font-size: 5mm">
         <p><strong>ATENÇÃO ANTES DE IMPRIMIR</strong></p>
         <p>Verifique se os dados foram todos preenchidos corretamente antes de imprimir. Em (Mais Definições) coloque o tamanho do pepael em (Meia Carta) e as Margens no (Mínimo).</p>
         <p>&nbsp;</p>
     </div>
 </div>
</div>
<div id="boleto">
<hr>
<br><br><br><br>
<table cellspacing="0" cellpadding="0">
    <tbody>
         <tr class="titulos">
            <td style="width: 25%"></td>
            <td style="width: 50%"></td>
            <td style="width: 25%"></td>
        </tr>
        <tr class="campos" class="header">
            <td>
                <img height="80px" src="{{ url('img/logo_renascer_horizontal.svg') }}">
            </td>
            <td align="center"> 
                <p>Av. Paulo Coelho Pereira, 538 – São Vicente.</p>
                <p>Boa Vista – RR (Garagem do Governo)</p>
                <strong style="font-size: 4mm">@projetorenascerrr</strong>
                <a style="font-size: 4mm; color: navy">projetorenascersejucrr@gmail.com</a>
            </td>
            <td>
                <img align="right" src="{{url('img/qrinstagram.png')}}" width="80">
            </td>
        </tr>
    </tbody>
</table>
   <br>
   <div align="center">

    <br><br>

    <table class="header topBorder" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="titulos">
                <td class="leftBorder rightBorder" style="width: 60%; background-color: #d9d9d9"></td>
                <td class="rightBorder" style="width: 40%; background-color: #ffee00"></td>
            </tr>
            <tr class="campos">
                <td class="leftBorder rightBorder" style="font-size: 6mm; text-align: center; color: navy; background-color: #d9d9d9">
                    RECIBO DE ENTRADA N.º {{ $order->id }}
                </td>
                <td class="rightBorder" style="font-size: 6mm; color: navy; background-color: #ffee00; text-align: center">
                    Valor: R$ {{ $order->valor_entrada }}
                </td>
            </tr>
            <tr class="titulos">
                <td class="leftBorder rightBorder" style="width: 60%; background-color: #d9d9d9"></td>
                <td class="rightBorder" style="width: 40%; background-color: #ffee00"></td>
            </tr>
        </tbody>
    </table>
    <table class="header topBorder" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="titulos">
            </tr>
            <tr class="campos">
            </tr>
        </tbody>
    </table>

    <br>

</div>
<br>
<hr>
<br><br>
<table cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="titulos">
            <td class="leftBorder rightBorder" style="width: 5%"></td>
            <td style="width: 90%"></td>
            <td class="rightBorder" style="width: 5%"></td>
        </tr>
        <tr class="campos ">
            <td></td>
            <td style="width: 90%; font-size: 4.5mm; text-transform: uppercase; text-align: justify;">
                Declaro por meio desta que recebi na data de
                <strong style="font-size: 5mm; color: navy;">{{date("d/m/Y", strtotime($order->data_entrada))}}</strong>
                a quantia de <strong style="font-size: 5mm; color: navy;">R$ {{ $order->valor_entrada }}</strong> do(a) Sr(a) <strong style="font-size: 5mm; color: navy">{{ $order->cliente }}</strong> CPF Nº <strong style="font-size: 5mm; color: navy">{{ $order->cpf }}</strong>.
                <br><br>
                Declaro também que o valor recebido refere-se a(os): 
                <strong style="font-size: 5mm; color: navy;">
                    @isset($order->q1)   {{ $order->q1 }}    @endisset
                    @isset($order->d1)   {{ $order->d1 }}    @endisset
                    @isset($order->d2)   {{ $order->d2 }},   @endisset
                    @isset($order->d3)   {{ $order->d3 }},   @endisset
                    @isset($order->d4)   {{ $order->d4 }},   @endisset
                    @isset($order->d5)   {{ $order->d5 }},   @endisset
                    @isset($order->d6)   {{ $order->d6 }},   @endisset
                    @isset($order->d7)   {{ $order->d7 }},   @endisset
                    @isset($order->d8)   {{ $order->d8 }},   @endisset
                    @isset($order->d9)   {{ $order->d9 }},   @endisset
                    @isset($order->d10)  {{ $order->d10 }},  @endisset
                    @isset($order->d11)  {{ $order->d11 }},  @endisset
                    @isset($order->d12)  {{ $order->d12 }},  @endisset
                    @isset($order->d13)  {{ $order->d13 }},  @endisset
                    @isset($order->d14)  {{ $order->d14 }},  @endisset
                    @isset($order->d15)  {{ $order->d15 }},  @endisset
                    
                    - ENTRADA DE R$ {{ $order->valor_entrada }} DIA {{date("d/m/Y", strtotime($order->data_entrada))}},
                    VALOR TOTAL DE R$ {{ $order->valor_total }} 
                   
                    <span style="font-size: 5mm; color: #404040;">
                    @isset($order->placa)  DO VEÍCULO:  @endisset
                    @empty($order->placa) DO OBJETO: @endempty
                    {{ $order->veiculo }} -  
                    @isset($order->placa)  PLACA: {{ $order->placa }}, @endisset
                    @empty($order->placa) @endempty
                    COR: {{ $order->cor }}</span>

                </strong> 
                no setor de <strong style="font-size: 5mm">{{ $order->categoria }}</strong> e que o mesmo equivale a entrada pelos serviços que vam ser prestados.
                <br><br>
                Sem mais e para que esta seja interpretada como verdadeira, firmo.
            </td>
            <td></td>
            <tr class="titulos">
                <td class="leftBorder rightBorder" style="width: 5%"></td>
                <td style="width: 90%"></td>
                <td class="rightBorder" style="width: 5%"></td>
            </tr>
        </tbody>
    </table>

    <br><br><br><br><br>

    <table cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="titulos">
                <td class="leftBorder rightBorder" style="width: 5%"></td>
                <td style="width: 90%"></td>
                <td class="rightBorder" style="width: 5%"></td>
            </tr>
            <tr class="campos">
                <td></td>
                <td style="width: 100%; font-size: 4.5mm; text-transform: uppercase; text-align: justify;">
                 BOA VISTA - RR, <strong style="font-size: 5mm; text-align: right;" id="data"></strong>

             </td>
             <td></td>
         </tr>
     </tbody>
 </table>

 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

 <table class="header" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="campos">
            <td style="font-size: 4mm; text-transform: uppercase; color: navy; text-align: center;">
                {{ $order->responsavel }}
            </td>
        </tr>
        <tr class="titulos">

            <td style="text-align: center;">
                Coordenador de Projetos
            </td>
        </tr>
    </tbody>
</table>

<br><br><br><br>

<hr>

<div style="display:block; float: center;">
    <p style="text-align: center;">
        <font style="font-size: 3mm">
            SIGEFIPRE - Sistema de Gestão e Financeiro do Projeto Renascer - Impresso em 
            <output id="data2"></output> às <output id="hora"></output>
        </font>
    </p>
</div>

<div>
    <output id="data" style="font-family: 'arial black', 'avant garde'; font-size: 3px;"></output>
</div>
<div>
    <output id="data2" style="font-family: 'arial black', 'avant garde'; font-size: 3px;"></output>
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
        document.getElementById("data2").innerHTML = dataFormat;
        document.getElementById("hora").innerHTML = horaFormat;

        setTimeout("atualizaRelogio()",1000);
    }
</script>

</html>