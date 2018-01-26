@extends('layouts.app');

@section('content')
    <hr/>
    <div class="content">
        <h3>{{Session::get('message') }}</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title"> Table</h4>

                        </div>
                        <div class="content table-responsive table-full-width">

                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($resumes as $resume)
                                    <tr class="success">
                                        <td>{{$resume->id}}</td>
                                        <td>{{$resume->resume_title}}</td>
                                        <td>{{$resume->description}}</td>
                                        <td><img height="70px" width="70px" src="/project/{{$resume->resume_image}}"></td>
                                        <td>{{$resume->resume_action }}</td>
                                        <td class="center">


                                            <form action="{{route ('edit-resume')}}" method="post" style="display: inline;">
                                                {{csrf_field()}}
                                                <input type="hidden" value="{{ $resume->id }}" name="resume_id">
                                                <button type="submit" class="btn btn-success btn-sm" title="Edit">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                </button>
                                            </form>



                                            <form action="{{ route('delete-resume')}}" method="POST" style ="..."
                                                  data-toggle="tooltip" title="Delete" >
                                                {{csrf_field()}}
                                                <input type="hidden" value="{{$resume->id}}" name="resume_id">
                                                <button type="submit" name="btn" onclick="return confirm('Are u sure to delete this !!!')"
                                                        class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
