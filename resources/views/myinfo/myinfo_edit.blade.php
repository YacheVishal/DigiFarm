@extends('layouts.lay')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit User <a href="{{route('myinfo.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('myinfo.update', ['id' => $user->id]) }}" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$user->name}}" id="name" name="name" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$user->email}}" id="email" name="email" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile_no">Contact No: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$user->mobile_no}}" id="mobile_no" name="mobile_no" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('mobile_no'))
                                <span class="help-block">{{ $errors->first('mobile_no') }}</span>
                                @endif
                            </div>
                        </div>
<!--
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$user->city}}" id="city" name="city" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('city'))
                                <span class="help-block">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$user->state}}" id="state" name="state" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('state'))
                                <span class="help-block">{{ $errors->first('state') }}</span>
                                @endif
                            </div>
                        </div>
-->
                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Save User Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection