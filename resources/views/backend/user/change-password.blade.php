@extends('backend.layout.main')
@section('content')
<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Change Password</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">Home</a></li>
            </ol>
          </div>
        </div>
        @if(session()->has('success'))
          <p class="alert alert-success">{{session()->get('success') }}</p>
        @endif
        <!-- page start-->
        <form action="{{ route('control.submit-password') }}" method="post">
          @csrf
          <div class="form-group">
            <label>New Password</label>
            <input type="password" name="new_password" class="form-control">
            @if($errors->has('new_password'))
              <div class="alert alert-danger">{{ $errors->first('new_password')}}</div>
            @endif
          </div>
          <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" name="confirm_password" class="form-control">
            @if($errors->has('confirm_password'))
              <div class="alert alert-danger">{{ $errors->first('confirm_password')}}</div>
            @endif
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary"> Change Password</button>
            <button type="reset" class="btn btn-danger">Reset</button> 
          </div>
        </form>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
@stop