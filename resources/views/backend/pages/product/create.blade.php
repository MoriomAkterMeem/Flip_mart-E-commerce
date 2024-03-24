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
              <div class="card-header bg-dark text-white">
                <h3 class="display-4 text-center tx-30">Create A New Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
                <div class="col-md-6">
                  <!-- form start -->
                  <form action= "{{route('product.store')}}" method= "POST" enctype= "multipart/form-data">
                    @csrf
                    <div class="card-body">

                      <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" class="form-control" name= "title">
                      </div>

                      <div class="form-group">
                        <label>Regular Price</label>
                        <input type="text" class="form-control" name= "regular_price">
                      </div>

                      <div class="form-group">
                        <label>Offer Price</label>
                        <input type="text" class="form-control" name= "offer_price">
                      </div>

                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name= "quantity">
                      </div>

                      <div class="form-group">
                        <label>Sku Code</label>
                        <input type="text" class="form-control" name= "sku_code">
                      </div>

                      <div class="form-group">
                        <label>Tags</label>
                        <input type="text" class="form-control" name= "tags">
                      </div>

                      <div class="form-group">
                        <label>Featured Product</label>
                        <select class="form-control select2" name= "featured_item" style="width: 100%;">
                          <option selected="selected">Please select one option</option> 
                          <option value="0">Normal</option>
                          <option value="1">Featured</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Product Brand</label>
                        <select class="form-control select2" name= "brand_id" style="width: 100%;">
                          <option selected="selected">Please select one option</option>

                          @foreach(App\Models\Backend\Brand::orderBy('name','asc')->get() as $parentcat)
                          <option value= "{{$parentcat->id}}">{{$parentcat->name}}</option>

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
                        <label>Product Category</label>
                        <select class="form-control select2" name= "category_id" style="width: 100%;">
                          <option selected="selected">Please select one option</option>

                          @foreach(App\Models\Backend\Category::orderBy('name','asc')->where('is_parent',0)->get() as $parentcat)
                          <option value= "{{$parentcat->id}}">{{$parentcat->name}}</option>

                          @foreach(App\Models\Backend\Category::orderBy('name','asc')->where('is_parent',$parentcat->id)->get() as $childcat)
                          <option value= "{{$childcat->id}}">{{$childcat->name}}</option>

                          @endforeach
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Product/Type Condition</label>
                        <select class="form-control select2" name= "product_type" style="width: 100%;">
                          <option selected="selected">Please select one option</option>
                          <option value="0">New</option>
                          <option value="1">Pre_Owned</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" name= "status" style="width: 100%;">
                          <option selected="selected">Please select user account</option>
                          <option value="0">Inactive</option>
                          <option value="1">Active</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Product Short Description</label>
                        <textarea class="form-control" rows="3" name= "short_desc" placeholder="Enter ..."></textarea>
                      </div>

                      <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="3" name= "desc" placeholder="Enter ..."></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputFile">Product Logo/Image</label>
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
                          <button type="submit" name= "addCategory" class="btn btn-primary w-100">Add New Product</button>
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
