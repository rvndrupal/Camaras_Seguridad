<div class="row">

    <div class="col-md-9">
        <div class="from-group {{ $errors->has('titulo') ? 'has-error': '' }}">    
            {!! Form::label('titulo','Título ') !!}
            
            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}   

            {{--  {!! $errors->first('name','<span class="alert-danger">:message</span>') !!}  funciona--}}
            
        </div>

        <div class="from-group {{ $errors->has('nosotros') ? 'has-error': '' }}">    
                {!! Form::label('nosotros','Nosotros') !!}
                
                {!! Form::text('nosotros', null, ['class' => 'form-control ']) !!}   

                 {!! $errors->first('nosotros','<span class="alert-danger">:message</span>') !!}  
                
        </div>

        <div class="from-group {{ $errors->has('noso_titulo') ? 'has-error': '' }}">    
                {!! Form::label('noso_titulo','Título de Nosotros') !!}
                
                {!! Form::text('noso_titulo', null, ['class' => 'form-control ']) !!}   

                 {!! $errors->first('noso_titulo','<span class="alert-danger">:message</span>') !!}  
                
        </div>

        <div class="from-group {{ $errors->has('noso_descri') ? 'has-error': '' }}">    
                {!! Form::label('noso_descri','Descripción') !!}
                
                {!! Form::textarea('noso_descri', null, ['class' => 'form-control ']) !!}   

                 {!! $errors->first('noso_descri','<span class="alert-danger">:message</span>') !!}  
                
        </div>


    </div>

    <div class="col-md-3">
       

        <div class="from-group">    
                {!! Form::label('created_at','Fecha de Publicación') !!}
                
                {!! Form::date('created_at', null, ['class' => 'form-control']) !!}   

                {!! $errors->first('created_at','<span class=" alert-danger">El campo fecha es Obligatorio</span>') !!}  
                
        </div>
        <div class="from-group">    
                {!! Form::label('banner','Banner') !!}
                
                {!! Form::file('banner') !!}   
            
            </div>
        <hr>
        <div class="from-group">    
                
                {!! Form::submit('Guardar', ['class' => 'btn btn-block btn-primary']) !!}   
                
        </div>
    </div>

    
</div>




