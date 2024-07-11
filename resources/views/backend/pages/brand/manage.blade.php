@extends('backend.layout.template')

@section('body')

<!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Data Table</h4>
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
                        <h3 class="display-4 text-center tx-30">Manage All Brand</h3>
                    </div>

          <div class="table-hover">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th>SI</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Is_featured</th>
                  <!-- <th>Category/Sub-category</th> -->
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                @php $i= 1; @endphp
                @foreach ($brands as $brand)

                <tr><th scope= "row">{{ $i }}</th>

                  <td>
                    @if(!is_null($brand->image))
                    <img src= "{{asset('Backend/img/brand')}}/{{$brand->image}}" width= "40">
                    @else
                    No Thumbnail
                    @endif
                  </td>

                  <td>{{ $brand->name }}</td>
                  <td>{{ $brand->slug }}</td>
                  <td>{{ $brand->description }}</td>

                  <td>
                    @if ($brand->is_featured==1)  
                    <span class= "badge badge-success">Yes</span>
                    @else
                    <span class= "badge badge-warning">No</span>
                    @endif
                  </td>

                  <td>
                    @if ($brand->status==1)  
                    <span class= "badge badge-success">Active</span>
                    @else
                    <span class= "badge badge-warning">Inactive</span>
                    @endif
                  </td>

                  <td>
                    <!-- Edit -->
                    <a class= "btn btn-info btn-sm" href= "{{route('brand.edit',$brand->id)}}">
                      <i class= "fas fa-pencil-alt"></i></a>
                    <!-- Delete -->
                    <a class= "btn btn-danger btn-sm" href= "{{route('brand.destroy',$brand->id)}}" data-toogle= "modal" data-target= "#deleteBrand{{$brand->id}}"><i class= "fas fa-trash"></i></a>
                  </td>
                </tr>

                @php $i++; @endphp
                @endforeach

              </tbody>
            </table>
          </div><!-- table-wrapper -->
          </div><!-- br-pagebody -->
            </div>
            <!-- /.card -->
        </div>  
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>