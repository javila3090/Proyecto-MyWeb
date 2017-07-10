@extends('layouts.base')
    
@section('content')
<div id="wrapper">    
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Experience</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-info btn-sm open-modal-create-exp">New Job Experience</button>
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
                            <th class="text-center">Company</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Since</th>
                            <th class="text-center">Until</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($experiences as $experience)
                        <tr>
                            <td>{{ $experience->company }}</td>
                            <td>{{ $experience->role }}</td>
                            <td>{{ $experience->since }}</td>
                            <td>{{ $experience->until }}</td>
                            <td>{{ $experience->description }}</td>                            
                            <td><button class="btn btn-warning btn-sm open-modal-edit-exp" value="{{$experience->id}}"><span class="glyphicon glyphicon-edit"></span></button></td>
                            <td><a href="{{ route('destroy/experience', $experience) }}" onclick="return confirm('El registro será eliminado ¿Está seguro?')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
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
                <h4 class="modal-title" id="myModalLabel">Experience</h4>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<!-- /#wrapper -->
@endsection