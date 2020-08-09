@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete player</h1>
                <form action="/admin/AllStar/delete" method="POST">
                @csrf
                @method("DELETE")
                    <input type="hidden" name="allstarid"id="allstarid" value="{{$AllStar->_id}}">
                    <div class="form-group">
                        <label for="playerID">Player</label>
                        <input type="text" class="form-control" id="playerID" name="playerID" value="{{$AllStar->playerID}}" disable>
                    </div>             
                    <div class="form-group">
                        <label for="yearID">Year</label>
                        <input type ="text" class="form-control" name="yearID" id="yearID" value="{{$AllStar->yearID}}"disable>
                    </div>
                    <div class="form-group">
                        <label for="gameID">Game</label>
                        <input type ="text" class="form-control" name="gameID" id="gameID" value="{{$AllStar->gameID}}"disable>
                    </div>   
                    <div class="form-group">
                        <label for="lgID">League</label>
                        <input type ="text" class="form-control" name="lgID" id="lgID" value="{{$AllStar->lgID}}"disable>
                    </div>        
                    <a href="/admin/AllStar/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>

                </form>
            </div>
        </div>
    </div>
@endsection
