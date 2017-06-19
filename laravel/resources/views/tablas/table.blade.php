<div class="table-responsive">
        <table class="table dtable display table-bordered  table hover table-condensed" id="tabla_table">
            <thead  class="thead-inverse">
                <tr>
	                @foreach($colums as $column)
	                    <td>
							{{$column->column_name}}
	                    </td>
	                @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                    <tr>
		                @foreach($row as $value)
		                	<td>{{$value}}</td>
		                @endforeach
	                </tr>
                @endforeach
            </tbody>
        </table>
</div>
