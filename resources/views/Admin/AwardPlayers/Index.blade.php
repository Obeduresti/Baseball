@extends('layouts.app')

@section('content')
    <div class= "container">
      <div class="row">
          <div class="col-md-12">
            <h1>AwardPlayers</h1>
          </div>
          <div class="col-md-12">
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">playerID</th>
                    <th scope="col">awardID</th>
                    <th scope="col">lgID</th>

                 </tr>
                </thead>
                <tbody>
                    @foreach($AwardPlayers as $awp)
                 <tr>
                    <th scope="row">{{ $loop ->index + 1}}</th>
                    <td>{{$awp["playerID"]}}</td>
                    <td>{{$awp["awardID"]}}</td>
                    <td>{{$awp["lgID"]}}</td>
                    </tr>          
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
    </div>
@endsection

