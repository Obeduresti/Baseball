@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Creat new AllStar</h1>
                <form action="/admin/AllStar/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="playerID">Player</label>
                        <input type="text" class="form-control" id="playerID" name="playerID">
                    </div>

                    <div class="form-group">
                        <label for="yearID">Year</label>
                        <input type="text" class="form-control" id="yearID" name="yearID">
                    </div>

                    <div class="form-group">
                        <label for="gameID">Game</label>
                        <textarea class="form-control" name="gameID" id="gameID" cols="10" rows="1"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="lgID">LG</label>
                        <textarea class="form-control" name="lgID" id="lgID" cols="10" rows="1"></textarea>
                    </div>
                 
                    <button class="btn btn-success"type="submit">create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
