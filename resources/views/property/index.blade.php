<?

<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    @foreach($properties as $property)
        <tr>
            <td>{{$property->name}}</td>
            <td>{{$property->price}}</td>
        </tr>
    @endforeach

</table>
