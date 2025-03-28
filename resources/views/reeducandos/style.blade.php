        <style type="text/css">
        	@media    print {
        		.no-print, .no-print *
        		{
        			display: none !important;
        		}
        	}
        	@media    screen , print { /* *** TIPOGRAFIA BASICA *** */
        		* {
        			font-family: Calibri;
        			font-size: 4mm;
        			margin: 0mm;
        			padding: -1mm;
        		}

        		#midiv {
        			width: 600px ;
        			margin-left: auto ;
        			margin-right: auto ;
        			text-align: center;
        		}

        		#miid {
        			display: inline;
        			margin: 20px;
        		}
        		.notice {
        			color: red;
        		}
        		p {
        			display: block;
        			-webkit-margin-before: 0em;
        			-webkit-margin-after: 0em;
        		}

        		/* *** LINHAS GERAIS *** */
        		#container {
        			width: 200mm;
        			margin: 0mm auto;
        		}
        		#instructions {
        			margin: 0mm;
        		}
        		#boleto {
        			width: 200mm;;
        			margin: 0mm auto;
        			padding: 0mm;
        		}

        		/* *** CABECALHO *** */
            /*            #instr_header {
                            background: url('imagens/logo_empresa.png') no-repeat top left;
                            padding-left: 40mm;
                            height: 12mm;
                        }
                        #instr_header h1 {
                            font-size: 5mm;
                            margin: 1mm 0mm;
                        }
                        #instr_header address {
                            font-style: normal;
                            }*/
                            #instr_content {

                            }
                            #instr_content h2 {
                            	font-size: 2.5mm;
                            	font-weight: bold;
                            }
                            #instr_content p {
                            	font-size: 2.5mm;
                            	margin: 1mm 0mm;
                            }
                            #instr_content ol {
                            	font-size: 2.5mm;
                            	margin: 1mm 0;
                            }
                            #instr_content ol li {
                            	font-size: 2.5mm;
                            	text-indent: 1mm;
                            	margin: 0mm 0mm;
                            	/*list-style-position: inside;*/
                            }
                            #instr_content ol li p {
                            	font-size: 2.5mm;
                            	padding-bottom: 1mm;
                            }

                            /* *** BOLETO *** */
                            #boleto .cut {
                            	width: 200mm;
                            	margin: 3mm auto;
                            }
                            #boleto .cut p {
                            	margin: 0 0 1mm 0;
                            	padding: 0mm;
                            	font-size: 2.6mm;
                            	color: navy;
                            }
                            table.header {
                            	width: 200mm;
                            	padding-bottom: 0mm;
                            }
                            table.header div.field_cod_banco {
                            	width: 15mm;
                            	margin-left: 1mm;
                            	text-align: center;
                            	font-size: 5mm;
                            	font-weight: bold;
                            	color: black;
                            	/*height: 4mm;*/
                            	height: 7mm;
                            	/*padding-top: 1mm;*/
                            	padding-top: 3mm;
                            }
                            table.header td.linha_digitavel {
                            	width: /*122mm*/ 105mm;
                            	text-align: right;
                            	font: bold 4mm Arial;
                            	color: navy;
                            	padding-top: 1mm;
                            }
                            table.line {
                            	margin-bottom: 0mm;
                            	padding-bottom: 0mm;
                            }
                            table.line tr.titulos td {
                            	height: 2.6mm;
                            	font-size: 2.6mm;
                            	padding-left: 1mm;
                            }
                            table.line tr.campos td {
                            	height: 2.6mm;
                            	font-size: 2.6mm;
                            	color: black;
                            	padding-left: 1mm;
                            	font-weight: bold;
                            }

                            table.line td p {
                            	font-size: 2.5mm /*2.6*/;
                            }
                            table.line tr.campos td.ag_cod_cedente,table.line tr.campos td.nosso_numero,table.line tr.campos td.valor_doc,table.line tr.campos td.vencimento2,table.line tr.campos td.ag_cod_cedente2,
                            /*table.line tr.campos td.nosso_numero2,*/ table.line tr.campos td.xvalor,table.line tr.campos td.valor_doc2
                            {
                            	text-align: right;
                            }
                            table.line tr.campos td.especie,table.line tr.campos td.qtd,
                            /*table.line tr.campos td.vencimento,*/ table.line tr.campos td.especie_doc,table.line tr.campos td.aceite,table.line tr.campos td.carteira,table.line tr.campos td.especie2,table.line tr.campos td.qtd2
                            {
                            	text-align: center;
                            }
                            table.line td.last_line {
                            	vertical-align: top;
                            }
                            table.line td.last_line table.line { /*margin-bottom: -1mm;*/
                            	border: 0 white none;
                            }
                            td.last_line table.line td.instrucoes {
                /*padding-left: 1mm;
                padding-bottom: 0;
                margin-bottom: 0;*/
                vertical-align: top;
            }
            table.line td.cedente {
            	width: 78mm;
            }
            table.line td.valor_cobrado2 {
            	padding-bottom: 0;
            	margin-bottom: 0;
            }
            table.line td.ag_cod_cedente {
            	width: 36mm;
            }
            table.line td.especie {
            	width: 9mm;
            }
            table.line td.qtd {
            	width: 14mm;
            }
            table.line td.nosso_numero {
            	width: /*40*/ 25mm;
            	/*padding-right:1mm;*/
            }
            table.line td.num_doc { /*width:34mm;*/
            	width: 104mm;
            }
            table.line td.contrato {
            	width: 19mm;
            }
            table.line td.cpf_cei_cnpj {
            	width: 35mm;
            }
            table.line td.vencimento {
            	width: 27mm;
            }
            table.line td.valor_doc {
            	width: /*56*/ 38mm;
            	/*padding-right: 1mm;*/
            }
            table.line td.desconto {
            	width: 36mm;
            }
            table.line td.outras_deducoes {
            	width: 30mm;
            }
            table.line td.mora_multa {
            	width: 30mm;
            }
            table.line td.outros_acrescimos { /*width: 30mm;*/
            	width: 37mm;
            }
            table.line td.valor_cobrado {
            	width: 29mm;
            	/*padding-right: 1mm;*/
            	background-color: #ffc;
            }
            table.line td.sacado {
            	width: /*168*/ 171mm;
            }
            table.line td.local_pagto {
            	width: 124mm;
            }
            table.line td.vencimento2 {
            	width: 43mm /*46*/;
            	/*padding-right: 46mm;*/
            	background-color: #ffc;
            }
            table.line td.cedente2 {
            	width: 124mm;
            }
            table.line td.ag_cod_cedente2 {
            	width: 43mm;
            	/*padding-right: 1mm;*/
            }
            table.line td.data_doc {
            	width: /*34*/ 29mm;
            }
            table.line td.num_doc2 {
            	width: /*37*/ 25mm;
            }
            table.line td.especie_doc {
            	width: 20mm;
            }
            table.line td.aceite {
            	width: 20mm;
            }
            table.line td.data_process {
            	width: 30mm;
            }
            table.line td.nosso_numero2 { /*width: 24mm;*/
            	width: 44mm;
            }
            table.line td.reservado {
            	width: 24mm;
            	background-color: #ffc;
            }
            table.line td.carteira {
            	width: 25mm;
            }
            table.line td.especie2 {
            	width: 14mm;
            }
            table.line td.qtd2 {
            	width: 35mm;
            }
            table.line td.xvalor { /*width: 18mm;*/
            	width: 20mm;
            }
            table.line td.valor_doc2 { /*width: 32mm;*/
            	width: 42mm;
            }
            table.line td.instrucoes {
            	width: 126mm;
            }
            table.line td.desconto2 {
            	width: 41.5mm;
            	/*padding-right: 1mm;*/
            }
            table.line td.outras_deducoes2 {
            	width: 41.5mm;
            	/*padding-right: 1mm;*/
            }
            table.line td.mora_multa2 {
            	width: 41.5mm;
            	/*padding-right: 1mm;*/
            }
            table.line td.outros_acrescimos2 {
            	width: 41.5mm;
            	/*padding-right: 1mm;*/
            }
            table.line td.valor_cobrado2 {
            	width: 41.5mm;
            	/*padding-right: 1mm;*/
            	background-color: #ffc;
            }
            table.line td.sacado2 {
            	width: 171mm;
            }
            table.line td.sacador_avalista {
            	width: 171mm;
            }
            table.line tr.campos td.sacador_avalista {
            	width: 124mm;
            }
            table.line td.cod_baixa {
            	color: navy;
            	width: 42mm;
            }
            div.footer {
            	margin-bottom: 0mm;
            }
            div.footer p {
            	width: 32.6mm;
            	margin: 0;
            	padding: 0;
            	padding-left: 138mm;
            	font-size: 2.6mm;
            	color: navy;
            }
            div.barcode {
            	width: 121mm;
            	margin-left:6mm;
            }
            div.barcode p{
            	font-size: 0px;
            }



            .alignRight{
            	text-align: right;
            }
            .rightField{
            	width: 44mm /*46*/;
            	border-left: 1px solid black;
            	padding-left: 5px;
            	font-size: 9px;
            }

            .rightInput{
            	width: 43mm /*46*/;
            	border-left: 1px solid black;
            	padding-top:5px;
            }
            .leftField{
            	width: 32mm;
            }
            .largeField{
            	width: 30mm /*46*/;
            }
            .largeTopField{
            	width:50mm
            }
            .mediumField{
            	width: 15mm /*46*/;
            }
            .line{
            	border-top: 0.1px solid #545454;
            }
            .rightBorder{
            	border-right: 0.1px solid #545454;

            	padding-left:2mm;
            }
            .leftBorder{
            	border-left: 0.1px solid #545454;
            }
            .bottomBorder{
            	border-bottom: 0.1px solid #545454;
            }
            .topBorder{
            	border-top: 0.1px solid #545454;
            }

            table.header tr.titulos td {
            	height: 2.6mm;
            	font-size: 15px;
            	padding-left: 1mm;
            }
            table.header tr.campos td {
            	height: 2.6mm;
            	font-size: 14px;
            	color: black;
            	padding-left: 2mm;
            	font-weight: bold;
            }
            .logo img{
            	height: 50px;
            	padding-top: 10px;
            }
            .instructionsGeneric p {
            	font-size: 2.9mm !important;
            }

        }

        @media    print {
        	#instructions {
        		height: 0mm;
        		visibility: hidden;
        		overflow: hidden;
        	}
        }
    </style>