@extends('myadmin.adminmaster')
@section('title','Country')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Exempt Visa Country
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Show Exempt Visa Country</a></li>
        <li class="active"> Exempt Visa Country</li>
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
                  <th style="text-align: center;" width="20%">Number</th>
                  <th style="text-align: center;" width="40%">Name</th>
                  <th style="text-align: center;" width="20%">Action</th>
                  <th style="text-align: center;" width="20%">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($countries as $country)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$country->name}}</td>
                    <td>
                  
                   <a href="{{route('remove.country.exempt',$country->id)}}"><button class="btn btn-success">Remove From Exempt List</button></a>
                   
                  </td>
                  <td>
                    <form method="POST" action="{{action('CountryController@destroy',['id'=>$country->id])}}">
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
