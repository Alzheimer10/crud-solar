<div class="table-responsive">
    {!! Form::open(['route' => ['parametros_medidores.eliminar'], 'method' => 'post']) !!}
        <table class="table dtable display table-bordered  table hover table-condensed" id="paramatros_medidores_table">
            <thead  class="thead-inverse">
                <tr>
                    <th><input name="select_all" id="select_all" value="1" type="checkbox"></th>
                        <td>id_ohm</td>
                        <td>id_canal485</td>
                        <td>id_medidor</td>
                        <td>id_serial</td>
                        <td>id_modbus</td>
                        <td>nombre_cliente</td>
                        <td>id_cliente</td>
                        <td>tipo</td>
                        {{--
                        <td>id_ubicacion</td>
                        <td>fecha_inst</td>
                        <td>fecha_elim</td>
                        <td>fecha_revi</td>
                        <td>ohm_esclavo</td>
                        <td>tarifa1_inicio_int1</td>
                        <td>tarifa1_fin_int1</td>
                        <td>tarifa1_inicio_int2</td>
                        <td>tarifa1_fin_int2</td>
                        <td>tarifa2_inicio_int1</td>
                        <td>tarifa2_fin_int1</td>
                        <td>tarifa2_inicio_int2</td>
                        <td>tarifa2_fin_int2</td>
                        <td>tarifa3_inicio_int1</td>
                        <td>tarifa3_fin_int1</td>
                        <td>tarifa3_inicio_int2</td>
                        <td>tarifa3_fin_int2</td>
                        <td>tarifa4_inicio_int1</td>
                        <td>tarifa4_fin_int1</td>
                        <td>tarifa4_inicio_int2</td>
                        <td>tarifa4_fin_int2</td>
                        <td>tarifa_multi_intervalo</td>
                        <td>dem_max1</td>
                        <td>dem_max2</td>
                        <td>dem_max3</td>
                        <td>dem_max4</td>
                        <td>ct</td>
                        <td>codigo_consumidor</td>
                        --}}
                        <td>num_consumidor</td>
                        <td>funcion</td>
                        <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $valor)
                    <tr>
                        <td>{!! Form::checkbox('ids[]',  $valor->id_bd, false) !!} {{ $valor->id_bd }}</td>
                        <td>{{ $valor->id_ohm }}</td>
                        <td>{{ $valor->id_canal485 }}</td>
                        <td>{{ $valor->id_medidor }}</td>
                        <td>{{ $valor->id_serial }}</td>
                        <td>{{ $valor->id_modbus }}</td>
                        <td>{{ $valor->nombre_cliente }}</td>
                        <td>{{ $valor->id_cliente }}</td>
                        <td>{{ $valor->tipo }}</td>
                        {{--
                        <td>{{ $valor->id_ubicacion }}</td>
                        <td>{{ $valor->fecha_inst }}</td>
                        <td>{{ $valor->fecha_elim }}</td>
                        <td>{{ $valor->fecha_revi }}</td>
                        <td>{{ $valor->ohm_esclavo }}</td>
                        <td>{{ $valor->tarifa1_inicio_int1 }}</td>
                        <td>{{ $valor->tarifa1_fin_int1 }}</td>
                        <td>{{ $valor->tarifa1_inicio_int2 }}</td>
                        <td>{{ $valor->tarifa1_fin_int2 }}</td>
                        <td>{{ $valor->tarifa2_inicio_int1 }}</td>
                        <td>{{ $valor->tarifa2_fin_int1 }}</td>
                        <td>{{ $valor->tarifa2_inicio_int2 }}</td>
                        <td>{{ $valor->tarifa2_fin_int2 }}</td>
                        <td>{{ $valor->tarifa3_inicio_int1 }}</td>
                        <td>{{ $valor->tarifa3_fin_int1 }}</td>
                        <td>{{ $valor->tarifa3_inicio_int2 }}</td>
                        <td>{{ $valor->tarifa3_fin_int2 }}</td>
                        <td>{{ $valor->tarifa4_inicio_int1 }}</td>
                        <td>{{ $valor->tarifa4_fin_int1 }}</td>
                        <td>{{ $valor->tarifa4_inicio_int2 }}</td>
                        <td>{{ $valor->tarifa4_fin_int2 }}</td>
                        <td>{{ $valor->tarifa_multi_intervalo }}</td>
                        <td>{{ $valor->dem_max1 }}</td>
                        <td>{{ $valor->dem_max2 }}</td>
                        <td>{{ $valor->dem_max3 }}</td>
                        <td>{{ $valor->dem_max4 }}</td>
                        <td>{{ $valor->ct }}</td>
                        <td>{{ $valor->codigo_consumidor }}</td>
                        --}}
                        <td>{{ $valor->num_consumidor }}</td>
                        <td>{{ $valor->funcion }}</td>
                        <td>
                            <div class='btn-group'>
                                <a href="{!! route('parametros_medidores.show', [$valor->id_bd]) !!}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="{!! route('parametros_medidores.edit', [$valor->id_bd]) !!}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> ELIMINAR ', ['type' => 'submit', 'class' => 'btn btn-app-red', 'onclick' => "return confirm('Estas seguro?')"]) !!}
    {!! Form::close() !!}
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#select_all").on('click', function(){
                var value = $(this).prop('checked');
                $('#paramatros_medidores_table tbody tr').each(function (index2) {
                    if (value)
                        $(this).find('td:first-child input').attr('checked',true).prop("checked", "checked");
                    else
                        $(this).find('td:first-child input').attr('checked',false).prop("checked", "");
                });
            });
            $("#eliminar").on('click', function(e){
              BootstrapDialog.show({
                    title: 'WARNING',
                    message: 'Desea continuar?',
                    buttons: [{
                        label: 'NO',
                        action: function(dialog) {
                            dialog.close();
                        }
                    }, {
                        label: 'SI',
                        action: function(dialog){
                            var _token = $("input[name='_token']").val();
                            $.ajax({
                                url: "{!! route('parametros_medidores.eliminar') !!}",
                                type:'POST',
                                data: $('#rows').serializeArray(),
                                success: function(data) {
                                    console.log(data);
                                    
                                },
                                error: function(jqXHR, textStatus, errorThrown){
                                    console.log(errorThrown);
                                }
                            });
                            dialog.close();
                        }
                    }]
                });

            });
        });
    </script>
@endsection