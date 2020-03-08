<div class="form-group md-12">
    <strong>
{{Form::label('marca','Marca',['class'=>''])}}
    </strong>
{{Form::text('marca',null,
['class'=>'form-control','placeholder'=>'ingrese una Marca..'])}}
</div>
{{Form::submit('Guardar',['class'=>'btn btn-info'])}}
