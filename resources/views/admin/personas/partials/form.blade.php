
<div class="row">

<div class="col-md-8">
        <div class="from-group">    
            {!! Form::label('nombre','Nombre ') !!}
            
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
            
        </div>
        
        <div class="from-group">    
                {!! Form::label('apellidos','Apellidos') !!}
                
                {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}   
                
        </div>
        
        <div class="from-group">    
                {!! Form::label('descripcion','Descripcion') !!}
                
                {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}   
                
        </div>
        
        </div>
        
<div class="col-md-4">
        <div class="from-group">    
                {!! Form::label('imguno','Imagen uno') !!}
                
                {!! Form::file('imguno') !!}   
            
            </div>
        
        <div class="from-group">    
                {!! Form::label('imgdos','Imagen Dos') !!}
                
                {!! Form::file('imgdos') !!}   
            
        </div>

        <hr>
        <div class="from-group">    
                
            {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
            
        </div>
        
</div>
        
        
       


</div>
