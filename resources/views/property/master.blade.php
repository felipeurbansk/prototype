<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imobiliaria</title>
</head>

<body>
    <p><a href="<?= url('/') ?>">Visualizar Imoveis</a> | <a href="<?= url('/imoveis/create') ?>">Cadastrar Imovel</a>
    </p>
    @yield('content')
</body>

</html>
