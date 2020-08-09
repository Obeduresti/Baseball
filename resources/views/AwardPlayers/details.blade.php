@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <div class="card-body">
                     <h5 class="card-title">{{$AwardPlayers->playerID}}</h5>
                         <p class="card-text"><b>Award: </b> {{$AwardPlayers->awardID}}</p>
                         <p class="card-text"><b>League: </b> {{$AwardPlayers->lgID}}</p>
                 </div>
            </div>
        </div>
    </div>
@endsection

