@extends('layouts.web')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">
    Listagem dos usuários
    <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get" class="py-5">
    <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
</form>

<div>
    <!-- Topbar Search -->
    <form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar por..."
        aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>
</div>



<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-green">
        <thead class="thead-dark">
            <tr>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>DETALHES</th>
                <th>COMENTÁRIOS</th>
                <th>EDITAR</th>

            </tr>
        </thead>
        <tfoot class="thead-dark">
            <tr>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>DETALHES</th>
                <th>COMENTÁRIOS</th>
                <th>EDITAR</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($users as $user)
            <tr class="small">
                <td class="text-uppercase">
                    @if ($user->image)
                    <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}" class="object-cover w-20">
                    @else
                    <img src="{{ url("images/favicon.ico") }}" alt="{{ $user->name }}" class="object-cover w-20">
                    @endif
                    {{ $user->name }}
                </td>
                <td class="text-uppercase">{{ $user->email }}</td>

                <td class="text-uppercase">
                    <a href="{{ route('users.show', $user->id) }}" class="bg-orange-200 rounded-full py-2 px-6">Detalhes</a>
                </td>

                <td class="text-uppercase">
                    <a href="{{ route('comments.index', $user->id) }}" class="bg-blue-200 rounded-full py-2 px-6">Anotações ({{ $user->comments->count() }})</a>
                </td>
                <td class="text-uppercase">
                    <a href="{{ route('users.edit', $user->id) }}" class="bg-green-200 rounded-full py-2 px-6">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="py-4">
        {{ $users->appends([
        'search' => request()->get('search', '')
        ])->links() }}
    </div>

    @endsection
