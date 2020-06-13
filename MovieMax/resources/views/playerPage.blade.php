@extends('template')
@section('content')
<div class="maind4">
   
    <div class="moviePlayer">
        <div class="titleplayer"><h3>Title</h3></div>
        @foreach ($playerData as $item)
            <iframe src="{{$item->link}}" frameborder="0" class="iframeMovie" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
        @endforeach
    </div>
    <div class="koment">
       <div class="card">
        <div class="card-body">
            <h4>User</h4>
          <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis amet quae ea repellat, totam ex eaque consequuntur delectus dolore modi at cupiditate perferendis laboriosam corporis quos eligendi impedit. Dignissimos, repellendus!
          </p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div> 
    </div>
    
</div>


@endsection
