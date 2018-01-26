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
                            <h4 class="place"> Table</h4>

                        </div>
                        <div class="content table-responsive table-full-width">

                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Degree</th>
                                <th>Description</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($achievements as $achievement)
                                    <tr class="success">
                                        <td>{{$achievement->id}}</td>
                                        <td>{{$achievement->degree}}</td>
                                        <td>{{$achievement->description}}</td>
                                        <td>{{$achievement->achievement_action }}</td>
                                        <td class="center">


                               <a href="{{ url('/achievement/edit/'.$achievement->id) }}" data-toggle="tooltip" title="Edit"
                                  class="btn btn-success btn-sm">
                                                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                            </a>

                                            <form action="{{ url('/achievement/delete/') }}" method="POST" style ="..."
                                               data-toggle="tooltip" title="Delete" >
                                                {{csrf_field()}}
                                                <input type="hidden" value="{{$achievement->id}}" name="achievement_id">
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
