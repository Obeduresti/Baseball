@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Change player</h1>
                <form action="/admin/AllStar/edit" method="POST"> 
                @csrf
                    <input type="hidden" name="allstarid" id="allstarid" value="{{$AllStar->_id}}">
                    <div class="form-group">
                        <label for="playerID">Player</label>
                        <input type="text" class="form-control" id="playerID" name="playerID" value="{{$AllStar ->playerID}}">
                    </div>

                    <div class="form-group">
                        <label for="yearID">Year</label>
                        <input type="text" class="form-control" name="yearID" id="yearID" value="{{$AllStar->yearID}}">
                    </div>

                    <div class="form-group">
                        <label for="gameID">Game</label>
                        <input type="text" class="form-control" name="gameID" id="gameID" value="{{$AllStar->gameID}}">
                    </div>
                   
                    <div class="form-group">
                        <label for="lgID">League</label>
                        <input type="text" class="form-control" name="lgID" id="lgID" value="{{$AllStar->lgID}}">
                    </div>
                 
                    <button class="btn btn-primary"type="submit">edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
