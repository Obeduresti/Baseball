<!-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Player details</h1>
                <div class="card">
                <input type="hidden" name="allstarid" id="allstarid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $AllStar->playerID }}</h5>
                        <p class="card-text"> 
                            <b>Year:</b>{{ $AllStar->yearID }}
                            <br>
                            <b>league:</b>{{$AllStar->lgID}}
                            <br>
                            <b>Game:</b>${{$AllStar->gameID}}
                        </p>
                    </div>
                </div>
        </div>
    </div>
@endsection -->
