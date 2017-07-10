<div class="well">
    <div class="row"> 
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('percentage', 'Percentage') !!}
                {!! Form::text('percentage', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::submit('Save',['class' => 'btn btn-primary btn-block']) !!} 
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cancel</button> 
            </div>
        </div>
    </div>
</div>