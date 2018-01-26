
@extends('layouts.app')

@section('content')
    <br/>
    <hr/>
    <h1 class="text-center text-success">Edit Resume Form</h1>
    <h2 class="text-center text-success">{{Session::get('message')}}</h2>

    <hr/>

    <div class="row">
        <div class="well">
            {!! Form::open(['route'=>'update-resume','method'=>'post',
            'class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}

            <div class="form-group">
                {!! Form::label('resume_title','Title',['class'=>'control-label col-sm-3'])!!}
                <div class="col-sm-9">
                    {!! Form::text('resume_title',$value = $resumeById->resume_title,['class'=>'form-control','placeholder'=>'Enter name'])!!}
                    <input type="hidden" name="resume_id" value="{{$resumeById->id}}">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3">Description</label>
                <div class="col-sm-9">
                    <input type="text" name="description" value = {{$resumeById->description}} class="form-control" />
                    <span class="text-danger">{{$errors->has('description')? $errors->first('description'):''}}</span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Resume Image</label>
                <div class="col-sm-9">
                    <input type="file" name="resume_image" accept="image/*">
                    <img src="resume_image/">{{$errors->has('resume_image')? $errors->first('resume_image'):''}}</img>

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-3">
                    <input type="submit" name="btn" value=" Resume Info" class="btn btn-success btn-block">
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
