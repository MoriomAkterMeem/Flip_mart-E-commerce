@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>Add Category Froms</h4>
        <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
      </div>
  </div><!-- d-flex -->

    <section class="content mt-3">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="display-4 text-center tx-30">Create A New Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
                <div class="col-md-6">
                  <!-- form start -->
                  <form action= "{{route('category.store')}}" method= "POST" enctype= "multipart/form-data">
                    @csrf
                    <div class="card-body">

                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name= "name" placeholder="Name">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name= "description" placeholder="Enter ..."></textarea>
                      </div>

                      <div class="form-group">
                        <label>Is Parent</label>
                        <select class="form-control select2" name= "is_parent" style="width: 100%;">
                          <option selected="selected">Please select one option</option> 

                          <option value="0">No Featured</option>
                          @foreach(App\Models\Backend\Category::orderBy('name','asc')->where('is_parent',0)->get() as $parentcat)
                          <option value= "{{$parentcat->id}}">{{$parentcat->name}}</option>

                          @foreach(App\Models\Backend\Category::orderBy('name','asc')->where('is_parent',$parentcat->id)->get() as $childcat)
                          <option value="{{$childcat->id}}">{{$childcat->name}}</option>

                          @endforeach
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div> 
                <!-- 2nd col start -->
                <div class="col-md-6">
                    <div class="card-body">

                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" name= "status" style="width: 100%;">
                          <option selected="selected">Please select one option</option>
                          <option value="0">Inactive</option>
                          <option value="1">Active</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputFile">Category Logo/Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name= "image" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="card-footer">
                          <button type="submit" name= "addCategory" class="btn btn-primary w-100">Add New Category</button>
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
