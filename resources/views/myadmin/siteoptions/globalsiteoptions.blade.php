@extends('myadmin.adminmaster')
@section('title','Site Options')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Global Site Options
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Global Options</a></li>
        <li class="active">Set Global Site Options</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

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
       <form action="{{route('global.site.options')}}" method="post" enctype="multipart/form-data">
       {{csrf_field()}}

         
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Site Logo(134x53 for best option) :</label>
            <input type="file" class="form-control" name="logo">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->logo))
             <img src="{{URL::asset('uploads/'.$siteoptions->logo)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div> 

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Home Page Background Image :</label>
            <input type="file" class="form-control" name="home_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->home_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->home_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>


         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Application Page Background Image :</label>
            <input type="file" class="form-control" name="apply_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->apply_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->apply_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>


         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Ongoing Page Background Image :</label>
            <input type="file" class="form-control" name="ongoing_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->ongoing_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->ongoing_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>


         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Faq Page Background Image :</label>
            <input type="file" class="form-control" name="faq_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->faq_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->faq_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>


          <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Testimonial Page Background Image :</label>
            <input type="file" class="form-control" name="tmn_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->tmn_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->tmn_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>


          <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>General Condition Page Background Image :</label>
            <input type="file" class="form-control" name="gc_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->gc_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->gc_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>


       <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>About Page Background Image :</label>
            <input type="file" class="form-control" name="about_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->about_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->about_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div> 


         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Contact Page Background Image :</label>
            <input type="file" class="form-control" name="contact_bg_img">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->contact_bg_img))
             <img src="{{URL::asset('uploads/'.$siteoptions->contact_bg_img)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>


        
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Left Copyright</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_left}}" name="copyright_left">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Left Copyright(Azerbaijan Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_left_az}}" name="copyright_left_az">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Left Copyright(Russian Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_left_ru}}" name="copyright_left_ru">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Left Copyright(Arabian Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_left_ar}}" name="copyright_left_ar">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Left Copyright(Turkish Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_left_tr}}" name="copyright_left_tr">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Right Copyright</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_right}}" name="copyright_right">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Right Copyright(Azerbaijan Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_right_az}}" name="copyright_right_az">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Right Copyright(Russian Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_right_ru}}" name="copyright_right_ru">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Right Copyright(Arabian Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_right_ar}}" name="copyright_right_ar">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Right Copyright(Turkish Language)</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright_right_tr}}" name="copyright_right_tr">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>


          <div class="row">
          <!-- /.col -->
            <div class="col-xs-3">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="SET GLOBAL SITE OPTIONS">
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