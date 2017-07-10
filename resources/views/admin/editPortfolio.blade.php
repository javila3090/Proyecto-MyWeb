<!--Incluir mensaje de error-->
@if (count($errors) > 0)
@include('partials.errors')
@endif

<!--Incluir mensaje de éxito-->
@include('partials.messages')

<!--Incluir mensaje de éxito-->
{!! Form::model($portfolio,['route' => ['update/portfolio', $portfolio], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}

{!! form::hidden('name',null,['class' => 'form-control']) !!}
{!! form::hidden('route',null,['class' => 'form-control']) !!}
            
@include('partials.fieldsPortfolio') 
