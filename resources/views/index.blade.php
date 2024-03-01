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
                            <path d="M12.6727 1.61162 20.7999 9H17.8267L12 3.70302 6 9.15757V19.0001H11V21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001 11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162ZM14 11H23V18H14V11ZM16 13V16H21V13H16ZM24 21H13V19H24V21Z"></path>
                        </svg>
                        Início
                    </h5>
                   </div>
                </div>
                <div class="card-body">
                   <p><strong class="text-secondary">Atenção!</strong></p>
                   <p>Ao enviar fotos para o Google Drive, atentar para o nome da imagem.</p>
                   <p>O nome da foto deve seguir o seguinte formato:  <i>up_dia_mês_ano_foto_número</i> </p>
                   <p><strong>Exemplo:</strong> seapcn_22_02_2024_foto_01.jpg</p>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection
