<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Amarijo">
    <title>Controle de Chamados</title>
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
    ])
    
</head>

<body>
    <header>
        <!-- Navbar fixa -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <a class="navbar-brand" href="#">Controle de Chamados</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chamados.index') }}">Chamados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('setores.index') }}">Setores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('situacoes.index') }}">Situações</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="container">
    </header>