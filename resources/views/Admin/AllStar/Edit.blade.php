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
                        <textarea class="form-control" name="yearID" id="yearID" cols="30" rows="10" value="{{$AllStar->yearID}}"></textarea>
                    </div>
                 
                    <button class="btn btn-primary"type="submit">edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
