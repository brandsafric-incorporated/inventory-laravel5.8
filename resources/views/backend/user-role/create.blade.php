@extends('backend.layout.main')
@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa fa-bars"></i> Roles & Permissions</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Dashboard</a></li>
          <li><i class="fa fa-square-o"></i><a href="{{ route('admin.roles-permissions.index') }}">Manage Roles & Permissions</a></li>
        </ol>
      </div>
    </div>
    <!-- page start-->
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <section class="panel">
        @include('backend.layout.flash')
        <header class="panel-heading">{{ (isset($data))?'Edit':'Add' }} Role & Permission</header>
        <div class="panel-body">
          @include('backend.role-permission.form')
        </div>
      </section>
    </div>
    <!-- page end-->
    </section>
  </section>
  <!--main content end-->
</section>
@endsection