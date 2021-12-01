@extends('admin::layouts.master')
@section('header')
   <strong>Edit Page</strong>  
@endsection
@section('content')
   <form action="{{route('page.update', $pages->id)}}" method="POST">
       @csrf
       @method('PATCH')
       <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-sm btn-oval">
                <i class="fa fa-save"></i>Save
            </button>
            <a href="{{route('page.index')}}" class="btn btn-warning btn-sm btn-oval">
                <i class="fa fa-reply"></i>Back
            </a>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-9">
                @component('admin::coms.alert')
                @endcomponent
                    <div class="form-group row">
                        <label for="title" class="col-sm-3">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" required autofocus value="{{$pages->title}}">
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="description" class="col-sm-3">Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="description" id="description" cols="30" rows="6" class="form-control">{{$pages->description}}</textarea>
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="slug" class="col-sm-3">Slug <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="slug" name="slug" required autofocus value="{{$pages->slug}}">
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
             $("#menu_page").addClass('active');
         });
     </script>
@endsection