@extends('layouts.app')

@section('content')
    <div class= "container">
      <div class="row">
          <div class="col-md-12">
            <h1>Salary</h1>
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

                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

