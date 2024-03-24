@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>Products Table</h4>
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
                        <h3 class="display-4 text-center tx-30">Manage All Products</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="table-hover">
                        <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                            <th>SI</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Regular Price</th>
                            <th>Offer Price</th>
                            <th>Featured</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $i= 1; @endphp
                            @foreach ($products as $product) <!-- Compact ProductController Index -->

                            <tr><th scope= "row">{{ $i }}</th>
                                <td>{{$product->title}}</td>

                            <td>
                                @if(!is_null($product->image))
                                <img src= "{{asset('Backend/img/product')}}/{{$product->image}}" width= "40">
                                @else
                                No Thumbnail
                                @endif
                            </td>

                            <td>{{ $product->brand->name ?? 'N/A' }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>


                            <td>{{ $product->quantity }} PCs</td>
                            <!--quantityer jaygay dite hobe edit korar sommoy tags -->
                            <td>{{ $product->regular_price }} BDT</td>
                            <td>
                                @if (!is_null($product->offer_price)) {{$product->offer_price}} BDT
                                @else
                                <span>Not Available</span>
                                @endif
                            </td>

                            <td>
                                @if ($product->featured_item== 1)
                                <span class= "badge badge-success">Yes</span>
                                @else
                                <span class= "badge badge-Warning">No</span>
                                @endif
                            </td>

                            <td>
                                @if ($product->status== 1)  
                                <span class= "badge badge-success">Active</span>
                                @else
                                <span class= "badge badge-warning">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <!-- Edit -->
                                <a class= "btn btn-info btn-sm" href= "{{route('product.edit',$product->id)}}">
                                <i class= "fas fa-pencil-alt"></i></a>
                                <!-- Delete -->
                                <a class= "btn btn-danger btn-sm" href= "{{route('product.destroy',$product->id)}}" data-toogle= "modal" data-target= "#deleteBrand{{$product->id}}"><i class= "fas fa-trash"></i></a>
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
</div>
