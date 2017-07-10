<div class="well">
    <div class="row">  
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('company', 'Company') !!}
                {!! Form::text('company', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('role', 'Role') !!}
                {!! Form::text('role', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
    </div>
    <div class="row">  
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('since', 'Since') !!}
                {!! Form::date('since', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>        
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('until', 'Until') !!}
                {!! Form::date('until', null, ['class' => 'form-control']) !!}                                                  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">            
                {!! Form::label('id_language', 'Language') !!}           
                {!! Form::select('id_language', ['1' => 'Spanish', '2' => 'English'], null, ['class' => 'form-control', 'required' => 'required']) !!}
            </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">            
                {!! Form::label('description', 'Description') !!}           
                {!! Form::textarea('description',null,['class'=>'form-control', 'rows' => 10, 'required' => 'required']) !!}             
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::submit('Save',['class' => 'btn btn-primary btn-block']) !!} 
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}