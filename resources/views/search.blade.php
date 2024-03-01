@extends('layouts.app')

@section('content')

    <div class="content-page">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-12">

                    <div class="card">

                        <div class="card-header d-flex justify-content-between">

                            <div class="header-title">
                                <h5 class="card-title">
                                    <svg class="svg-icon mr-1" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M15.5 5C13.567 5 12 6.567 12 8.5C12 10.433 13.567 12 15.5 12C17.433 12 19 10.433 19 8.5C19 6.567 17.433 5 15.5 5ZM10 8.5C10 5.46243 12.4624 3 15.5 3C18.5376 3 21 5.46243 21 8.5C21 9.6575 20.6424 10.7315 20.0317 11.6175L22.7071 14.2929L21.2929 15.7071L18.6175 13.0317C17.7315 13.6424 16.6575 14 15.5 14C12.4624 14 10 11.5376 10 8.5ZM3 4H8V6H3V4ZM3 11H8V13H3V11ZM21 18V20H3V18H21Z">
                                        </path>
                                    </svg>
                                    Pesquisas
                                </h5>
                            </div>

                        </div>

                        <div class="card-body">


                            <div class="card">
                                <div class="card-body">

                                    <form action="{{ route('search.result') }}" method="post">
                                        @csrf

                                        <div class="d-flex">

                                            <div class="col-5 me-4">
                                                <select name="prisional_unity_id" class="form-control">
                                                    <option value="">Selecione uma unidade</option>
                                                    @foreach ($prisionalUnities as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-2 mr-3">
                                                <input class="form-control" type="date" name="date">
                                            </div>

                                            <div class="mt-1">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="ri-search-line"></i>
                                                </button>

                                            </div>

                                        </div>

                                    </form>

                                </div>
                            </div>

                            @if (Route::is('search.result'))

                            <div class="card">
                                <div class="card-header">
                                    <h6>Apreensões</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="table">
                                        <tr>
                                            <td>Unidade Prisional</td>
                                            <td>Coordenação</td>
                                            <td>Data</td>
                                            <td>Tipo de Apreensão</td>
                                            <td>Unds / Gramas</td>
                                        </tr>
                                        @foreach ($seizures as $item)
                                            <tr>

                                                <td>{{ $item->prisionalUnity->name }}</td>
                                                <td>{{ $item->coordination->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                                                </td>
                                                <td>{{ $item->seizureType->name }}</td>
                                                <td>{{ $item->amount }}</td>

                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h6>Êxitos</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table" table-bordered table-striped" id="table"">
                                        @foreach ($successes as $item)
                                            <tr>
                                                <td>
                                                    <span>Data:</span>  <i>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Setor:</span> <i>{{ $item->sector->name }}</i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Chefe / Superintendente: </span> <i>{{ $item->boss_name }}</i>
                                                    <span class="ml-3">ID: </span> <i>{{ $item->boss_id }}</i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Coordenação de Área:</span>  <i> {{ $item->coordination->name }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Coordenador: </span> <i>{{ $item->coordination_boss_name }}</i></span>
                                                    <span class="ml-3">ID: </span> <i>{{ $item->coordination_boss_id }}</i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <span>Unidade Prisional:</span> <i> {{ $item->prisionalUnity->name }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Perfil:</span> <i> {{ $item->faction->name }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Regime:</span> <i> {{ $item->regime->name }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Diretor:</span> <i>{{ $item->director_name }}</i>
                                                    <span class="ml-3">ID:</span> <i>{{ $item->director_id }}</i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Subdiretor:</span> <i>{{ $item->subdirector_name }}</i>
                                                    <span class="ml-3">ID:</span> <i>{{ $item->subdirector_id }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Chefe de Segurança:</span> <i>{{ $item->security_boss_name }}</i>
                                                    <span class="ml-3">ID:</span> <i>{{ $item->security_boss_id }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Número do R.O.:</span> <i> {{ $item->ro_name }}</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <span> Dinâmica do Fato:</span> <i> {{ $item->dynamics_of_fact }}</i>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                            @endif

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
