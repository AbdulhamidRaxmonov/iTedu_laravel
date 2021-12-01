@extends('admin::layouts.master')
@section('header')
   <strong>Edit Slide</strong>  
@endsection
@section('content')
   <form action="{{route('slide.update', $slide->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PATCH')
       <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-sm btn-oval">
                <i class="fa fa-save"></i>Save
            </button>
            <a href="{{route('slide.index')}}" class="btn btn-warning btn-sm btn-oval">
                <i class="fa fa-reply"></i>Back
            </a>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-7">
                @component('admin::coms.alert')
                @endcomponent
                    <div class="form-group row">
                        <label for="title" class="col-sm-3">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" required autofocus value="{{$slide->title}}">
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="url" class="col-sm-3">URL <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="url" name="url" required  value="{{$slide->url}}">
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="description" class="col-sm-3">Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description"  value="{{$slide->description}}">
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="sequence" class="col-sm-3">Sequence <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="sequence" name="sequence" value="{{$slide->sequence}}">
                        </div>
                   </div>
                </div>
                <div class="col-sm-5">
                <div class="form-group row">
                        <label for="photo" class="col-sm-3">Photo <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="photo" name="photo" onchange="preview(event)" accept="image/*">
                            <div style="margin-top:9px">
                              <img src="{{asset($slide->photo)}}" alt="" id="img" width="150"> 
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
       </div> 
   </form>
@endsection

@section('js')
     <script>
         $(document).ready(function(){
             $('#sidebar-menu li').removeClass('active open');
             $('#sidebar-menu li ul li').removeClass('active');            
             $("#menu_slide").addClass('active');
         });
     </script>
@endsection