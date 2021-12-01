@extends('admin::layouts.master')
@section('header')
   <strong>Edit Feature</strong>  
@endsection
@section('content')
   <form action="{{route('feature.update', $feature->id)}}" method="POST">
       @csrf
       @method('PATCH')
       <div class="card card-gray">
        <div class="toolbox">
            <button class="btn btn-primary btn-sm btn-oval">
                <i class="fa fa-save"></i>Save
            </button>
            <a href="{{route('feature.index')}}" class="btn btn-warning btn-sm btn-oval">
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
                            <input type="text" class="form-control" id="title" name="title" required autofocus value="{{$feature->title}}">
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="icon" class="col-sm-3">Icon <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="icon" name="icon" required  value="{{$feature->icon}}">
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="description" class="col-sm-3">Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="description" id="description" cols="30" rows="2" class="form-control">{{$feature->description}}</textarea>
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="url" class="col-sm-3">URL <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="url" name="url" required value="{{$feature->url}}">
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

            
             $("#menu_feature").addClass('active');
         });
     </script>
@endsection