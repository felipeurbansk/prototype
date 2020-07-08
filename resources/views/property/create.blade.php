@extends('property.master')

@section('content')
<div class="container">
    <h2>@isset($imovel) Editar @else Cadastrar @endisset novo imóvel</h2>
    <form action="@isset($imovel) {{url('/imoveis/update/'.$imovel->id)}} @else {{url('/imoveis/store')}} @endisset"
        method="post">
        @csrf
        @isset($imovel) @method('PUT') @endisset

        <div class="form-group">
            <span for="name">Name</span>
            <input class="form-control" type="text" name="name" @isset($imovel) value="{{$imovel->name}}" @endisset
                id="name">
        </div>
        <div class="form-group">
            <span for="price">Price</span>
            <input class="form-control" type="text" name="price" @isset($imovel) value="{{$imovel->price }}" @endisset
                id="price">
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>

    </form>
</div>

@endsection
