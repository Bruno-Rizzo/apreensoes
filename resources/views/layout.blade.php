<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Apreensões e Êxitos</title>
</head>
<body>

    <div style="margin: auto; width:90%" class="pt-2">

        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('index')}}">Cadastro</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('seizure.index')}}">Apreensões</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('success.index')}}">Êxitos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Pesquisar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Estatísticas</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    @yield('content')

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    @yield('script')


</body>
</html>
