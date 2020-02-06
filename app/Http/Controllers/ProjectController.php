<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        // Aplicar el middleware auth a todos los metodos de este controlador, a excepción de index y show.
        // Es decir, solo usuarios autenticados pueden crear, editar y eliminar proyectos
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recuperar los proyectos ordenados por fecha de actualización descendente, así como ordenados por titulo de forma ascendente y paginados de 2 en 2
        $projects = Project::latest('updated_at')->orderBy('title')->paginate(8);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Enviamos una instancia vacía del modelo Project a la vista create. Esto es necesario dado que estamos reutilizando los controles de formulario tanto para crear como para actualizar.
        //
        // Esto es especial en forms de actualización
        // {{ old('namecontrol', $project->namecontrol) }}
        // Esto es especial en form de creación
        // {{ old('namecontrol') }}
        //
        // Por tanto, si enviamos una instancia vacía de Project no nos lanzará error en el form de creación, ya que el objeto existe pero en sus respectivas propiedades hay valores nulos.
        $project = new Project();
        return view('projects.create', compact('project'));
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

        // Se puede especificar en el modelo, que ningún campo se quiere proteger contra asignación masiva -- $guarded = [], ya que estamos protegidos al registrar los campos correctos con  $request->only()
        // Project::create($request->only('title', 'url', 'description'));

        // $guarded = [] en el modelo, es válido también si nos protegemos de la asignación masiva a través del resultado de validación del FormRequest. $request->validated() nos retorna los campos que pasaron la validación, y por lógica, serán los campos que si se pueden asignar masivamente en la base de datos
        Project::create($request->validated());

        // Redireccionar a la vista index con un mensaje de session (feedback)
        return redirect()->route('projects.index')->with('info', 'El proyecto fue creado con exito');
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
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        // Actualizamos de forma masiva, solo aquellos campos que figuran en la validación
        $project->update($request->validated());

        // Redireccionar a la vista show, con un mensaje de session (feedback)
        return redirect()->route('projects.show', $project)->with('info', 'El proyecto fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        // Dado que la instancia del modelo es inyectado en el controlador a través de Route Model Binding, podemos invocar sus respectivos metodos ActiveRecord (save, update, delete) de forma inmediata
        $project->delete();

        // Redireccionar a la vista index, con un mensaje de session (feedback)
        return redirect()->route('projects.index')->with('info', 'El proyecto fue eliminado con éxito');
    }
}
