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
                                            d="M2 12H4V21H2V12ZM5 14H7V21H5V14ZM16 8H18V21H16V8ZM19 10H21V21H19V10ZM9 2H11V21H9V2ZM12 4H14V21H12V4Z">
                                        </path>
                                    </svg>
                                    Estatísticas
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="card mb-5">
                                <div class="card-header">
                                    <h6>Apreensões</h6>
                                </div>

                                <form action="{{ route('statistic.seizure') }}" method="post">
                                    @csrf

                                <div class="card-body">
                                    
                                            <div class="row">
                                                <label class="col-form-label mr-3 mt-1">Data Inicial</label>
                                                <div class="mr-5">
                                                    <input type="date" name="date1" class="form-control">
                                                </div>
                                                <label class="col-form-label mr-3 mt-1">Data Final</label>
                                                <div class="mr-3">
                                                    <input type="date" name="date2" class="form-control">
                                                </div>
                                            </div>
                                    
                                </div>

                                <div class="card-footer">
                                    <div>
                                        <button class="btn btn-success" type="submit" style="font-size: 13px">
                                            <i class="ri-file-excel-line"></i> Exportar Excel
                                        </button>
                                    </div>
                                </div>

                            </form>

                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h6>Êxitos</h6>
                                </div>

                                <form action="{{ route('statistic.success') }}" method="post">
                                    @csrf

                                <div class="card-body">
                                    

                                        <div class="row">
                                          <label class="col-form-label mr-3 mt-1">Data Inicial</label>
                                          <div class="mr-5">
                                              <input type="date" name="date1" class="form-control">
                                          </div>
                                          <label class="col-form-label mr-3 mt-1">Data Final</label>
                                          <div class="mr-3">
                                              <input type="date" name="date2" class="form-control">
                                          </div>
                                      </div>

                                    
                                </div>

                                <div class="card-footer">
                                    <div>
                                        <button class="btn btn-primary" type="submit" style="font-size: 13px">
                                            <i class="ri-file-word-line"></i> Exportar Word
                                        </button>
                                    </div>
                                </div>

                            </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
