@extends('layouts.list')

@section('title', 'Anos')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h3 class="h3 mb-0 text-gray-800">
		MÊS - <strong class="text-primary">{{ $month->month }}</strong> - {{ $month->year }}
	</h3>
    
    <div>
        <a href="{{ $month->id }}/edit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-edit fa-sm text-white-50"></i> EDITAR</a>
        <a href="{{url('month')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-reply fa-sm text-white-50"></i> VOLTAR</a>
    </div>

    </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">

      <div class="card-body small" >
         <div class="table-responsive">
            <table class="table table-bordered table-hover table-green" width="100%" cellspacing="0">
               <thead class="thead-dark">
                  <tr class="small">
                     <th>DIA</th>
                     <th>MÊS</th>
                     <th>ENTRADA</th>
                     <th>SAÍDA</th>
                     <th>ENTRADA</th>
                     <th>SAÍDA</th>
                     <th>ASSINATURA</th>
                 </tr>
             </thead>
		<tbody>
        @isset($month->ativo_01)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_01)<tr class="campos">@endempty
            <th>1</th>
            <th>{{ $month->week_01 }}</th>
            <th>{{ $month->entrada_a01 }}</th>
            <th>{{ $month->saida_a01 }}</th>
            <th>{{ $month->entrada_b01 }}</th>
            <th>{{ $month->saida_b01 }}</th>
            <th>{{ $month->ass_01 }}</th>
        </tr>
        <!-- DIA 02 -->
        @isset($month->ativo_02)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_02)<tr class="campos">@endempty
            <th class="leftBorder topBorder">2</th>
            <th class="leftBorder topBorder">{{ $month->week_02 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a02 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a02 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b02 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b02 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_02 }}</th>
        </tr>
        <!-- DIA 03 -->
        @isset($month->ativo_03)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_03)<tr class="campos">@endempty
            <th class="leftBorder topBorder">3</th>
            <th class="leftBorder topBorder">{{ $month->week_03 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a03 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a03 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b03 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b03 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_03 }}</th>
        </tr>
        <!-- DIA 04 -->
        @isset($month->ativo_04)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_04)<tr class="campos">@endempty
            <th class="leftBorder topBorder">4</th>
            <th class="leftBorder topBorder">{{ $month->week_04 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a04 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a04 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b04 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b04 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_04 }}</th>
        </tr>
        <!-- DIA 05 -->
        @isset($month->ativo_05)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_05)<tr class="campos">@endempty
            <th class="leftBorder topBorder">5</th>
            <th class="leftBorder topBorder">{{ $month->week_05 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a05 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a05 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b05 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b05 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_05 }}</th>
        </tr>
        <!-- DIA 06 -->
        @isset($month->ativo_06)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_06)<tr class="campos">@endempty
            <th class="leftBorder topBorder">6</th>
            <th class="leftBorder topBorder">{{ $month->week_06 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a06 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a06 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b06 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b06 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_06 }}</th>
        </tr>
        <!-- DIA 07 -->
        @isset($month->ativo_07)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_07)<tr class="campos">@endempty
            <th class="leftBorder topBorder">7</th>
            <th class="leftBorder topBorder">{{ $month->week_07 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a07 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a07 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b07 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b07 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_07 }}</th>
        </tr>
        <!-- DIA 08 -->
        @isset($month->ativo_08)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_08)<tr class="campos">@endempty
            <th class="leftBorder topBorder">8</th>
            <th class="leftBorder topBorder">{{ $month->week_08 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a08 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a08 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b08 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b08 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_08 }}</th>
        </tr>
        <!-- DIA 09 -->
        @isset($month->ativo_09)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_09)<tr class="campos">@endempty
            <th class="leftBorder topBorder">9</th>
            <th class="leftBorder topBorder">{{ $month->week_09 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a09 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a09 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b09 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b09 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_09 }}</th>
        </tr>
        <!-- DIA 10 -->
        @isset($month->ativo_10)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_10)<tr class="campos">@endempty
            <th class="leftBorder topBorder">10</th>
            <th class="leftBorder topBorder">{{ $month->week_10 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a10 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a10 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b10 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b10 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_10 }}</th>
        </tr>
        <!-- DIA 11 -->
        @isset($month->ativo_11)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_11)<tr class="campos">@endempty
            <th class="leftBorder topBorder">11</th>
            <th class="leftBorder topBorder">{{ $month->week_11 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a11 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a11 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b11 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b11 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_11 }}</th>
        </tr>
        <!-- DIA 12 -->
        @isset($month->ativo_12)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_12)<tr class="campos">@endempty
            <th class="leftBorder topBorder">12</th>
            <th class="leftBorder topBorder">{{ $month->week_12 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a12 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a12 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b12 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b12 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_12 }}</th>
        </tr>
        <!-- DIA 13 -->
        @isset($month->ativo_13)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_13)<tr class="campos">@endempty
            <th class="leftBorder topBorder">13</th>
            <th class="leftBorder topBorder">{{ $month->week_13 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a13 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a13 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b13 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b13 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_13 }}</th>
        </tr>
        <!-- DIA 14 -->
        @isset($month->ativo_14)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_14)<tr class="campos">@endempty
            <th class="leftBorder topBorder">14</th>
            <th class="leftBorder topBorder">{{ $month->week_14 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a14 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a14 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b14 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b14 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_14 }}</th>
        </tr>
        <!-- DIA 15 -->
        @isset($month->ativo_15)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_15)<tr class="campos">@endempty
            <th class="leftBorder topBorder">15</th>
            <th class="leftBorder topBorder">{{ $month->week_15 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a15 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a15 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b15 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b15 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_15 }}</th>
        </tr>
        <!-- DIA 16 -->
        @isset($month->ativo_16)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_16)<tr class="campos">@endempty
            <th class="leftBorder topBorder">16</th>
            <th class="leftBorder topBorder">{{ $month->week_16 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a16 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a16 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b16 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b16 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_16 }}</th>
        </tr>
        <!-- DIA 17 -->
        @isset($month->ativo_17)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_17)<tr class="campos">@endempty
            <th class="leftBorder topBorder">17</th>
            <th class="leftBorder topBorder">{{ $month->week_17 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a17 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a17 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b17 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b17 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_17 }}</th>
        </tr>
        <!-- DIA 18 -->
        @isset($month->ativo_18)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_18)<tr class="campos">@endempty
            <th class="leftBorder topBorder">18</th>
            <th class="leftBorder topBorder">{{ $month->week_18 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a18 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a18 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b18 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b18 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_18 }}</th>
        </tr>
        <!-- DIA 19 -->
        @isset($month->ativo_19)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_19)<tr class="campos">@endempty
            <th class="leftBorder topBorder">19</th>
            <th class="leftBorder topBorder">{{ $month->week_19 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a19 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a19 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b19 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b19 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_19 }}</th>
        </tr>
        <!-- DIA 20 -->
        @isset($month->ativo_20)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_20)<tr class="campos">@endempty
            <th class="leftBorder topBorder">20</th>
            <th class="leftBorder topBorder">{{ $month->week_20 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a20 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a20 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b20 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b20 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_20 }}</th>
        </tr>
        <!-- DIA 21 -->
        @isset($month->ativo_21)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_21)<tr class="campos">@endempty
            <th class="leftBorder topBorder">21</th>
            <th class="leftBorder topBorder">{{ $month->week_21 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a21 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a21 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b21 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b21 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_21 }}</th>
        </tr>
        <!-- DIA 22 -->
        @isset($month->ativo_22)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_22)<tr class="campos">@endempty
            <th class="leftBorder topBorder">22</th>
            <th class="leftBorder topBorder">{{ $month->week_22 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a22 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a22 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b22 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b22 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_22 }}</th>
        </tr>
        <!-- DIA 23 -->
        @isset($month->ativo_23)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_23)<tr class="campos">@endempty
            <th class="leftBorder topBorder">23</th>
            <th class="leftBorder topBorder">{{ $month->week_23 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a23 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a23 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b23 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b23 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_23 }}</th>
        </tr>
        <!-- DIA 24 -->
        @isset($month->ativo_24)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_24)<tr class="campos">@endempty
            <th class="leftBorder topBorder">24</th>
            <th class="leftBorder topBorder">{{ $month->week_24 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a24 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a24 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b24 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b24 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_24 }}</th>
        </tr>
        <!-- DIA 25 -->
        @isset($month->ativo_25)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_25)<tr class="campos">@endempty
            <th class="leftBorder topBorder">25</th>
            <th class="leftBorder topBorder">{{ $month->week_25 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a25 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a25 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b25 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b25 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_25 }}</th>
        </tr>
        <!-- DIA 26 -->
        @isset($month->ativo_26)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_26)<tr class="campos">@endempty
            <th class="leftBorder topBorder">26</th>
            <th class="leftBorder topBorder">{{ $month->week_26 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a26 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a26 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b26 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b26 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_26 }}</th>
        </tr>
        <!-- DIA 27 -->
        @isset($month->ativo_27)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_27)<tr class="campos">@endempty
            <th class="leftBorder topBorder">27</th>
            <th class="leftBorder topBorder">{{ $month->week_27 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a27 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a27 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b27 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b27 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_27 }}</th>
        </tr>
        <!-- DIA 28 -->
        @isset($month->ativo_28)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_28)<tr class="campos">@endempty
            <th class="leftBorder topBorder">28</th>
            <th class="leftBorder topBorder">{{ $month->week_28 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a28 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a28 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b28 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b28 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_28 }}</th>
        </tr>
        <!-- DIA 29 -->
        @isset($month->ativo_29)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_29)<tr class="campos">@endempty
            <th class="leftBorder topBorder">29</th>
            <th class="leftBorder topBorder">{{ $month->week_29 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a29 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a29 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b29 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b29 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_29 }}</th>
        </tr>
        <!-- DIA 30 -->
        @isset($month->ativo_30)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_30)<tr class="campos">@endempty
            <th class="leftBorder topBorder">30</th>
            <th class="leftBorder topBorder">{{ $month->week_30 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a30 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a30 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b30 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b30 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_30 }}</th>
        </tr>
        <!-- DIA 31 -->
        @if (($month->ativo_31)=="OCULTO")
        
        @else
        @isset($month->ativo_31)<tr class="campos" style="background-color: #dedcdc;">@endisset
        @empty($month->ativo_31)<tr class="campos">@endempty
            <th class="leftBorder topBorder">31</th>
            <th class="leftBorder topBorder">{{ $month->week_31 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_a31 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_a31 }}</th>
            <th class="leftBorder topBorder">{{ $month->entrada_b31 }}</th>
            <th class="leftBorder topBorder">{{ $month->saida_b31 }}</th>
            <th class="leftBorder rightBorder topBorder">{{ $month->ass_31 }}</th>
        </tr>
        @endif
		</tbody>
		</table>
		</div>
		</div>

	@endsection