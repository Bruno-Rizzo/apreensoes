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
                        <svg class="svg-icon mr-1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                           <path d="M6.9998 6V3C6.9998 2.44772 7.44752 2 7.9998 2H19.9998C20.5521 2 20.9998 2.44772 20.9998 3V17C20.9998 17.5523 20.5521 18 19.9998 18H16.9998V20.9991C16.9998 21.5519 16.5499 22 15.993 22H4.00666C3.45059 22 3 21.5554 3 20.9991L3.0026 7.00087C3.0027 6.44811 3.45264 6 4.00942 6H6.9998ZM5.00242 8L5.00019 20H14.9998V8H5.00242ZM8.9998 6H16.9998V16H18.9998V4H8.9998V6ZM7 11H13V13H7V11ZM7 15H13V17H7V15Z"></path>
                        </svg>
                        Êxitos
                     </h5>
                   </div>
                </div>
                <div class="card-body">
                  <form action="{{route('success.update', $success->id)}}" method="post">
                    @method('PUT')
                     @csrf

                         @if ($errors->any())
                             <div class="alert alert-danger">

                                 <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>

                             </div>
                         @endif

                         @if (Session::has('success'))
                             <div class="alert alert-success text-center">
                                 <p>{{ Session::get('success') }}</p>
                             </div>
                         @endif


                         <div class="row mb-3">
                             <label class="col-sm-2 col-form-label">Data</label>
                             <div class="col-sm-4">
                                 <input type="date" class="form-control" name="date" value="{{$success->date}}" @readonly(true)>
                             </div>
                         </div>

                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Setor</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sector_id" value="{{$success->sector->name}}"  @readonly(true)>
                            </div>
                        </div>

                         <div class="row mb-3">
                             <label class="col-sm-2 col-form-label">Chefe / Superintendente</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="boss_name" value="{{$success->boss_name}}"  @readonly(true)>
                             </div>
                             <label class="col-sm-1 col-form-label text-right">ID</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="boss_id" value="{{$success->boss_id}}"  @readonly(true)>
                             </div>
                         </div>

                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Coordenação de Área</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="coordination_id" value="{{$success->coordination->name}}"  @readonly(true)>
                            </div>
                        </div>

                        <div class="row mb-3">
                             <label class="col-sm-2 col-form-label">Coordenador</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="coordination_boss_name" value="{{$success->coordination_boss_name}}"  @readonly(true)>
                             </div>
                             <label class="col-sm-1 col-form-label text-right">ID</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="coordination_boss_id" value="{{$success->coordination_boss_id}}"  @readonly(true)>
                             </div>
                         </div>

                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Unidade Prisional</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="prisional_unity_id" value="{{$success->prisionalUnity->name}}"  @readonly(true)>
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Perfil</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="faction_id" value="{{$success->faction->name}}"  @readonly(true)>
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Regime</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="regime_id" value="{{$success->regime->name}}"  @readonly(true)>
                            </div>
                        </div>

                         <div class="row mb-3">
                             <label class="col-sm-2 col-form-label">Diretor</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="director_name" value="{{$success->director_name}}"  @readonly(true)>
                             </div>
                             <label class="col-sm-1 col-form-label text-right">ID</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="director_id" value="{{$success->director_id}}"  @readonly(true)>
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label class="col-sm-2 col-form-label">Subdiretor</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="subdirector_name" value="{{$success->subdirector_name}}"  @readonly(true)>
                             </div>
                             <label class="col-sm-1 col-form-label text-right">ID</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="subdirector_id" value="{{$success->subdirector_id}}"  @readonly(true)>
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label class="col-sm-2 col-form-label">Chefe de Segurança</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="security_boss_name" value={{$success->security_boss_name}}  @readonly(true)>
                             </div>
                             <label class="col-sm-1 col-form-label text-right">ID</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="security_boss_id" value={{$success->security_boss_id}}  @readonly(true)>
                             </div>
                         </div>

                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Chefe de Turma</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="team_boss_name" value="{{$success->team_boss_name}}"  @readonly(true)>
                            </div>
                            <label class="col-sm-1 col-form-label text-right">ID</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="team_boss_id" value="{{$success->team_boss_id}}"  @readonly(true)>
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Número R.O.</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="ro_number" value="{{$success->ro_number}}">
                             </div>
                             <label class="col-sm-1 col-form-label text-right">Nº Lacre</label>
                             <div class="col-sm-4">
                                 <input type="text" class="form-control" name="seal_number" value="{{$success->seal_number}}">
                             </div>
                        </div>

                         <div class="row mb-3">
                             <label class="col-sm-2 col-form-label">Dinâmica do Fato</label>
                             <div class="col-sm-9">
                                 <textarea class="form-control" rows="4" name="dynamics_of_fact">{{$success->dynamics_of_fact}}</textarea>
                             </div>
                         </div>

                     <div class="card-footer">
                         <button type="submit" class="btn btn-primary ms-2 mt-2 mb-2 me-2">Editar</button>
                     </div>

                 </form>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection
