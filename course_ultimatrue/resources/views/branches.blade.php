@extends("layout")
@section('content')

<a href="/form" class="btn btn-danger">Create new</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th> Delete </th>
        <th> Delete with Confirm </th>
</tr>
@foreach ($x as $branch)
<tr>
    <td>{{$branch->id}}</td>
    <td>{{$branch->name}}</td>
    <td><a href="/brance/delete/{{$branch->id}}"> Delete </a></td>
</tr>

@endforeach
</table>


<!---------------------------------------------------------------------------------------------------------------------------------------->




 

@endsection