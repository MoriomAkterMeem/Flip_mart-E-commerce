@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>Update Slider</h4>
      </div>
  </div><!-- d-flex -->

    <section class="content mt-3">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-dark text-white">
                <h3 class="display-4 text-center tx-30">Update Sliders</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
                <div class="col-md-6">
                  <!-- form start -->
                  <form action= "{{route('slider.update',$slider->id)}}" method= "POST" enctype= "multipart/form-data">
                    @csrf
                    <div class="card-body">

                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name= "title">
                      </div>

                      <div class="form-group">
                        <label>Sub_Title</label>
                        <input type="text" class="form-control" name= "sub_title">
                      </div>

                      <div class="form-group">
                        <label>Button_Text</label>
                        <input type="text" class="form-control" name= "button_text">
                      </div>

                      <div class="form-group">
                        <label>Button_Url</label>
                        <input type="text" class="form-control" name= "button_url">
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div> 
                <!-- 2nd col start -->
                <div class="col-md-6">
                    <div class="card-body">

                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name= "description" placeholder="Enter ..."></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputFile">Sliders Logo/Image</label>
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
                          <button type="submit" name= "addCategory" class="btn btn-primary w-100">Update Slider</button>
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
