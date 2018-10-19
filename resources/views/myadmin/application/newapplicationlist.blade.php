@extends('myadmin.adminmaster')
@section('title','Application List')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">New Application</a></li>
        <li class="active">Application List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th style="text-align: center;" width="10%">Num.</th>
                 <!-- <th style="text-align: center;" width="10%">Country</th>
                  <th style="text-align: center;" width="15%">Processing type</th>
                  <th style="text-align: center;" width="10%">Start date</th>
                  <th style="text-align: center;" width="10%">End Date</th>
                  <th style="text-align: center;" width="5%">Total Applicant</th>
                  <th style="text-align: center;" width="10%">Total USD</th>-->
                  <th style="text-align: center;" width="30%">Reference Id</th>
                  <th style="text-align: center;" width="20%">Details</th>
                  <th style="text-align: center;" width="20%">Action</th>
                  <th style="text-align: center;" width="20%">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($applies as $apply)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  {{--<td>{{$apply->select_country}}</td>
                  <td>{{$apply->processing_type}}</td>
                  <td>{{$apply->arrival_date}}</td>
                  <td>{{$apply->end_date}}</td>
                  <td>{{$apply->applicant}}</td>
                  <td>{{$apply->totalusd}}</td>--}}
                  <td>{{$apply->ref_number}}</td>

                  <td>
                     <a href="{{route('new.details.single',$apply->ref_number)}}"><button class="btn btn-primary">Details</button></a>
                  </td>

                  <td>
                     <a href="{{route('make.application.complete',$apply->ref_number)}}"><button class="btn btn-success">Make Complete</button></a>
                  </td>

                  <td>
                    <form method="POST" action="{{action('AdminApplyController@destroy',['id'=>$apply->ref_number])}}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                       <span onclick = "return confirm('Are You Sure To Delete ?')" href=""><button class="btn btn-danger">Delete</button></span>
                    </form>
                  </td>
                </tr>
               @endforeach
                </tbody>             
              </table>
            </div>
            <!-- /.box-body -->
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
