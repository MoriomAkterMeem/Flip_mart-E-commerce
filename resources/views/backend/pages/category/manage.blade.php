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

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h2 class="br-section-label">Manage All Categories</h2>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-hover">
            <table id="datatable1" class="table table-bordered table-striped display responsive nowrap">
              <thead>
                <tr>
                  <th>SI</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <!-- <th>Is_parent</th> -->
                  <th>Category/Sub-category</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                @php $i= 1; @endphp
                @foreach ($categories as $category)
                @if($category->is_parent== 0)

                <tr><th scope= "row">{{ $i }}</th>

                  <td>
                    @if(!is_null($category->image))
                    <img src= "{{asset('Backend/img/category')}}/{{$category->image}}" width= "40">
                    @else
                    No Thumbnail
                    @endif
                  </td>

                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td>{{ $category->description }}</td>

                  <td>
                    @if ($category->is_parent== 0)  
                    <span class= "badge badge-success">Primary Category</span>
                    @else
                    <span class= "badge badge-warning">{{ $category->parent->name }}</span>
                    @endif
                  </td>

                  <td>
                    @if ($category->status== 1)  
                    <span class= "badge badge-success">Active</span>
                    @else
                    <span class= "badge badge-warning">Inactive</span>
                    @endif
                  </td>

                  <td>
                    <!-- Edit -->
                    <a class= "btn btn-info btn-sm" href= "{{route('category.edit',$category->id)}}">
                      <i class= "fas fa-pencil-alt"></i></a>
                    <!-- Delete -->
                    <a class= "btn btn-danger btn-sm" href= "{{route('category.destroy',$category->id)}}" data-toogle= "modal" data-target= "#deleteBrand{{$category->id}}"><i class= "fas fa-trash"></i></a>
                  </td>
                </tr>

                @foreach(App\Models\Backend\Category::orderBy('name','asc')->where('is_parent',$category->id)->get() as $subcat)
                @php $j= $i+1; @endphp

                <tr>
                    <th scope= "row">{{ $j }}</th>
                    <td>
                        @if(!is_null($subcat->image))
                        <img src= "{{asset('Backend/img/category')}}/{{$subcat->image}}" width= "40">
                        @else
                        No Thumbnail
                        @endif
                    </td>

                    <td>{{$subcat->name}}</td>
                    <td>{{$subcat->slug}}</td>
                    <td>{{$subcat->description}}</td>

                    <td>
                        <span class= "badge badge-warning">{{$subcat->parent->name}}</span>
                    </td>

                    <td>
                        @if ($subcat->status== 1)  
                        <span class= "badge badge-success">Active</span>
                        @else
                        <span class= "badge badge-warning">Inactive</span>
                        @endif
                    </td>

                    <td>
                        <!-- Edit -->
                        <a class= "btn btn-info btn-sm" href= "{{route('category.edit',$subcat->id)}}">
                        <i class= "fas fa-pencil-alt"></i></a>
                        <!-- Delete -->
                        <a class= "btn btn-danger btn-sm" href= "{{route('category.destroy',$subcat->id)}}" data-toogle= "modal" data-target= "#deleteBrand{{$category->id}}"><i class= "fas fa-trash"></i></a>
                    </td>
                </tr>

                @php $j++; @endphp
                @endforeach

                @php $i++; @endphp
                @endif
                @endforeach

              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
</div>