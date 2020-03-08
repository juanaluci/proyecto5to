<div class="form-group md-12">
    <strong>

        {{Form::label('marca_id','Marca_id',['class'=>''])}}
    </strong>
{{Form::text('marca-id',null,
['class'=>'form-control','placeholder'=>'ingrese un Codigo..'])}}

<strong>

{{Form::label('categoria_id','Categoria_id',['class'=>''])}}
    </strong>
{{Form::text('categoria-id',null,
['class'=>'form-control','placeholder'=>'ingrese un Codigo..'])}}





{{Form::label('codigo','Codigo',['class'=>''])}}
    </strong>
{{Form::text('codigo',null,
['class'=>'form-control','placeholder'=>'ingrese un Codigo..'])}}


<strong>
    {{Form::label('nombre','Nombre',['class'=>''])}}
        </strong>
    {{Form::text('nombre',null,
    ['class'=>'form-control','placeholder'=>'ingrese un Nombre..'])}}


<strong>
    {{Form::label('descripcion','Descripcion',['class'=>''])}}
        </strong>
    {{Form::text('descripcion',null,
    ['class'=>'form-control','placeholder'=>'ingrese un Descripcion..'])}}





    <strong>
    {{Form::label('estado','Estado',['class'=>''])}}
        </strong>
    {{Form::text('estado',null,
    ['class'=>'form-control','placeholder'=>'ingrese un Estado..'])}}




</div>
{{Form::submit('Guardar',['class'=>'btn btn-info'])}}



