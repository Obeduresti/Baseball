@extends('layouts.app')

@section('content')
    <div class= "container">
      <div class="row">
          <div class="col-md-12">
            <h1>AllStar</h1>
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
                        <a href="/AllStar/{{$als['_id'] }}">Details</a> |
                  </tr>          
                    
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

