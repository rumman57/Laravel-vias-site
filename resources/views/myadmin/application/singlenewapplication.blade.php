@extends('myadmin.adminmaster')
@section('title','Category')
@section('header_js')
<style type="text/css">
  .img img{
    max-width: 100%;
    max-height: 100%;
  }
</style>
@endsection
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show New Application
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">Show Category</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <?php $i=0;?>
            @foreach($applies as $apply)
               
               <h1 style="color: maroon;" class="text-center">Applicants Number: {{++$i}}/{{$apply->applicant}}</h1>
              <div style="margin: 40px;">
                  <h2 style="color: forestgreen">Visa Related Information: </h2>
                    <div style="margin:20px;">
                       <h4><strong>Selected Country: </strong>{{$apply->select_country}}</h4>
                       <h4><strong>Travel Document: </strong>{{$apply->document_type}}</h4>
                       <h4><strong>Processing type: </strong>{{$apply->processing_type}}</h4>
                       <h4><strong>Purpose of visit: </strong>{{$apply->purpose_type}}</h4>
                       <h4><strong>Visa Arrival Date: </strong>{{$apply->arrival_date}}</h4>
                       <h4><strong>Visa End Date: </strong>{{$apply->end_date}}</h4>
                       <h4><strong>Total Applicant: </strong>{{$apply->applicant}}</h4>
                       <h4><strong>Total USD: </strong>{{$apply->totalusd}}</h4>
                    </div>
              </div>
              <div style="margin: 40px;">
                   <h2 style="color: forestgreen">Personal Information: </h2>
                   <div style="margin:20px;">
                       <h4><strong>Surname: </strong>{{$apply->person_surname}}</h4>
                       <h4><strong>Other names/Given name: </strong>{{$apply->person_other_name}}</h4>
                       <h4><strong>Country of birth: </strong>{{$apply->person_country_birth}}</h4>
                       <h4><strong>Occupation: </strong>{{$apply->person_occupation}}</h4>
                       <h4><strong>Mobile phone number: </strong>+{{$apply->country_phone_code}} {{$apply->person_mobile_number}} </h4>
                       <h4><strong>Permanent residence address: </strong>{{$apply->pemanent_residence_address}}</h4>
                       <h4><strong>Email address: </strong>{{$apply->Email}}</h4>
                       <h4><strong>Passport expiry date: </strong>{{$apply->passport_expiry_date}}</h4>
                       <h4><strong>Place of stay in Azerbaijan: </strong>{{$apply->person_residence_address}}</h4>
                       <h4><strong>Ever Visited in Azerbaijan: </strong>{{$apply->person_visits_check}}</h4>
                       <h4><strong>Reason: </strong>{{$apply->person_reason}}</h4>
                    </div>
              </div>

              <div style="margin: 40px;">
                   <h2 style="color: forestgreen">Useful Information: </h2>
                   <div style="margin:20px;">
                       <h3><strong>Reference Number: </strong><span style="color: crimson;">{{$apply->ref_number}}</span></h3>
                       <h3><strong>Passport Copy File: </strong></h3><br>
                       <div class="img">
                           <img src="{{URL::asset('uploads/'.$apply->Attach_file)}}">
                       </div>
                    </div>
              </div><br><br><br><br>

              @endforeach
                
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('footer')
@include('myadmin.lib.fortable')
@endsection
