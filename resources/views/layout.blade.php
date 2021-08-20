<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gerenciamento - @yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
    <div class="container-fluid">    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/produtos') }}">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/cadastro') }}">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sobre</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                    </form>
                </div>
            </div>
        </nav>

        @section('conteudo')
            
        @show
    </div>
    </body>
</html>
