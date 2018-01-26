
@extends('layouts.app')

@section('content')
<br/>
<hr/>
<h1 class="text-center text-success">Add Resume Form</h1>
<h2 class="text-center text-success">{{Session::get('message')}}</h2>

<hr/>

<div class="row">
      <div class="well">
            {!! Form::open(['route'=>'new-resume','method'=>'post',
            'class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}

            <div class="form-group">
              <label class="control-label col-sm-3">Title</label>
              <div class="col-sm-9">
                <input type="text" name="resume_title" class="form-control" />
                  <span class="text-danger">{{$errors->has('resume_title')? $errors->first('resume_title'):''}}</span>
                </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-3">Description</label>
              <div class="col-sm-9">
                <input type="text" name="description" class="form-control" />
                  <span class="text-danger">{{$errors->has('description')? $errors->first('description'):''}}</span>
                </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-3">Resume Image</label>
              <div class="col-sm-9">
                <input type="file" name="resume_image" accept="image/*">
                  <span class="text-danger">{{$errors->has('resume_image')? $errors->first('resume_image'):''}}</span>
                </div>
            </div>

            <div class="form-group">
                  <div class="col-sm-3 col-sm-offset-3">
                      <input type="submit" name="btn" value="Save Resume Info" class="btn btn-success btn-block">
                  </div>
              </div>
{!! Form::close() !!}
        </div>
      </div>
