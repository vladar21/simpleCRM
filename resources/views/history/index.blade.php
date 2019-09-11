@extends('layout')

@section('content')

<main class="col-sm-12 col-md-12 pt-3">
    <h1>HISTORY</h1>

    <h2>Table of Calls</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>user_id</th>
                <th>call_id</th>                 
                <th>created_at</th>                  
            </tr>
            </thead>
            <tbody>
            @foreach($calls as $call)
            <tr>
                <td>{{$call->user_id}}</td>
                <td>{{$call->call_id}}</td>
                <td>{{$call->created_at}}</td>                 
            </tr>                       
            @endforeach
            <tr>
                <td><a href="/call/{{$call->user_id}}" class="btn btn-primary active" role="button" aria-pressed="true">Add call</a></td>
                <td></td>
                <td></td>
            </tr> 
            </tbody>
        </table>
    </div>
</main>


@endsection