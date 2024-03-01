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
                        <svg  class="svg-icon mr-1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                           <path d="M5 4.60434V13.7889C5 15.1263 5.6684 16.3752 6.7812 17.1171L12 20.5963L17.2188 17.1171C18.3316 16.3752 19 15.1263 19 13.7889V4.60434L12 3.04879L5 4.60434ZM3.78307 2.82598L12 1L20.2169 2.82598C20.6745 2.92766 21 3.33347 21 3.80217V13.7889C21 15.795 19.9974 17.6684 18.3282 18.7812L12 23L5.6718 18.7812C4.00261 17.6684 3 15.795 3 13.7889V3.80217C3 3.33347 3.32553 2.92766 3.78307 2.82598ZM12 13.5L9.06107 15.0451L9.62236 11.7725L7.24472 9.45492L10.5305 8.97746L12 6L13.4695 8.97746L16.7553 9.45492L14.3776 11.7725L14.9389 15.0451L12 13.5Z"></path>
                        </svg>
                        Apreensões
                     </h5>
                   </div>
                </div>
                <div class="card">

                  <form action="{{route('seizure.store')}}" method="post">
                      @csrf

                  <div class="card-body">

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
                                  <p>{{Session::get('success')}}</p>
                              </div>

                          @endif


                      <table class="table" id="table">
                          <tr>
                              <td>Unidade Prisional</td>
                              <td>Coordenação</td>
                              <td>Data</td>
                              <td>Tipo de Apreensão</td>
                              <td>Unds / Gramas</td>
                              <td class="text-center">Ação</td>
                          </tr>
                          <tr>
                              <td>
                                  <select name="prisional_unity_id[]"  class="form-control">
                                      <option value="">Selecione uma unidade</option>
                                      @foreach ($prisionalUnities as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                      @endforeach
                                  </select>
                              </td>
                              <td>
                                <select name="coordination_id[]"  class="form-control">
                                    <option value="">Selecione uma coordenação</option>
                                    @foreach ($coordinations as $item)
                                      <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                             </td>
                              <td>
                                  <input class="form-control" type="date" name="date[]">
                              </td>
                              <td>
                                  <select name="seizure_type_id[]"  class="form-control">
                                      <option value="">Selecione um tipo</option>
                                      @foreach ($seizureTypes as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                      @endforeach
                                  </select>
                              </td>
                              <td>
                                  <input type="number" name="amount[]" placeholder="digite a quantidade" class="form-control">
                              </td>
                              <td class="text-center">
                                  <button type="button" name="add" id="add" class="btn btn-success">
                                    <i class="ri-add-circle-line"></i>
                                  </button>
                              </td>
                          </tr>
                      </table>

                  </div>

                  <div class="card-footer">
                      <button type="submit" class="btn btn-primary ">Cadastrar</button>
                  </div>

                  </form>

              </div>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection

@section('script')

<script>
    var i = 0;
    $('#add').click(function(){
        ++i;
        $('#table').append(
            `<tr>
                <td>
                    <select name="prisional_unity_id[]"  class="form-control">
                        <option value="">Selecione uma unidade</option>
                        @foreach ($prisionalUnities as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                         @endforeach
                    </select>
                </td>
                <td>
                    <select name="coordination_id[]"  class="form-control">
                        <option value="">Selecione uma coordenação</option>
                        @foreach ($coordinations as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input class="form-control" type="date" name="date[]">
                </td>
                <td>
                    <select name="seizure_type_id[]"  class="form-control">
                        <option value="">Selecione um tipo</option>
                        @foreach ($seizureTypes as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="number" name="amount[]" placeholder="digite a quantidade" class="form-control">
                </td>
                <td class="text-center">
                    <button type="button" name="add" id="add" class="btn btn-secondary remove-table-row">
                     <i class="ri-indeterminate-circle-line"></i>
                    </button>
                </td>
            </tr>
            `);
    });

    $(document).on('click', '.remove-table-row', function(){
        $(this).parents('tr').remove();
    });
</script>

@endsection
