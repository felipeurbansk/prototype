@extends('property.master')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
            <tr>
                <td>{{$property->name}}</td>
                <td>{{$property->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
