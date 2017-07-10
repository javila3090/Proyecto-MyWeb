@extends('layouts.base')
    
@section('content')
<div id="wrapper">    
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Languages</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-info btn-sm open-modal-create-language">New Language</button>
            </div>
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
                <table id="skills" class="table table-bordered table-responsive table-hover text-center">
                    <thead class="table-header">
                        <tr>
                            <th class="text-center" style="width: 60%">Name</th>
                            <th class="text-center" style="width: 20%">Percentage</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($languages as $language)
                        <tr>
                            <td>{{ $language->name }}</td>
                            <td>{{ $language->percentage }}</td>                            
                            <td><button class="btn btn-warning btn-sm open-modal-edit-language" value="{{$language->id}}"><span class="glyphicon glyphicon-edit"></span></button></td>
                            <td><a href="{{ route('destroy/language', $language) }}" onclick="return confirm('El registro será eliminado ¿Está seguro?')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Languages</h4>
            </div>

            <div class="modal-body">

            </div>


        </div>
    </div>
</div>
<!-- /#wrapper -->
@endsection