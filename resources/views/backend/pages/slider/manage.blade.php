@extends('backend.layout.template')

@section('body')

<!-- Main content -->
<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
      <div>
        <h4>Sliders Table</h4>
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
                        <h3 class="display-4 text-center tx-30">Manage All Sliders</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="table-hover">
                        <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                            <th>SI</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Sub_Title</th>
                            <th>Description</th>
                            <th>Button_Text</th>
                            <th>Button_Url</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $i= 1; @endphp
                            @foreach ($sliders as $slider) <!-- Compact ProductController Index -->

                            <tr><th scope= "row">{{ $i }}</th>
                            <td>
                                @if(!is_null($slider->image))
                                <img src= "{{asset('Backend/img/slider')}}/{{$slider->image}}" width= "40">
                                @else
                                No Thumbnail
                                @endif
                            </td>

                            <td>{{$slider->title}}</td>
                            <td>{{$slider->sub_title}}</td>
                            <td class= "desc">{{$slider->description}}</td>
                            <td>{{$slider->button_text}}</td>
                            <td>{{$slider->button_url}}</td>

                            <td>
                                <!-- Edit -->
                                <a class= "btn btn-info btn-sm" href= "{{route('slider.edit',$slider->id)}}">
                                <i class= "fas fa-pencil-alt"></i></a>
                                <!-- Delete -->
                                <a class= "btn btn-danger btn-sm" href= "{{route('slider.destroy',$slider->id)}}" data-toogle= "modal" data-target= "#deleteSlider{{$slider->id}}"><i class= "fas fa-trash"></i></a>
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
