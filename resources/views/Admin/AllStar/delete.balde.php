@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete player</h1>
                <form action="/admin/AllStar/delete" method="POST">
                @csrf
                @method('DELETE');
                    <input type="hidden" name="playerID"id="playerID" value="{{$AllStar->_id}}">
                    <div class="form-group">
                        <label for="playerID">Player</label>
                        <input type="text" class="form-control" id="playerID" name="playerID" value="{{$AllStar->playerID}}" disable>
                    </div>
                   
                    <div class="form-group">
                        <label for="yearID">Year</label>
                        <textarea class="form-control" name="yearID" id="yearID" cols="30" rows="10"disable>{{$AllStar->yearID}}</textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="gameID">Game</label>
                            <input class= "form-control" type="number" name="gameID" id="gameID" value="{{$AllStar->gameID}}" disable>
                        </div>                    
                    </div>                 
                    <button class="btn btn-default"type="submit">Cancel</button>
                    <!-- <button class="btn btn-danger"type="submit">Delete</button> -->
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdlDeleteConfirmation">
                        Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="MdlDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="MdlDeleteConfirmationLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this AllStar? This changes can not be reverted.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                            </div>
                        </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
