<div class="form-group md-12">
    <strong>


<strong>

{{Form::label('categoria','Categoria',['class'=>''])}}
    </strong>
{{Form::text('categoria',null,
['class'=>'form-control','placeholder'=>'ingrese una categorias..'])}}







<strong>
    {{Form::label('descripcion','Descripcion',['class'=>''])}}
        </strong>
    {{Form::text('descripcion',null,
    ['class'=>'form-control','placeholder'=>'ingrese un Descripcion..'])}}









</div>
{{Form::submit('Guardar',['class'=>'btn btn-info'])}}



