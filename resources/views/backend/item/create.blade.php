@extends('backend.layout.main')
@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa fa-bars"></i> Items</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Home</a></li>
          <li><i class="fa fa-square-o"></i><a href="{{ route('items.index') }}">View Items</a></li>
        </ol>
      </div>
    </div>
    <!-- page start-->
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <section class="panel">
        @include('backend.layout.flash')
        <header class="panel-heading">Add Item</header>
        <div class="panel-body">
          @include('backend.item.form')
        </div>
      </section>
    </div>
    <!-- page end-->
    </section>
  </section>
  <!--main content end-->
</section>
@endsection