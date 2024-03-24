@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>Update Froms</h4>
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
                <h3 class="display-4 text-center tx-30">Update A New Brand</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
                <div class="col-md-6">
                  <!-- form start -->
                  <form action= "{{route('brand.update',$brand->id)}}" method= "POST" enctype= "multipart/form-data">
                    @csrf
                    <div class="card-body">

                      <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" class="form-control" name= "name" value= "{{$brand->name}}" placeholder="Name">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name= "description" placeholder="Enter ...">{{$brand->description}}</textarea>
                      </div>

                      <div class="form-group">
                        <label>Is Featured</label>
                        <select class="form-control select2" name= "is_featured" style="width: 100%;">
                          <option selected="selected">Please select one option</option>  
                            <option value="0" @if($brand->is_featured== 0) selected @endif>No Featured</option>
                            <option value="1" @if($brand->is_featured== 1) selected @endif>Yes Featured</option>
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
                          <option value="0" @if($brand->status== 0) selected @endif>No Status>Inactive</option>
                          <option value="1" @if($brand->status== 1) selected @endif>Yes Status>Active</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputFile">Brand Logo/Image</label>
                        @if(!is_null($brand->image))
                        <img src= "{{asset('backend/img/brand')}}/{{$brand->image}}" width= "40">
                        @else
                        No Thumbnail
                        @endif
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
                          <button type="submit" name= "" class="btn btn-primary w-100">Update</button>
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
