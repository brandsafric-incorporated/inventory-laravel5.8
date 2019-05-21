@extends('backend.layout.main')
@section('content')
<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i>Departments</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">Dashboard</a></li>
              <li><i class="fa fa-bars"></i><a href="{{ route('admin.departments.create') }}">Add Department</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="col-lg-12">
          <section class="panel">
              @include('backend.layout.flash')
            <header class="panel-heading">
              All Departments
            </header>
            @include('backend.department.table')            
          </section>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
@stop