<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

/**
 * Class EspecialidadeController
 * @package App\Http\Controllers
 */
class EspecialidadeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-especialidad|crear-especialidad|editar-especialidad|borrar-especialidad', ['only' => ['index']]);
         $this->middleware('permission:crear-especialidad', ['only' => ['create','store']]);
         $this->middleware('permission:editar-especialidad', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-especialidad', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = Especialidade::paginate();

        return view('especialidade.index', compact('especialidades'))
            ->with('i', (request()->input('page', 1) - 1) * $especialidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidade = new Especialidade();
        return view('especialidade.create', compact('especialidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Especialidade::$rules);

        $especialidade = Especialidade::create($request->all());

        return redirect()->route('especialidades.index')
            ->with('success', 'Especialidade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialidade = Especialidade::find($id);

        return view('especialidade.show', compact('especialidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidade = Especialidade::find($id);

        return view('especialidade.edit', compact('especialidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Especialidade $especialidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialidade $especialidade)
    {
        request()->validate(Especialidade::$rules);

        $especialidade->update($request->all());

        return redirect()->route('especialidades.index')
            ->with('success', 'Especialidade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $especialidade = Especialidade::find($id)->delete();

        return redirect()->route('especialidades.index')
            ->with('success', 'Especialidade deleted successfully');
    }
}
