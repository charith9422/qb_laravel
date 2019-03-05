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
                            <th>Created Date</th>
                            <th></th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td style="color:black">{{$user->s_number}}</td>
                                <td style="color:black"><a href="">{{$user->name}}</a></td>
                                <td style="color:black">{{$user->created_at}}</td>
                                {{-- <td>
                                        {!! Form::open(['action'=>['RegisterController@create',$user->id],'method'=>'POST']) !!}
                                            <div class="form-group">
                                            
                                                {{Form::select('admin',array('1'=>'Admin','0'=>'User'),array('multiple' => true),['class'=>'form-control'])}}
                                            
                                            </div>
                                        {!! Form::close() !!}    
                                </td> --}}
                                <td>
                                    @if($user->isAdmin == false)
                                    <form method="POST" action="/user/{{$user->id}}/delete" role="form">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger"><span><i class="far fa-trash-alt"></i></span> Delete {{$user->s_number}} with all questions</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $users->links() }}
                    @else
                        <p>No users available!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
