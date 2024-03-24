@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>District Forms</h4>
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
                <h3 class="display-4 text-center tx-30">Update District</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <!-- form start -->
                  <form action="{{ route('district.update', $district->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>District Name</label>
                            <input type="text" class="form-control" name= "name">
                        </div>

                        <div class="form-group">
                            <label>Division Name</label>
                            <select class="form-control select2" name= "division_id" style="width: 100%;">
                                <option selected="selected">Please select one option</option>
                                 
                                @foreach ($divisions as $division)
                                <option value="{{$division->id}}">{{$division->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                        <div class="card-footer">
                          <button type="submit" name= "addCategory" class="btn btn-primary w-100">Update District</button>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </form>
                  <!-- Form Code End -->
                </div> 
              </div>
            </div>
            <!-- /.card -->
          </div>  
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>

