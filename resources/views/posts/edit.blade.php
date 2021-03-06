@extends('layouts.app')

@section('content')
    <h1>Edit Question</h1>
    {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
                {{Form::label('category','Department')}}
                {{Form::select('category',array('Computer Science'=>'Computer Science','Statistics'=>'Statistics','Chemistry'=>'Chemistry','Physics'=>'Physics','Mathematics'=>'Mathematics','Molecular Biology'=>'Molecular Biology','Botany'=>'Botany','Zoology'=>'Zoology','Environmental Science'=>'Environmental Science','Other'=>'Other'),array('multiple' => true),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
                {{Form::label('tag','Subject area')}}<span><i> (Ex:Java,Angular,Analytical Chemistry,Quantum Physics,etc...)</i></span>
                {{Form::text('tag','',['class'=>'form-control','placeholder'=>'Subject area'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'body'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image',['class'=>'btn btn-info'])}}
            </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}
    
@endsection