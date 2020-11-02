

<?php echo "Edit & " . $branch->name; ?>


<form action="/branch/{{$branch->id}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <input type="text" name="name"value="{{$branch->name}}" placeholder="Enter branch name" class="form-control" />
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

