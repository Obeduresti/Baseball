@extends('layouts.app')

@section('content')
    <div class="container">
    @if(session('mssg') !== null)
             <div class="alert alert-{{session('alerttype')}} alert-dismissible fade show" role="alert">
              {{ session('mssg')}}
              <strong>playerID</strong> Was created Successfuly.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
        <div class="row">
            <div class="col-md-12">
                <h1>Player details</h1>
                <div class="card">
                <input type="hidden" name="productid" id="productid">
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
                    <div class="card-body">
                        <a href="/admin/AllStar/edit/{{$als ->_id}" class="card-link">Edit</a>
                        <a href="/admin/AllStar/delete/{{$als->_id}" class="card-link">Delete</a>
                    </div>
                </div>
        </div>
    </div>
@endsection
