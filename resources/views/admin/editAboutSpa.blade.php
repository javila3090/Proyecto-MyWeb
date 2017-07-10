@extends('layouts.base')
    
@section('content')
<div id="wrapper">    
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About me (Spanish)</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!--Incluir mensaje de error-->
        @if (count($errors) > 0)
        @include('partials.errors')
        @endif
            
        <!--Incluir mensaje de éxito-->
        @include('partials.messages')
        
        <!-- Formulario -->
        @include('partials.fieldsAbout');
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
@endsection