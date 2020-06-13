@extends('template')
@section('content')
<div class="flexk">
    
    <div class="addmovie">
 <form action="sendToDatabase" method="POST">
     {{ @csrf_field() }}
    <input class="form-control" type="text" placeholder="Nazwa Filmu" name="nameMovie"><br>
    <select class="form-control" name="selectCategory">
        
        <option value="Akcji">Akcji</option>
        <option value="Sensacyjny">Sensacyjny</option>
        <option value="Przygodowy">Przygodowy</option>
        <option value="Wojenny">Wojenny</option>
        <option value="SciFi">SciFi</option>
        <option value="Komedia romantyczna">Komedia romantyczna</option>
        <option value="Animacja">Animacja</option>
      </select><br>
    <input class="form-control" type="text" placeholder="src_img" name="src_img"><br>
    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" name="date"/><br>
    <input type="submit" class="btn btn-primary" value="Dodaj Film" name="addmovieSubmit">
</form>


</div>
</div>

   
@endsection
