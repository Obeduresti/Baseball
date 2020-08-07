@extends('layouts.app')

@section('content')
    <div class= "container">
    @if(session('mssg') !== null)
             <div class="alert alert-{{session('alerttype')}} alert-dismissible fade show" role="alert">
              {{ session('mssg')}}
              <strong>Salary Inserted</strong> Was Inserted Successfuly.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
      <div class="row">
          <div class="col-md-12">
            <h1>Salary</h1>
            <a class="text-right"href="/admin/Salary/create">Insert New Salary</a>
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
                    <th scope="col">salary</th>
                    <th scope="col" >Options</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach($Salary as $sal)
                 <tr>
                    <th scope="row">{{ $loop ->index + 1}}</th>
                    <td>{{$sal["playerID"]}}</td>
                    <td>{{$sal["yearID"]}}</td>
                    <td>${{$sal["teamID"]}}</td>
                    <td>{{$sal["lgID"]}}</td>
                    <td>${{$sal["salary"]}}</td>

                    <td>
                        <a href="/admin/Salary/{{$sal['_id'] }}">Details</a> |
                        <a href="/admin/Salary/edit/{{$sal->_id}">Edit</a> |
                        <a href="/admin/Salary/delete/{{$sal->_id}">Delete</a>
                    </td>
                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

