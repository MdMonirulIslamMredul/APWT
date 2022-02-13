<table>
    @foreach($Products as $p)
    <tr>
        <td><a href="{{route('product.details',['id'=>encrypt($p->id)])}}">{{$p->name}}</a></td>
        <td>{{$p->id}}</td>
        <td>{{$p->name}}</td>
    </tr>
    @endforeach
</table>