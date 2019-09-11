@extends('layout')

@section('content')

<main class="col-sm-12 col-md-12 pt-3">
    <h1>CRM</h1>

    <h2>List of Users</h2>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>user_id</th>
                    <th>description</th>
                    <th>status</th>
                    <th>created_at</th>                
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr role="button" data-href="/user/{{$user->user_id}}">
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->description}}</td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->created_at}}</td>                
                    </tr>
                @endforeach            
            </tbody>
        </table>
    </div>
</main>
@endsection