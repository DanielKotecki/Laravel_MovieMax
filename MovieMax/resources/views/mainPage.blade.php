@extends('template')

@section('content')
   <div class="maind3">
       <div class="ul1">
<ul class="listWrrapper__wrapper">
@foreach ($movies as $item)
    <li class="listItemWrapper">
    <img src="{{$item->img}}" alt="" class="listItem__image">
  <div>
  <h2 class="listItem__name">{{$item->name}}</h2>
      <p class="listItem__des">Rodzaj:{{$item->category}}</p>
      
      
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Linki do odtwarzacza
        </button>
        <div class="dropdown-menu">
          @foreach ($links as $link)
          @if ($link->movieId==$item->id)
              <a class="dropdown-item" href="{{url('player',$link->id)}}">{{$link->link}}</a>
          @endif
          @endforeach
        </div>
      </div>

    <a href="{{url('link',$item->id)}}"><button class="btn btn-secondary" href="{{url('link',$item->id)}}">Dodaj link</button></a>


  </div>
  </li> 
@endforeach
   {{$movies->links()}} 
  
  
  </ul>
       </div>


       
       
   </div>
   
  
@endsection

  