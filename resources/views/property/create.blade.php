@extends('property.master')

@section('content')
<div class="container">
    <h2>@isset($imovel) Editar @else Cadastrar @endisset novo imóvel</h2>
    <form action="{{url('/imoveis/store')}}" method="post">
        @csrf
        @isset($imovel) @method('PUT') @endisset
        <span for="name">Name</span>
        <input type="text" name="name" @isset($imovel) value="{{$imovel->name}}" @endisset id="name">

        <br>

        <span for="price">Price</span>
        <input type="text" name="price" @isset($imovel) value="{{$imovel->price }}" @endisset id="price">
        <br>

        <button type="submit">Enviar</button>
    </form>
</div>

@endsection
