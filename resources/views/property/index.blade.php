@extends('property.master')

@section('content')
<div class="container">
    <table class="table table-striped table-hover my-5">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imoveis as $imovel)
            <tr>
                <td>{{$imovel->name}}</td>
                <td>{{$imovel->price}}</td>
                <td>
                    <p>
                        <a href="<?= url('/imoveis/edit/'.$imovel->id) ?>">Editar</a>
                        |
                        <a href="<?= url('/imoveis/destroy/'.$imovel->id) ?>">Excluir</a>
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
