@extends('template')
@section('content')
<div class="flexk">
    
<div class="">
 <form action="/link/{{$id}}" method="POST">
     {{ @csrf_field() }}
    <input class="form-control" type="text" placeholder="link movie" name="link""><br>
    <input type="submit" class="btn btn-primary" value="Dodaj Film" name="addlinkubmit">
</form>


</div>
</div>

   
@endsection
