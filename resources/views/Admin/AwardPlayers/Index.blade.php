@extends('layouts.app')

@section('content')
    <div class= "container">
    @if(session('mssg') !== null)
             <div class="alert alert-{{session('alerttype')}} alert-dismissible fade show" role="alert">
              {{ session('mssg')}}
              <strong>Award Player inserted</strong> Was Inserted Successfuly.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
      <div class="row">
          <div class="col-md-12">
            <h1>AwardPlayers</h1>
            <a class="text-right"href="/admin/AwardPlayers/create">Insert a New Award player</a>
          </div>
          <div class="col-md-12">
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">playerID</th>
                    <th scope="col">awardID</th>
                    <th scope="col">lgID</th>
                    <th scope="col" >Options</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach($AwardPlayers as $awp)
                 <tr>
                    <th scope="row">{{ $loop ->index + 1}}</th>
                    <td>{{$awp["playerID"]}}</td>
                    <td>{{$awp["awardID"]}}</td>
                    <td>{{$awp["lgID"]}}</td>
                    <td>
                        <a href="/admin/AwardPlayers/{{$awp['_id'] }}">Details</a> |
                        <a href="/admin/AwardPlayers/edit/{{$awp->_id}">Edit</a> |
                        <a href="/admin/AwardPlayers/delete/{{$awp->_id}">Delete</a>
                    </td>
                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

