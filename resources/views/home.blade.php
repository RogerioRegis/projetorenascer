@extends('layouts.web')

@section('title', 'Painel')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Painel</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Relatórios</a>
</div>

<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 bg-transparent border-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Relatório Anual</div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-primary"><i class="fas fa-dollar-sign text-gray-300"></i></button>
                        <a class="btn btn-group-lg btn-outline-primary font-weight-bold" href="{{url('#')}}" role="button">2019</a>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2 bg-transparent border-success">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Relatório Anual</div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button class="btn btn-success"><i class="fas fa-dollar-sign"></i></button>
                      <a class="btn btn-group-lg btn-outline-success font-weight-bold" href="{{url('#')}}" role="button">2020</a>
                  </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2 bg-transparent border-info">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Relatório Anual</div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button class="btn btn-info"><i class="fas fa-dollar-sign"></i></button>
                      <a class="btn btn-group-lg btn-outline-info font-weight-bold" href="{{url('order2021')}}" role="button">2021</a>
                  </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning border-warning shadow h-100 py-2 bg-transparent">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Relatório Anual</div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button class="btn btn-warning"><i class="fas fa-dollar-sign"></i></button>
                      <a class="btn btn-group-lg btn-outline-warning font-weight-bold" href="{{url('order2022')}}" role="button">2022</a>
                  </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary border-secondary shadow h-100 py-2 bg-transparent">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Relatório Anual</div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button class="btn btn-secondary"><i class="fas fa-dollar-sign"></i></button>
                      <a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('order2023')}}" role="button">2023</a>
                  </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger border-danger shadow h-100 py-2 bg-transparent">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Relatório Anual</div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button class="btn btn-danger"><i class="fas fa-dollar-sign"></i></button>
                      <a class="btn btn-group-lg btn-outline-danger font-weight-bold" href="{{url('order2024')}}" role="button">2024</a>
                  </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>

</div>


<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Identificação -->
        <div id="cardApproach" class="card shadow mb-4 bg-transparent text-white border-primary border-bottom-primary">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white text-uppercase">Endereço Projeto Renascer</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                    src="{{ url('img/LOGO_PROJETO_BGB_H.svg') }} " alt="LOGO_PROJETO">
                </div>
                <p class="text-center">
                    Av. Paulo Coelho Pereira, 538 – São Vicente. <br>
                    <a target="_blank" rel="nofollow" href="https://goo.gl/maps/8Ey9Q1VGzGfJjJLp8">CEP: 69303-380. </a> Boa Vista – RR.
                    <br>(Garagem do Governo)
                    Contato: (95) 9... <br>

                    <a href="mailto: agentavery@sample.com">projetorenascersejucrr@gmail.com</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">


        <div id="cardApproach" class="card shadow mb-4 bg-transparent text-white border-primary border-bottom-primary">
            <div id="cardApproachHeader" class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white text-uppercase">Objetivo</h6>
            </div>
            <div class="card-body">
                <p>O Governo de Roraima entende que a ressocialização é a chave para que um interno do sistema penitenciário possa ter melhores chances de recomeçar. Por conta disso, o Executivo, por meio da Sejuc (Secretaria de Justiça e Cidadania), vem coordenando o projeto Renascer, que visa dar oportunidades para os reeducandos que desejam voltar ao convívio social por meio da força do trabalho.</p>
                <p>A iniciativa oferece oficinas profissionalizantes voltadas as áreas de lava-jato, oficina mecânica, lanternagem e pintura, borracharia, marcenaria, serralheria e barbearia, com o objetivo de transformar as unidades prisionais em celeiros produtivos e de crescimento profissional.</p>
                <p>“É um projeto em que os reeducandos acabam aprendendo uma profissão e uns que já tinham a profissão acabam aprimorando. Isso incentiva [o interno] a ingressar no mercado de trabalho e não voltar a cometer delitos”, ressaltou.</p>
                <p>Tendo a premissa de que o projeto Renascer é aberto à sociedade, a população pode estar contribuindo com as atividades por meio de doações de materiais de insumo de trabalho, tais como madeira, ferro pra serralheria, pneus, itens de oficinas mecânicas, lava jato, marcenaria e serralheria, entre outros itens.</p>
                <p>A doação pode ser feita na sede da Sejuc, localizada na Avenida Getúlio Vargas, n° 8120, bairro São Vicente; ou na coordenação do projeto, que funciona na Garagem do Governo, localizada na Avenida Dr. Paulo Coelho Pereira, também no São Vicente, próximo ao Cemitério Municipal de Boa Vista.</p>
            </div>
        </div>

    </div>
</div>

@endsection
