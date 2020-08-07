@extends('layouts.app')

@section('content')
    <div class= "container">
    @if(session('mssg') !== null)
             <div class="alert alert-{{session('alerttype')}} alert-dismissible fade show" role="alert">
              {{ session('mssg')}}
              <strong>Player Inserted</strong> Was Inserted Successfuly.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
      <div class="row">
          <div class="col-md-12">
            <h1>HallOfFame</h1>
            <a class="text-right"href="/admin/HallOfFame/create">Insert Hall of fame player</a>
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
                    <th scope="col" >Options</th>
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
                    <td>
                        <a href="/admin/HallOfFame/{{$hof['_id'] }}">Details</a> |
                        <a href="/admin/HallOfFame/edit/{{$hof->_id}">Edit</a> |
                        <a href="/admin/HallOfFame/delete/{{$hof->_id}">Delete</a>
                    </td>
                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

