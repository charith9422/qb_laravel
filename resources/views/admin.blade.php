@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Registered Users</strong></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (count($users)>0)
                        
                    
                    <table class="table table-striped">
                        <tr>
                            <th>Register Number</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td style="color:black">{{$user->s_number}}</td>
                                <td style="color:black">{{$user->name}}</td>
                                <td>
                                    {{-- <form method="POST" action="/user/{{$user->id}}/delete" role="form">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>No users available!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
