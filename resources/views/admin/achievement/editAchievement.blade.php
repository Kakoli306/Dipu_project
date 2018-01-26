@extends('layouts.app')

@section('content')
<br/>
<hr/>
<h1 class="text-center text-success">Edit Achievement Form</h1>
<hr/>
<h2 class="text-center text-success">{{Session::get('message')}}</h2>

<div class="row">
      <div class="well">
            {!! Form::open(['url'=>'/achievement/update','name'=>'editAchievementForm','method'=>'post','class'=>'form-horizontal'])!!}

            <div class="form-group">
                {!! Form::label('degree','Degree',['class'=>'control-label col-sm-3'])!!}
                <div class="col-sm-9">
                    {!! Form::text('degree',$value = $achievementById->degree,['class'=>'form-control','placeholder'=>'Enter category name'])!!}
                    <input type="hidden" name="achievement_id" value="{{$achievementById->id}}">
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description',' Description',['class'=>'control-label col-sm-3'])!!}
                <div class="col-sm-9">
                    {!! Form::textarea('description',$value = $achievementById->description,['class'=>'form-control'])!!}
                </div>
            </div>

            <div class="form-group">
    <div class="col-sm-offset-3 col-sm-7">
        {!! Form::submit('Update Achievement',['class'=>'btn btn-success'])!!}
    </div>
</div>

{!! Form::close()!!}
</div>
</div>
