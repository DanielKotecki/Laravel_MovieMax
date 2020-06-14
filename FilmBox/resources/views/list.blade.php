@extends('master')
@section('content')
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($doctorsList as $item)
            <tr>
            <th scope="row">{{$item['id']}}</th>
        <td>{{$item['id']}}</td>
        <td>{{$item['firstName']}}</td>
        <td>{{$item['lastName']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['phone']}}</td>
        <td>{{$item['address']}}</td>
        <td>{{$item['status']}}</td>
      </tr>   
        @endforeach
   
  
  </table>
  <iframe src="https://baf25vh9.cdn-servers.to/v/37_EuxqbtE4nJkTpRV-sWcEqDtJl2XHpYBJpb0V_iLB9OxSpQFkxhwlQFl97izg1GD9BjNlzJsO71r6TDVzYySD2OO5geWTAJShfi1Xocllpc8gN92EMoDFnmbJquugSNNSVod_maQbg2K7OM-SyWpiZ5FHBnZbBCSyidjGtN93Xk=" frameborder="0" width="500" height="500" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
@endsection
