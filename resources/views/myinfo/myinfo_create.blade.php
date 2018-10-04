@extends('layouts.lay')

@section('content')

<div class="row">
    <div class="col-lg-2">
        <nav class="navbar navbar-inverse navbar-fixed-left" style="">
            <ul>
                <li class="list1"><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="myprofile">  My Profile</a></li>
                <li class="list2 "><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="post">  Post Ads</a></li>
                <li class="list3 active"><i class="fas fa-info-circle" style="margin-right: 5px;"></i><a href="myinfo"> My Info</a></li>
                <li class="list4"><i class="far fa-bell" style="margin-right: 5px;"></i><a href="#"> Alerts</a></li>
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

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Create User <a href="{{route('myinfo.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('myinfo.store') }}" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('name') ?: '' }}" id="name" name="name" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('email') ?: '' }}" id="email" name="email" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile_no">Contact <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('mobile_no') ?: '' }}" id="mobile_no" name="mobile_no" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('mobile_no'))
                                <span class="help-block">{{ $errors->first('mobile_no') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">Gender <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('gender') ?: '' }}" id="gender" name="gender" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('gender'))
                                <span class="help-block">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('state') ?: '' }}" id="state" name="state" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('state'))
                                <span class="help-block">{{ $errors->first('state') }}</span>
                                @endif
                            </div>
                        </div>-->

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success">Create User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop