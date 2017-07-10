<!--Incluir mensaje de error-->
@if (count($errors) > 0)
@include('partials.errors')
@endif

<!--Incluir mensaje de éxito-->
@include('partials.messages')

<!--Incluir mensaje de éxito-->
{!! Form::open(['route' => 'store/portfolio', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
@include('partials.fieldsPortfolio')  