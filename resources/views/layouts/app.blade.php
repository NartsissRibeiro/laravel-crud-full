<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
        <title>@yield('title', 'Cursos')</title> {{-- Permite manter título dinâmico --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js']) {{-- Importa Bootstrap e
        scripts --}}
</head>
<body>
    <div class="container mt-4">
        {{-- Exibe mensagem de sucesso, se houver --}}
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
        @endif
{{-- área para conteúdo das views filhas --}}
    @yield('content')
    </div>
</body>
</html>