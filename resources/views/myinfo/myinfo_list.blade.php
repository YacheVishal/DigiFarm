@extends('layouts.lay')

@section('content') 
<div class="">
<div class="row">
    <div class="col-lg-2">

        <nav class="navbar navbar-inverse navbar-fixed-left" style="">
            <ul>
                <li class="list1"><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="myprofile">  My Profile</a></li>
                <li class="list2 "><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="post">  Post Ads</a></li>
                <li class="list3 active"><i class="fas fa-info-circle" style="margin-right: 5px;"></i><a href="myinfo"> My Info</a></li>
                <!--<li class="list4"><i class="far fa-bell" style="margin-right: 5px;"></i><a href="#"> Alerts</a></li>-->
                <li class="list5"><i class="fas fa-eraser" style="margin-right: 5px;"></i><a href="" data-toggle="modal" data-target="#myModal"> Delete Account</a>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                           <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title" style="color: black;text-align: center;">Are you sure you want to delete account ?</h4>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <button type="button" class="btn btn-danger byes">Yes</button>
                                        <button type="button" class="btn btn-success bno" data-dismiss="modal">No</button>
                                    </center>        
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>  

        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                     <div class="form-group">
                        {{ Form::label('name', 'Name',  ['class' => 'required']) }}
                        {{ Form::text('name',  Auth::user()->name, ['id'=>'name', 'class' => 'form-control', 'placeholder'=>'name'] ) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email',  ['class' => 'required']) }}
                        {{ Form::text('email', Auth::user()->email, ['id'=>'email', 'class' => 'form-control', 'placeholder'=>'email'] ) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('mobile_no', 'Mobile No',  ['class' => 'required']) }}
                        {{ Form::text('mobile_no',  Auth::user()->mobile_no, ['id'=>'mobile_no', 'class' => 'form-control', 'placeholder'=>'mobile_no'] ) }}
                    </div>
<!--
                    <div class="form-group">
                        {{ Form::label('city', 'City',  ['class' => 'required']) }}
                        {{ Form::text('city', Auth::user()->city, ['id'=>'city', 'class' => 'form-control', 'placeholder'=>'city'] ) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('state', 'State',  ['class' => 'required']) }}
                        {{ Form::text('state',  Auth::user()->state, ['id'=>'state', 'class' => 'form-control', 'placeholder'=>'state'] ) }}
                    </div>
-->                 
                         
                                <td>
                                    <a href="{{ route('myinfo.edit', ['id' => Auth::User()->id]) }}" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt title="Edit""></i> </a>
                                    <a href="{{ route('myinfo.show', ['id' => Auth::User()->id]) }}" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt" title="Delete"></i> </a>
                                </td>
                            
                </div>
            </div>
        </div>
    </div>

@endsection