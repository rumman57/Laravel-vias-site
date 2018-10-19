@extends('myadmin.adminmaster')
@section('title','Country')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Country Specific Passport 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Country</a></li>
        <li class="active">Manage Country Specific Passport </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <small>Below Manage Country Specific Passport </small>

              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             @include('myadmin.lib.message')
       <form action="{{route('manage.specific.country',$country->id)}}" method="post">

        {{ method_field('PUT') }}
       {{csrf_field()}}

         <div class="row">
           <div class="col-xs-7">
             <label><h3>Select Passport To Exempt:</h3></label>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="ordinary" @if($country->ordinary==2) checked="1" @endif value="ordinary">
              <label class="form-check-label">Ordinary Passport</label>
            </div>

             <div class="form-check">
              <input type="checkbox" class="form-check-input" name="diplomatic" @if($country->diplomatic==2) checked="1" @endif value="diplomatic">
              <label class="form-check-label">Diplomatic Passport</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="service" @if($country->service==2) checked="1" @endif value="service">
              <label class="form-check-label">Service Passport</label>
            </div>


            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="special" @if($country->special==2) checked="1" @endif value="special">
              <label class="form-check-label">Special Passport</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="stateless" @if($country->stateless==2) checked="1" @endif value="stateless">
              <label class="form-check-label">Stateless Passport</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="official" @if($country->official==2) checked="1" @endif value="official">
              <label class="form-check-label">Official Passport</label>
            </div>


            </div>
         </div>
         

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label><h3>Select Visa Days:</h3></label>

            <div class="radio">
              <label><input type="radio" name="days" @if($country->days==90) checked="1" @endif value="90">90</label>
            </div>

            <div class="radio">
              <label><input type="radio" name="days" @if($country->days==30) checked="1" @endif value="30" >30</label>
            </div>

            <div class="radio">
              <label><input type="radio" name="days" @if($country->days==14) checked="1" @endif value="14" >14</label>
            </div>
         
          </div>
          </div>
         </div><br>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label><h3>Enable These Options For This Country:</h3></label>

            <div class="radio">
              <label><input type="radio" name="ccv" @if($country->is_partial_exempt==1) checked="1" @endif value="1">False</label>
            </div>

            <div class="radio">
              <label><input type="radio" name="ccv" @if($country->is_partial_exempt==4) checked="1" @endif value="4">True</label>
            </div>

          </div>
          </div>
         </div><br>

          <div class="row">
          <!-- /.col -->
            <div class="col-xs-3">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="SET">
            </div>
            <!-- /.col -->
          </div>
      </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('footer')
@include('myadmin.lib.adminfooter')
@endsection