@extends('layouts.base')

@section('content')
<div id="wrapper">    
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Message details</h1>
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
            
        <!--Incluir mensaje de éxito-->
        {!! Form::model($message,['method' => 'PUT']) !!}
        <div class="well">
            <div class="row">  
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('sender', 'Sender') !!}
                        {!! Form::text('sender', null, ['class' => 'form-control' , 'required' => 'required', 'readonly' => 'readonly']) !!}                                                  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-gronup">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required', 'readonly' => 'readonly']) !!}                                                  
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('subject', 'Subject') !!}
                        {!! Form::text('subject', null, ['class' => 'form-control' , 'required' => 'required', 'readonly' => 'readonly']) !!}                                                  
                    </div>
                </div>                
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('created_at', 'Created at') !!}
                        {!! Form::text('created_at', null, ['class' => 'form-control' , 'required' => 'required', 'readonly' => 'readonly']) !!}                                                  
                    </div>
                </div>        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">            
                        {!! Form::label('message', 'Message') !!}           
                        {!! Form::textarea('message',null,['class'=>'form-control', 'rows' => 10, 'required' => 'required', 'readonly' => 'readonly']) !!}             
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group"> 
                        <a href="javascript:history.back()" class="btn btn-danger btn-block">Volver</a>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection