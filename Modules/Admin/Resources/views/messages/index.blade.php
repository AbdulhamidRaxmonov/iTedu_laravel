@extends('admin::layouts.master')
@section('header')
   <strong>Messages</strong>  
@endsection
@section('content')
    <div class="card card-gray">
        <div class="toolbox">
           
        </div>
        <div class="card-block">
        @component('admin::coms.alert')
        @endcomponent
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subjects</th>
                        <th>Messages</th>
                        <th>Data</th> 
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
                    @foreach($message as $s)
                     <tr>
                         <td>{{$i++}}</td>
                         <td>{{$s->name}}</td>
                         <td>{{$s->email}}</td>
                         <td>{{$s->subject}}</td>
                         <td>{{$s->message}}</td>
                         <td>{{$s->created_at}}</td>
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
             $("#menu_message").addClass('active');
         });
     </script>
@endsection