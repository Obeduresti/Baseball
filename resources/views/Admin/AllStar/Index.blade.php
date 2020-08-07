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
            <h1>AllStar</h1>
            <a class="text-right"href="/admin/AllStar/create">Insert New All Star player</a>
          </div>
          <div class="col-md-12">
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">playerID</th>
                    <th scope="col">yearID</th>
                    <th scope="col">gameID</th>
                    <th scope="col">lgID</th>
                    <th scope="col" >Options</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach($AllStar as $als)
                 <tr>
                    <th scope="row">{{ $loop ->index + 1}}</th>
                    <td>{{ $als["playerID"] }}</td>
                    <td>{{ $als["yearID"] }}</td>
                    <td>{{ $als["gameID"] }}</td>
                    <td>{{ $als["lgID"] }}</td>
                    <td>
                        <a href="/admin/AllStar/{{$als['_id'] }}">Details</a> |
                        <a href="/admin/AllStar/edit/{{ $als->_id }}">Edit</a> |
                        <a href="/admin/AllStar/delete/{{$als->_id }}">Delete</a>
                    </td>
                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

