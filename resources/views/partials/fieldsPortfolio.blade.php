<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="well">
            <div class="form-group">
                {!! form::label('title','Title')!!}
                {!! form::text('title',null,['class' => 'form-control','required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! form::label('url','Url')!!}
                {!! form::text('url',null,['class' => 'form-control','required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! form::label('description','Description')!!}
                {!! form::text('description',null,['class' => 'form-control','required' => 'required']) !!}
            </div>
            <div class="form-group">            
                {!! Form::label('id_language', 'Language') !!}           
                {!! Form::select('id_language', ['1' => 'Spanish', '2' => 'English'], null, ['class' => 'form-control', 'required' => 'required']) !!}
            </div>            
            <div class="form-group">
                {!! form::label('image','Imagen')!!}
                {!! form::file('image',null,['class' => 'form-control','required' => 'required']) !!}
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            {!! Form::close() !!}                            
        </div>
    </div>
</div>