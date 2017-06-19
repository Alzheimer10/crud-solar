<?php

namespace App\Http\Controllers;
use App\Http\Requests\createParametrosMedidoresRequest;
use App\Http\Requests\updateParametrosMedidoresRequest;
use App\Repositories\parametros_medidoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Eloquent;
use DB;
use Flash;
use App\Models\parametros_medidores;

class parametrosMedidoresControllers extends Controller
{

    protected $connection = 'ohm_v2'; 
    protected $table = 'parametros_medidores';
    protected $primaryKey = 'id_bd';
	public $incrementing = TRUE;
    /**
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

    	
        $data = DB::connection($this->connection)
                    ->table($this->table)
                    ->get()->toArray();


        $columns = DB::connection($this->connection)
                    ->select("SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'parametros_medidores'");

		return View('parametros_medidores.index')->with('data', $data)->with('columns',$columns);
    }

    /**
     * Show the form for creating a new grado.
     *
     * @return Response
     */
    public function create()
    {
        $usuarios = DB::connection('mi_energia')
                    ->table('usuarios')
                    ->select('id','rut')
                    ->get()->toArray();
        return view('parametros_medidores.create')->with('clientes',$usuarios);
    }

    /**
     * Store a newly created estudiante in storage.
     *
     * @param CreateestudianteRequest $request
     *
     * @return Response
     */
    public function store(createParametrosMedidoresRequest $request)
    {
        $input = $request->all();
		$medidor = new parametros_medidores($input);
		$medidor->save();
    	dd($medidor);
        $input = $this->parametros_medidoresRepository->create($input);

        Flash::success('Estudiante saved successfully.');

        return redirect(route('estudiantes.index'));
        
    }

    /**
     * Remove the specified estudiante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
    	$medidor = parametros_medidores::findOrFail($id);
        if (empty($medidor)) {
            Flash::error('Medidor no encontrado');
            return redirect(route('parametros_medidores.index'));
        }		
		$medidor->delete();
        Flash::success('Registro eliminado.');
    	return redirect(route('parametros_medidores.index'));
    }

    /**
     * Remove the specified estudiante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
    	$medidor = parametros_medidores::find($id);
        if (empty($medidor)) {
            Flash::error('Medidor no encontrado');
            return redirect(route('parametros_medidores.index'));
        }
        return view('parametros_medidores.show')->with('medidor', $medidor);
    }

    /**
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
    	$medidor = parametros_medidores::find($id);
        if (empty($medidor)) {
            Flash::error('Medidor no encontrado');
            return redirect(route('parametros_medidores.index'));
        }
        return view('parametros_medidores.edit')->with('medidor', $medidor);
    }

    /**
     * @param  int              $id
     * @param UpdategradoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParametrosMedidoresRequest $request)
    {
    	$medidor = parametros_medidores::findOrFail($id);
        if (empty($medidor)) {
            Flash::error('Medidor no encontrado');
            return redirect(route('parametros_medidores.index'));
        }		
		$medidor->update($request->all());
		$medidor->save();
        Flash::success('Registro actualizado.');
    	return redirect(route('parametros_medidores.index'));
    }


    /**
     * Show the form for creating a new grado.
     *
     * @return Response
     */
    public function eliminar(Request $request)
    {	
    	if (empty($request->all()['ids'])) {
        	Flash::error('Seleccione uno o mas registros.');
    		return redirect(route('parametros_medidores.index'));
    	}
    	foreach ($request->all()['ids'] as $id) {
	    	$medidor = parametros_medidores::findOrFail($id);
	        if (!empty($medidor)) {
				$medidor->delete();
	        }
    	}
        Flash::success('Registro eliminado.');
    	return redirect(route('parametros_medidores.index'));
    }

    /**
     * Show the form for creating a new grado.
     *
     * @return Response
     */
    public function cliente(Request $request)
    {	
        $cliente = DB::connection('mi_energia')
                    ->table('usuarios')
                    ->where('id','=',$request->id)
                    ->get()->toArray();
    	return $cliente;
    }
}
