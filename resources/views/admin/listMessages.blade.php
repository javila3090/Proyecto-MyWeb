@extends('layouts.base')
    
@section('content')
<div id="wrapper">    
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Messages</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <br>
        <!--Incluir mensaje de error-->
        @if (count($errors) > 0)
        @include('partials.errors')
        @endif
            
        <!--Incluir mensaje de éxito-->
        @include('partials.messages')
            
            
            
        <div class="row"> 
            <div class="col-lg-12">
                <table id="skills" class="table table-bordered table-responsive table-hover text-center" >
                    <thead class="table-header">
                        <tr>
                            <th class="text-center" style="width: 20%">Sender</th>
                            <th class="text-center" style="width: 20%">Sent at</th>                            
                            <th class="text-center" style="width: 20%">Subject</th>
                            <th class="text-center">View</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listMessages as $message)
                        <tr>
                            <td style="width: auto;">{{ $message->sender }}</td>     
                            <td style="width: auto;">{{ $message->created_at }}</td>       
                            <td style="width: auto;">{{ $message->subject }}</td>       
                            
                            <td><a href="{{ route('open/message', $message) }}" title="Abrir" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-open-file" ></span></a></td>
                            <td><a href="{{ route('destroy/message', $message) }}" onclick="return confirm('El registro será eliminado ¿Está seguro?')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<br>
<!-- /#wrapper -->
@endsection