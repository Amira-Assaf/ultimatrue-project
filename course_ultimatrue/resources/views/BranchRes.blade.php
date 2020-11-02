@extends("layout")
@section('content')

<h1>Branches</h1>
    <!--Form to Add-->
    <form class="form-inline" action="/branch" method="POST">
    {{ csrf_field() }}
    
    <input type="text" name="name" placeholder="Enter branch name" value="{{Request::old('name')}}" class="form-control" />
    <button type="submit" class="btn btn-danger"> Save </button>
    <br />
    </form>
<br />
<!--Errors when save-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br />
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th> Delete Resourse</th>
        <th> Update Resourse</th>
</tr>
@foreach ($x as $branch)
<tr>
    <td>{{$branch->id}}</td>
    <td>{{$branch->name}}</td>
    <td>
        <form action="/branch/{{$branch->id}}" method="POST">
            {{ csrf_field() }}
            <!--<input type="hidden" name="method" value="DELETE"  />-->
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>

        </form>
    </td>
    <td>
        <a href="/branch/{{$branch->id}}/edit"> Edit</a>
    </td>
</tr>

@endforeach
</table>


<!---------------------------------------------------------------------------------------------------------------------------------------->




 

@endsection