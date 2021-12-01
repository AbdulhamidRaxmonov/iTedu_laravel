@extends('admin::layouts.master')
@section('header')
   <strong>Pages</strong>  
@endsection
@section('content')
    <div class="card card-gray">
        
        <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>slug</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i =1;
                    ?>
                    @foreach($pages as $s)
                     <tr>
                         <td>{{$i++}}</td>
                         <td>{{$s->title}}</td>
                         <td>{{$s->description}}</td>
                         <td>{{$s->slug}}</td>
                         <td>
                             <a href="{{route('page.edit', $s->id)}}" class="btn btn-success btn-sm btn-oval" title="Edit">
                                 <i class="fa fa-edit"></i>
                             </a>
                         </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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