@extends('layouts.app')

@section('content')
<br/>
<hr/>
<h1 class="text-center text-success">Edit Education Form</h1>
<hr/>
<h2 class="text-center text-success">{{Session::get('message')}}</h2>

<div class="row">
      <div class="well">
            {!! Form::open(['url'=>'/education/update','name'=>'editEducationForm','method'=>'post','class'=>'form-horizontal'])!!}

            <div class="form-group">
                {!! Form::label('degree','Degree',['class'=>'control-label col-sm-3'])!!}
                <div class="col-sm-9">
                    {!! Form::text('degree',$value = $educationById->degree,['class'=>'form-control','placeholder'=>'Enter category name'])!!}
                    <input type="hidden" name="education_id" value="{{$educationById->id}}">
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description',' Description',['class'=>'control-label col-sm-3'])!!}
                <div class="col-sm-9">
                    {!! Form::textarea('description',$value = $educationById->description,['class'=>'form-control'])!!}
                </div>
            </div>

            <div class="form-group">
    <div class="col-sm-offset-3 col-sm-7">
        {!! Form::submit('Update Education',['class'=>'btn btn-success'])!!}
    </div>
</div>

{!! Form::close()!!}
</div>
</div>
