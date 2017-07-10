{!! Form::model($about,['route' => ['update/about', $about], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
{!! form::hidden('name_img',null,['class' => 'form-control']) !!}
{!! form::hidden('route_img',null,['class' => 'form-control']) !!}
<div class="well">
    <div class="row">  
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('first_name', 'First name') !!}
                {!! Form::text('first_name', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('last_name', 'Last name') !!}
                {!! Form::text('last_name', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
    </div>
    <div class="row">  
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('phone', 'Phone number') !!}
                {!! Form::text('phone', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('position', 'Position') !!}
                {!! Form::text('position', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('address', 'Address') !!}
                {!! Form::text('address', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
    </div>
    <div class="row">  
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('twitter', 'Twitter') !!}
                {!! Form::text('twitter', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('facebook', 'Facebook') !!}
                {!! Form::text('facebook', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('linkedin', 'Linkedin') !!}
                {!! Form::text('linkedin', null, ['class' => 'form-control' , 'required' => 'required']) !!}                                                  
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">            
                {!! Form::label('resume', 'Resume') !!}           
                {!! Form::textarea('resume',null,['class'=>'form-control', 'rows' => 10, 'required' => 'required']) !!}             
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
                {!! Form::label('image', 'Image') !!}           
                {!! form::file('image',null,['class' => 'form-control']) !!}
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