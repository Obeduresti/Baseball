@extends('layouts.app')

@section('content')
    <div class= "container">
    @if(session('mssg') !== null)
             <div class="alert alert-{{session('alerttype')}} alert-dismissible fade show" role="alert">
              {{ session('mssg')}}
              <strong>Managers Inserted</strong> Was Inserted Successfuly.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
      <div class="row">
          <div class="col-md-12">
            <h1>Managers</h1>
            <a class="text-right"href="/admin/Managers/create">Insert New Managers</a>
          </div>
          <div class="col-md-12">
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">playerID</th>
                    <th scope="col">yearID</th>
                    <th scope="col">teamID</th>
                    <th scope="col">lgID</th>
                    <th scope="col">W</th>
                    <th scope="col">L</th>
                    <th scope="col">rank</th>
                    <th scope="col" >Options</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach($Managers as $man)
                 <tr>
                    <th scope="row">{{ $loop ->index + 1}}</th>
                    <td>{{$man["playerID"]}}</td>
                    <td>{{$man["yearID"]}}</td>
                    <td>${{$man["teamID"]}}</td>
                    <td>{{$man["lgID"]}}</td>
                    <td>{{$man["W"]}}</td>
                    <td>{{$man["L"]}}</td>
                    <td>{{$man["rank"]}}</td>
                    <td>
                        <a href="/admin/Managers/{{$man['_id'] }}">Details</a> |
                        <a href="/admin/Managers/edit/{{$man->_id}">Edit</a> |
                        <a href="/admin/Managers/delete/{{$man->_id}">Delete</a>
                    </td>
                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

