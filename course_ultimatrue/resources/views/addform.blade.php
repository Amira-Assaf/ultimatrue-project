<div>
	<h1>Branches</h1>
    
    <form action="/form" method="POST">
    {{ csrf_field() }}
    
    <input type="text" name="name" placeholder="name" />
    <button type="submit" class="btn btn-primary"> Click </button>
    </form>

<?php
if(isset($message))
echo $message;
?>
</div>