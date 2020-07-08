<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <title>Imobiliaria</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Lara<b>Dev</b></a>
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item"><a class="nav-link" href="<?= url('/') ?>">Visualizar Imoveis</a></li>
            <li class="navbar-item"><a class="nav-link" href="<?= url('/imoveis/create') ?>">Cadastrar Imovel</a>
            </li>
        </ul>
    </nav>

    @yield('content')

    <script src="<?= asset('js/app.js') ?>"></script>

</body>

</html>
