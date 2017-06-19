<!-- input id_ohm -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ohm', 'id_ohm:',['class' => 'form-label','for'=>'id_ohm']) !!}
    {!! Form::text('id_ohm', null, ['class' => 'form-control','id'=>'id_ohm','placeholder'=>'id_ohm','required'=>'true', 'type'=>'text']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input id_canal485 -->
<div class="form-group col-sm-6">
    {!! Form::label('id_canal485', 'id_canal485:',['class' => 'form-label','for'=>'id_canal485']) !!}
    {!! Form::text('id_canal485', null, ['class' => 'form-control','id'=>'id_canal485','placeholder'=>'id_canal485','required'=>'true', 'type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input id_medidor -->
<div class="form-group col-sm-6">
    {!! Form::label('id_medidor', 'id_medidor:',['class' => 'form-label','for'=>'id_medidor']) !!}
    {!! Form::text('id_medidor', null, ['class' => 'form-control','id'=>'id_medidor','placeholder'=>'id_medidor','required'=>'true', 'type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input id_serial -->
<div class="form-group col-sm-6">
    {!! Form::label('id_serial', 'id_serial:',['class' => 'form-label','for'=>'id_serial']) !!}
    {!! Form::text('id_serial', null, ['class' => 'form-control','id'=>'id_serial','placeholder'=>'id_serial','required'=>'true', 'type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input id_modbus -->
<div class="form-group col-sm-6">
    {!! Form::label('id_modbus', 'id_modbus:',['class' => 'form-label','for'=>'id_modbus']) !!}
    {!! Form::text('id_modbus', null, ['class' => 'form-control','id'=>'id_modbus','placeholder'=>'id_modbus','required'=>'true', 'type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input nombre_cliente -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_cliente', 'nombre_cliente:',['class' => 'form-label','for'=>'nombre_cliente']) !!}
    {!! Form::text('nombre_cliente', null, ['class' => 'form-control','id'=>'nombre_cliente','placeholder'=>'nombre_cliente','required'=>'true', 'type'=>'text']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input id_cliente -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'id_cliente:',['class' => 'form-label','for'=>'id_cliente']) !!}
    {!! Form::text('id_cliente', null, ['class' => 'form-control','id'=>'id_cliente','placeholder'=>'id_cliente','required'=>'true', 'type'=>'text']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input id_ubicacion -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ubicacion', 'id_ubicacion:',['class' => 'form-label','for'=>'id_ubicacion']) !!}
    {!! Form::text('id_ubicacion', null, ['class' => 'form-control','id'=>'id_ubicacion','placeholder'=>'id_ubicacion','required'=>'true', 'type'=>'text']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tipo -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'tipo:',['class' => 'form-label','for'=>'tipo']) !!}
    {!! Form::text('tipo', null, ['class' => 'form-control','id'=>'tipo','placeholder'=>'tipo','required'=>'true', 'type'=>'text']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input fecha_inst -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_inst', 'fecha_inst:',['class' => 'form-label','for'=>'fecha_inst']) !!}
    <div class="input-group date">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
            {!! Form::text('fecha_inst', null, ['class' => 'form-control pull-right datepicker','placeholder'=>'fecha_inst','required'=>'true', 'type'=>'text']) !!}
    </div>
    <div class="help-block with-errors"></div>
</div>

<!-- input fecha_elim -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_elim', 'fecha_elim:',['class' => 'form-label','for'=>'fecha_elim']) !!}
    <div class="input-group date">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
            {!! Form::text('fecha_elim', null, ['class' => 'form-control pull-right datepicker','placeholder'=>'fecha_elim', 'type'=>'text']) !!}
    </div>
    <div class="help-block with-errors"></div>
</div>

<!-- input fecha_revi -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_revi', 'fecha_revi:',['class' => 'form-label','for'=>'fecha_revi']) !!}
    <div class="input-group date">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
            {!! Form::text('fecha_revi', null, ['class' => 'form-control pull-right datepicker','placeholder'=>'fecha_revi','type'=>'text']) !!}
    </div>
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa1_inicio_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa1_inicio_int1', 'tarifa1_inicio_int1:',['class' => 'form-label','for'=>'tarifa1_inicio_int1']) !!}
    {!! Form::text('tarifa1_inicio_int1', null, ['class' => 'form-control','id'=>'tarifa1_inicio_int1','placeholder'=>'tarifa1_inicio_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa1_fin_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa1_fin_int1', 'tarifa1_fin_int1:',['class' => 'form-label','for'=>'tarifa1_fin_int1']) !!}
    {!! Form::text('tarifa1_fin_int1', null, ['class' => 'form-control','id'=>'tarifa1_fin_int1','placeholder'=>'tarifa1_fin_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>


<!-- input tarifa1_inicio_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa1_inicio_int2', 'tarifa1_inicio_int2:',['class' => 'form-label','for'=>'tarifa1_inicio_int2']) !!}
    {!! Form::text('tarifa1_inicio_int2', null, ['class' => 'form-control','id'=>'tarifa1_inicio_int2','placeholder'=>'tarifa1_inicio_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa1_fin_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa1_fin_int2', 'tarifa1_fin_int2:',['class' => 'form-label','for'=>'tarifa1_fin_int2']) !!}
    {!! Form::text('tarifa1_fin_int2', null, ['class' => 'form-control','id'=>'tarifa1_fin_int2','placeholder'=>'tarifa1_fin_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa2_inicio_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa2_inicio_int1', 'tarifa2_inicio_int1:',['class' => 'form-label','for'=>'tarifa2_inicio_int1']) !!}
    {!! Form::text('tarifa2_inicio_int1', null, ['class' => 'form-control','id'=>'tarifa2_inicio_int1','placeholder'=>'tarifa2_inicio_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa2_fin_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa2_fin_int1', 'tarifa2_fin_int1:',['class' => 'form-label','for'=>'tarifa2_fin_int1']) !!}
    {!! Form::text('tarifa2_fin_int1', null, ['class' => 'form-control','id'=>'tarifa2_fin_int1','placeholder'=>'tarifa2_fin_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa2_inicio_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa2_inicio_int2', 'tarifa2_inicio_int2:',['class' => 'form-label','for'=>'tarifa2_inicio_int2']) !!}
    {!! Form::text('tarifa2_inicio_int2', null, ['class' => 'form-control','id'=>'tarifa2_inicio_int2','placeholder'=>'tarifa2_inicio_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa2_fin_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa2_fin_int2', 'tarifa2_fin_int2:',['class' => 'form-label','for'=>'tarifa2_fin_int2']) !!}
    {!! Form::text('tarifa2_fin_int2', null, ['class' => 'form-control','id'=>'tarifa2_fin_int2','placeholder'=>'tarifa2_fin_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa3_inicio_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa3_inicio_int1', 'tarifa3_inicio_int1:',['class' => 'form-label','for'=>'tarifa3_inicio_int1']) !!}
    {!! Form::text('tarifa3_inicio_int1', null, ['class' => 'form-control','id'=>'tarifa3_inicio_int1','placeholder'=>'tarifa3_inicio_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa3_fin_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa3_fin_int1', 'tarifa3_fin_int1:',['class' => 'form-label','for'=>'tarifa3_fin_int1']) !!}
    {!! Form::text('tarifa3_fin_int1', null, ['class' => 'form-control','id'=>'tarifa3_fin_int1','placeholder'=>'tarifa3_fin_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa3_inicio_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa3_inicio_int2', 'tarifa3_inicio_int2:',['class' => 'form-label','for'=>'tarifa3_inicio_int2']) !!}
    {!! Form::text('tarifa3_inicio_int2', null, ['class' => 'form-control','id'=>'tarifa3_inicio_int2','placeholder'=>'tarifa3_inicio_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa3_fin_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa3_fin_int2', 'tarifa3_fin_int2:',['class' => 'form-label','for'=>'tarifa3_fin_int2']) !!}
    {!! Form::text('tarifa3_fin_int2', null, ['class' => 'form-control','id'=>'tarifa3_fin_int2','placeholder'=>'tarifa3_fin_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa4_inicio_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa4_inicio_int1', 'tarifa4_inicio_int1:',['class' => 'form-label','for'=>'tarifa4_inicio_int1']) !!}
    {!! Form::text('tarifa4_inicio_int1', null, ['class' => 'form-control','id'=>'tarifa4_inicio_int1','placeholder'=>'tarifa4_inicio_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa4_fin_int1 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa4_fin_int1', 'tarifa4_fin_int1:',['class' => 'form-label','for'=>'tarifa4_fin_int1']) !!}
    {!! Form::text('tarifa4_fin_int1', null, ['class' => 'form-control','id'=>'tarifa4_fin_int1','placeholder'=>'tarifa4_fin_int1', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa4_inicio_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa4_inicio_int2', 'tarifa4_inicio_int2:',['class' => 'form-label','for'=>'tarifa4_inicio_int2']) !!}
    {!! Form::text('tarifa4_inicio_int2', null, ['class' => 'form-control','id'=>'tarifa4_inicio_int2','placeholder'=>'tarifa4_inicio_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input tarifa4_fin_int2 -->
<div class="form-group col-sm-6">
    {!! Form::label('tarifa4_fin_int2', 'tarifa4_fin_int2:',['class' => 'form-label','for'=>'tarifa4_fin_int2']) !!}
    {!! Form::text('tarifa4_fin_int2', null, ['class' => 'form-control','id'=>'tarifa4_fin_int2','placeholder'=>'tarifa4_fin_int2', 'type'=>'text', 'pattern'=>'^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$', 'maxlength'=>'8']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input dem_max1 -->
<div class="form-group col-sm-6">
    {!! Form::label('dem_max1', 'dem_max1:',['class' => 'form-label','for'=>'dem_max1']) !!}
    {!! Form::text('dem_max1', null, ['class' => 'form-control','id'=>'dem_max1','placeholder'=>'dem_max1','type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input dem_max2 -->
<div class="form-group col-sm-6">
    {!! Form::label('dem_max2', 'dem_max2:',['class' => 'form-label','for'=>'dem_max2']) !!}
    {!! Form::text('dem_max2', null, ['class' => 'form-control','id'=>'dem_max2','placeholder'=>'dem_max2', 'type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input dem_max3 -->
<div class="form-group col-sm-6">
    {!! Form::label('dem_max3', 'dem_max3:',['class' => 'form-label','for'=>'dem_max3']) !!}
    {!! Form::text('dem_max3', null, ['class' => 'form-control','id'=>'dem_max3','placeholder'=>'dem_max3','type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input dem_max4 -->
<div class="form-group col-sm-6">
    {!! Form::label('dem_max4', 'dem_max4:',['class' => 'form-label','for'=>'dem_max4']) !!}
    {!! Form::text('dem_max4', null, ['class' => 'form-control','id'=>'dem_max4','placeholder'=>'dem_max4','type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input ct -->
<div class="form-group col-sm-6">
    {!! Form::label('ct', 'ct:',['class' => 'form-label','for'=>'ct']) !!}
    {!! Form::text('ct', null, ['class' => 'form-control','id'=>'ct','placeholder'=>'ct', 'type'=>'number']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input num_consumidor -->
<div class="form-group col-sm-6">
    {!! Form::label('num_consumidor', 'num_consumidor:',['class' => 'form-label','for'=>'num_consumidor']) !!}
    {!! Form::text('num_consumidor', null, ['class' => 'form-control','id'=>'num_consumidor','placeholder'=>'num_consumidor','required'=>'true', 'type'=>'text']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input funcion -->
<div class="form-group col-sm-6">
    {!! Form::label('funcion', 'funcion:',['class' => 'form-label','for'=>'funcion']) !!}
    {!! Form::text('funcion', null, ['class' => 'form-control','id'=>'funcion','placeholder'=>'funcion','required'=>'true', 'type'=>'text']) !!}
    <div class="help-block with-errors"></div>
</div>

<!-- input codigo_consumidor -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_consumidor', 'codigo_consumidor:',['class' => 'form-label','for'=>'codigo_consumidor']) !!}
    {!! Form::text('codigo_consumidor', null, ['class' => 'form-control','id'=>'codigo_consumidor','placeholder'=>'codigo_consumidor','required'=>'true', 'type'=>'text' , 'maxlength'=>'255']) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="row">
    <div class="form-group col-sm-1">
        <a href="{!! route('parametros_medidores.index') !!}" class="btn btn-warning">Atras</a>
    </div>
    <div class="form-group col-sm-1">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cliente").on('change', function(e){
                $('.form-clear').val('');
                if($(this).val()=='')
                    return false;
                e.preventDefault();
                $.ajax({
                    url: "{!! route('parametros_medidores.cliente') !!}",
                    type:'GET',
                    data: {id: $(this).val()},
                    success: function(data) {
                        data=data[0];
                        $('#id').val(data.id);
                        $('#rut').val(data.rut);
                        $('#nombre').val(data.nombre);
                        $('#razon').val(data.razon);
                        console.log(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log(errorThrown);
                    }
                });
            });
        });
    </script>
@endsection