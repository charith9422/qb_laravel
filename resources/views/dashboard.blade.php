@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Questions</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create Question</a>    
                    <h3>Your Questions</h3>
                    @if (count($posts)>0)
                        
                    
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default"><span><i class="fas fa-edit"></i></span> Edit</a></td>
                                <td>
                                    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger','type'=>'submit'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have no questions!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
