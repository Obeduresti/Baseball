@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <div class="card-body">
                     <h5 class="card-title">{{$HallOfFame->playerID}}</h5>
                         <p class="card-text"><b>Year: </b> {{$HallOfFame->yearID}}</p>
                         <p class="card-text"><b>Vote: </b> {{$HallOfFame->votedby}}</p>
                 </div>
            </div>
        </div>
    </div>
@endsection

