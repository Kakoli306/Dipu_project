
@extends('layouts.app')

@section('content')
<br/>
<hr/>
<h1 class="text-center text-success">Add Achievements Form</h1>
<h2 class="text-center text-success">{{Session::get('message')}}</h2>

<hr/>

<div class="row">
      <div class="well">
            {!! Form::open(['url'=>'/achievement/new','method'=>'post','class'=>'form-horizontal'])!!}

            <div class="form-group">
                {!! Form::label('degree','Degree',['class'=>'control-label col-sm-3'])!!}
                <div class="col-sm-9">
                    {!! Form::text('degree',$value = null,['class'=>'form-control','placeholder'=>'Enter Degree name'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description',' Description',['class'=>'control-label col-sm-3'])!!}
                <div class="col-sm-9">
                    {!! Form::textarea('description',$value = null,['class'=>'form-control','placeholder'=>'Enter category description'])!!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-7">
                    {!! Form::submit('Add Achievements',['class'=>'btn btn-success'])!!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
