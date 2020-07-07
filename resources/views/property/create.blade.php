<?
<form action="{{url('/imoveis/store')}}" method="post">
    <span for="name">Name</span>
    <input type="text" name="name" id="name">

    <br>

    <span for="price">Price</span>
    <input type="text" name="price" id="price">
    <br>

    <button type="submit">Enviar</button>
</form>
