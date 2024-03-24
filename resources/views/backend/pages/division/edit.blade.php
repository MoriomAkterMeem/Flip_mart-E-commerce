@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>Division Froms</h4>
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
                <h3 class="display-4 text-center tx-30">Update Division</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <!-- form start -->
                  <form action= "{{route('division.update',$division->id)}}" method= "POST" enctype= "multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name= "name">
                        </div>

                        <div class="form-group">
                            <label>Priority</label>
                            <input type="text" class="form-control" name= "priority">
                        </div>

                        <div class="form-group">
                        <div class="card-footer">
                          <button type="submit" name= "addCategory" class="btn btn-primary w-100">Update Division</button>
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
