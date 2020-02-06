<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recuperar los proyectos ordenados por fecha de actualización descendente, así como ordenados por titulo de forma ascendente y paginados de 2 en 2
        $projects = Project::latest('updated_at')->orderBy('title')->paginate(2);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {
        // Se deben especificar en el modelo, los campos que se quieren asignar masivamente -- $fillable, cuando se hace uso de $request->all()
        // Project::create($request->all());

        // Se puede especificar en el modelo, que ningún campo se quiere proteger contra asignación masiva -- $guarded, ya que estamos protegidos al registrar los campos correctos con  $request->only()
        // Project::create($request->only('title', 'url', 'description'));

        // Podemos omitir las propiedades $fillable y $guarded en el modelo, si nos protegemos de la asignación masiva a través del resultado de validación del FormRequest. $request->validated() nos retorna los campos que pasaron la validación, y por lógica, serán los campos que si se pueden asignar masivamente en la base de datos
        Project::create($request->validated());
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // Route Model Binding busca implitamente el proyecto con base en la url (ver modelo Project)
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Formulario de edición de contenido';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
