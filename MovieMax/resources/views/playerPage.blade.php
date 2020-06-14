@extends('template')
@section('content')
<div class="maind4">
   
    <div class="moviePlayer">
         @foreach ($playerData as $item)
        <div class="titleplayer"><h3>{{$item->name}}</h3></div>
       
            <iframe src="{{$item->link}}" frameborder="0" class="iframeMovie" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
        @endforeach
        <div class="textArea">
          @auth
               <label class="hkoment"><h3>Dodaj Komentarz</h3></label>
            <div class="form-group">
                @foreach ($idforCom as $item)
                    <form action="/addCom/{{$item->movieId}}" method="POST">
                    {{ @csrf_field() }}
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textCom"></textarea>
                <input type="submit" class=" btn btn-primary btnkoment">
                </form>
                @endforeach
            </div>
          @endauth
          @guest
          <label class="hkoment"><h3>Zaloguj się aby dodać Komentarz</h3></label>
          @endguest
           
        </div>
        
    </div>
    <div class="koment">
@foreach ($secKom as $item)
    <div class="card">
        <div class="card-body">
            <h4>{{$item->name}}</h4>
          <p>
            {{$item->comment}}
          </p>
          @auth
             @if (\Illuminate\Support\Facades\Auth::user()->id==1)
          <a href="{{url('deleteCom',$item->id)}}">Usuń</a>
          @endif 
          @endauth
          
        </div>
      </div>
@endforeach
{{$secKom->links()}}
</div>


@endsection
