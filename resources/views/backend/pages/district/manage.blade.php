@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>District Table</h4>
        <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
      </div>
  </div><!-- d-flex -->

    <section class="content mt-3">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
            <div class="col-md-10 offset-md-1 mt-4">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header bg-dark text-white">
                        <h3 class="display-4 text-center tx-30">Manage All District</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-md-10 offset-md-2">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">SI</th>
                                    <th scope="col">District Name</th>
                                    <th scope="col">Division Name</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i= 1; @endphp
                                @foreach ($districts as $district)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$district->name}}</td>
                                        <td>{{$district->division->name}}</td>
                                        <td>
                                        <!-- Edit -->
                                        <a class= "btn btn-info btn-sm" href= "{{route('district.edit',$district->id)}}">
                                        <i class= "fas fa-pencil-alt"></i></a>
                                        <!-- Delete -->
                                        <a class= "btn btn-danger btn-sm" href= "{{route('district.destroy',$district->id)}}" data-toogle= "modal" data-target= "#deleteBrand"><i class= "fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @php $i++; @endphp
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- br-pagebody -->
            </div>
            <!-- /.card -->
        </div>  
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
