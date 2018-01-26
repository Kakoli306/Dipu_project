
@extends('layouts.app')

@section('content')
<br/>
<hr/>
<h1 class="text-center text-success">Edit About Form</h1>
<h2 class="text-center text-success">{{Session::get('message')}}</h2>

<hr/>

<div class="row">
        <div class="well">

        <form action="{{ url('/about/update/') }}" method="get" style ="..."
                                               data-toggle="tooltip" title="update" >


<input type ="hidden" name="id_about"  value ="<?php echo $aboutById->id ?>">

<input type ="text" name="title" value ="<?php echo $aboutById->title?>">

<input type ="text" name="description" value ="<?php echo $aboutById->description?>">
<input type="submit" value="Submit">

</form>




                                               
            <!-- {!! Form::open(['url'=>'/about/update','method'=>'post','class'=>'form-horizontal'])!!}

            <div  class="form-group">
                {!! Form::label('title','Title',['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-9">
                    {!! Form::text('title',$value = $aboutById->title, ['class'=>'form-control','placeholder'=>'Enter title ']) !!}
                    <input type="hidden" name="title_id" value="{{$aboutById->id}}">

                </div>
            </div>
            <br><br>

            <div   class="form-group">
                {!! Form::label('description','Description',['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-9">
                    {!! Form::text('description',$value = $aboutById->description , ['class'=>'form-control','placeholder'=>'Enter description ']) !!}
                </div>
            </div>
            <br><br>


            
            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-7">
                    {!! Form::submit('Save About',['class'=>'btn btn-success'])!!}
                </div>
            </div>

        </div> -->

        
