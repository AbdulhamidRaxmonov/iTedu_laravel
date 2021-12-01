@extends('admin::layouts.master')
@section('header')
   <strong>Slides</strong>  
@endsection
@section('content')
    <div class="card card-gray">
        <div class="toolbox">
            <a href="{{route('slide.create')}}" class="btn btn-primary btn-sm btn-oval">
                <i class="fn fn-plus-circle"></i>Create
            </a>
        </div>
        <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>URL</th>
                        <th>Sequence</th>
                        <th>Actions</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $pagex = @$_GET['page'];
                        if(!$pagex)
                        {
                            $pagex = 1;
                        }
                        $i = config('app.row') *($pagex-1) +1;
                    ?>
                    @foreach($slides as $s)
                     <tr>
                         <td>{{$i++}}</td>
                         <td>{{$s->title}}</td>
                         <td>
                             <img src="{{asset($s->photo)}}" alt="" width="100">
                         </td>
                         <td>{{$s->description}}</td>
                         <td>{{$s->url}}</td>
                         <td>{{$s->sequence}}</td>
                         <td>
                             <a href="{{route('slide.delete', $s->id)}}" class="btn btn-danger btn-sm btn-oval" title="Delete" onclick="return confirm('You want to delete?')">
                                 <i class="fa fa-trash"></i>
                             </a>
                             <a href="{{route('slide.edit', $s->id)}}" class="btn btn-success btn-sm btn-oval" title="Edit">
                                 <i class="fa fa-edit"></i>
                             </a>
                         </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
            {{$slides->links()}}
        </div>
    </div>
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