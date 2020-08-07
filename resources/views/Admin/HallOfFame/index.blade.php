@extends('layouts.app')

@section('content')
    <div class= "container">
      <div class="row">
          <div class="col-md-12">
            <h1>HallOfFame</h1>
          </div>
          <div class="col-md-12">
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">playerID</th>
                    <th scope="col">yearID</th>
                    <th scope="col">votedby</th>
                    <th scope="col">category</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach($HallOfFame as $hof)
                 <tr>
                    <th scope="row">{{ $loop ->index + 1}}</th>
                    <td>{{$hof["playerID"]}}</td>
                    <td>{{$hof["yearID"]}}</td>
                    <td>{{$hof["votedby"]}}</td>
                    <td>${{$hof["category"]}}</td>
                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

